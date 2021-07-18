<?php
session_start();

$servername = "localhost";
$database = "test";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("Database Err" . mysqli_connect_error());
}

?>