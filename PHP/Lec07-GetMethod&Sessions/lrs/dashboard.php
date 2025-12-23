<?php
// Start the session to be able to use $_SESSION variables
session_start();

// Check if the 'isLoggedin' session variable is not set or is false (i.e., the user is not logged in)
if (!($_SESSION['isLoggedin'] ?? false)) {
    // If the user is not logged in, redirect them to the login page (or a specified session/method page)
    header("location: ../lec08-sessions&getMethod.php");
    // Exit the script to prevent further code execution after the redirect
    exit();
}

// If the user is logged in, retrieve the 'username' from the session and store it in a local variable
$currentUser = $_SESSION["username"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lec08 - Sessions & Get Method - Dashboard</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;

            min-height: 100vh;
            margin: 0;

            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        .welcome-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
            font-size: 28px;
        }

        h2 span {
            color: #007bff;
            font-weight: bold;
        }

        .logout-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .logout-link:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <h2>Welcome <span><?php echo $currentUser ?></span></h2>

        <a class="logout-link" href="logout.php?action=logout_now">Logout</a>
    </div>
</body>

</html>