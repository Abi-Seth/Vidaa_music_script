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


//or else connection like below
// <?php 
// mysql_connect('localhost','root',''); 
// mysql_select_db('vidaa-login');

// or

// <?php 
// $con=mysqli_connect("localhost","root","","crud"); 
// if(!$con) { die(" Connection Error "); } 
