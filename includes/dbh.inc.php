<?php

$servername = "localhost";
$uName = "root";
$password = "";
$dBName = "login-PHP";


$conn = mysqli_connect($servername,$uName,$password,$dBName);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}