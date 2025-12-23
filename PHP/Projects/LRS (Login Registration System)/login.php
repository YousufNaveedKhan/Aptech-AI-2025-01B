<?php
session_start();
if (isset($_SESSION['username'])) {

    if ($_SESSION['userRole'] === 'admin') {
        header('location: admin.php');
    } else if ($_SESSION['userRole'] === 'user') {
        header('location: user.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Registration System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 15px;
            font-weight: bold;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <form action="loginHandler.php" method="post">
        <h2>Login</h2>
        <!-- Printing error message here -->
        <p style="color: red;"><?= $error ?? "" ?></p>
        <p style="color: green;"><?= $success ?? "" ?></p>
        <label for="email">Email</label>
        <input type="text" name="email"> <br>

        <label for="pass">Password</label>
        <input type="password" name="password"> <br>

        <input type="submit" value="Login">
    </form>
</body>

</html>