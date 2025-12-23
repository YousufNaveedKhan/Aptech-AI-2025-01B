<?php
include '../config/Database.php';

class Authentication extends Database
{
    function register($username, $email, $password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $this->conn->query(
            "INSERT INTO users (name, email, password) VALUES ('$username', '$email', '$hash')"
        );
    }

    function login($email, $password) {
        $res = $this->conn->query(
            "SELECT * FROM users WHERE email = '$email'"
        );

        if ($row = $res->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['name'];
                return true;
            }
        }
        return false;
    }
}
