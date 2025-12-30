<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit;
}
$currentUser = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome Admin, <?= $currentUser ?></h2>
    <a href="logout.php?logout_now=1">Logout</a>
</body>
</html>