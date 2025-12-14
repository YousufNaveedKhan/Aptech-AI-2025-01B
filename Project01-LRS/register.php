<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $pass = $_POST['password'];
    $confirmPass = $_POST['cPass'];

    if ($confirmPass === $pass) {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hash')";
        $res = mysqli_query($conn, $sql);

        if ($res) {
        setcookie('success', "Registered Successfully!", time() + 5, '/');
            header('location: signup.php');
            exit;
        } else {
        setcookie('error', "Registration Failed", time() + 5, '/');            header('location: signup.php');
            exit;
        }
    } else {
        setcookie('error', "Passwords doesn't match", time() + 5, '/');
        header('location: signup.php');
        exit;
    }
}
