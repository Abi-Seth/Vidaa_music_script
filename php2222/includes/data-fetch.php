<?php

//getting data from the database 

$conn = mysqli_connect("localhost", "root", "", "vidaa-login");

//getting data from vidaa tables of users
$result = mysqli_query($conn, "SELECT * FROM users");

//storing in array
$data = array();
while ($row = mysqli_fetch_assoc($result))
{
    $data[] = $row;
}

//returning response in JS0N format

echo json_encode($data);