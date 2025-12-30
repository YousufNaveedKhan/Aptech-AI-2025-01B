<?php
session_start();
include 'connection.php';
$error = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $q = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $q);

    $acc = mysqli_fetch_assoc($res);

    if (mysqli_num_rows($res) == 1) {
        if (password_verify($password, $acc['password'])) {
            $_SESSION['username'] = $acc['username'];
            $_SESSION['userRole'] = $acc['role'];
            if ($_SESSION['userRole'] === 'admin') {
                header('location: admin.php');
            }else if ($_SESSION['userRole'] === 'user') {
                header('location: user.php');
            }
        }
    }
}
