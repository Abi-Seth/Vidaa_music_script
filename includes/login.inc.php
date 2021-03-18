<?php

if(isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empt($mailuid) || empty($password)) {
        header("Location: ../index.html?error=emptyfields");
        exit();
    }
    else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers =?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_init($stmt, $sql)) {
            header("Location: ../index.html?error=sqlerror");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
               $pwdCheck = password-verify($password, $row['pwdUsers']);
               if($pwdCheck == false) {
                   header("Location: ../index.php?error=wrongpwd");
                   exit();
               } 
               else if ($pwdCheck == true) {
                   session_start();
                   $_SESSION['userId'] = $row['idUsers'];
                   $_SESSION['userUid'] = $row['uidUsers'];
                    
                   header("Location: ../index.php?login=success");
                   exit();
               }
               else {
                   header("Location: ../index.html?error=wrongpwd");
                   exit();
               }
            }
            else {
                header("location: ../index.php?error=nouser");
                exist();
            }
        }
    }

}
else {
    header("Location: ../index.html");
    exist();
}
