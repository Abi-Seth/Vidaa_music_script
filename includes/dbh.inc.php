<?php

//connect the database

$servername = "localhost"; //server name
$dBUsername = "root";
$dBPassword = "";
$dBName = "vidaa-login";

//run a connection

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
