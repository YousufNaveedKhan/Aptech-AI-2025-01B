<?php 
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['name'])) {
        $name = trim($_POST["name"] ?? "");
        $email = trim($_POST["email"] ?? "");
        $bio = $_POST["bio"];

        $query = "INSERT INTO students (student_name, student_email, student_bio) VALUES ('$name', '$email', '$bio')";
        $res = mysqli_query($conn, $query);

        if ($res) {
            echo "Registered Successfully!";
            header('location: index.php');
        }else {
            echo "Registration Failed!";
        }
    }
}
?>