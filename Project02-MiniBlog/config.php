<?php 
session_start();
$host = "localhost";
$username = "root";
$pass = "";
$db = "miniBlog";

$conn = mysqli_connect($host, $username, $pass, $db);
?>