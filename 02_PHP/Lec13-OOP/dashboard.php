<?php 
session_start(); 
include 'controllers/auth_check.php';

if (!isLoggedIN()) header('location: loginView.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Welcome, <?= $_SESSION['username'] ?></h2>
    <a href="controllers/logout.php" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
</body>
</html>