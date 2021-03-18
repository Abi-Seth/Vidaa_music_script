<?php

//to make sure the user entered the page by clicking the signup button
if (isset($_POST['signup-submit'])) {

    require 'dbh.inc.php';

    $username = $_POST['uid']; 
    $email = $_POST['mail']; 
    $password = $_POST['pwd']; 
    $passwordRepeat = $_POST['pwd-repeat'];
    
    //check errors
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        header("Location: ../register.html?error=emptyfields&uid=".$username."&mail=".$email);
        exist(); 
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../register.html?error=invalidmail&uid");
        exist(); 
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../register.html?error=invalidmail&uid=".$username);
        exist(); 
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../register.html?error=invalidmail&uid=".$username);
        exist(); 
    }
    else if ($password !== $passwordRepeat) {
        header("Location: ../register.html?error=passwodcheck&uid=".$username."&mail".$email);
        exist();  
    }
    else {
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../register.html?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../register.html?error=usertaken&mail=".$email);
                exit();
            }
            else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../register.html?error=squlerror");
                    exist();
                }
                else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../register.html?signup=success");
                    exist();
                }
                }
            }
        }
mysqli_stmt_close($stmt);
mysqli_close($conn); 
    }
else {
    header("Location: ../register.html");
    exist();
}
