<?php
// 1. Start the session to be able to use $_SESSION variables.
session_start();

// 2. Check if the user is ALREADY logged in.
// If 'isLoggedin' is set in the session and is true, proceed with redirection.
if (isset($_SESSION['isLoggedin']) && $_SESSION['isLoggedin'] === true) {
    // User is already logged in, redirect them to a dashboard or homepage.
    header("Location: lrs/dashboard.php"); // Replace lrs/dashboard.php with your desired page
    // Important: stop script execution after redirection.
    exit(); 
}

// 3. Initialize variables for error message and valid credentials (hardcoded for example).
$error = "";
$valid_username = "student";
$valid_pass = "student123";

// 4. Check if the form has been submitted using the POST method.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and retrieve the submitted username (name).
    // The null coalescing operator (?? "") ensures an empty string if $_POST["name"] is not set.
    $name = trim($_POST["name"] ?? ""); 
    // Retrieve the submitted password.
    $pass = $_POST["password"];

    // 5. Validate the submitted credentials against the hardcoded values.
    if ($name === $valid_username && $pass === $valid_pass) {
        // If credentials are correct, set session variables for the successful login.
        $_SESSION["username"] = $name;
        $_SESSION["isLoggedin"] = true;

        // Redirect the user to the protected dashboard page.
        header("location: lrs/dashboard.php");
        // Stop script execution after the redirect.
        exit(); 
    } else {
        // If credentials are incorrect, set an error message.
        $error = "Invalid username or Password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lec08 - Sessions & Get Method</title>
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

    <form action="" method="post">
        <h2>Login</h2>
        <!-- Printing error message here -->
        <p style="color: red;"><?php echo $error ?></p>
        <label for="username">Username (student):</label>
        <input type="text" name="name"> <br>

        <label for="pass">Password (student123):</label>
        <input type="password" name="password">

        <input type="submit" value="Submit">
    </form>
</body>

</html>