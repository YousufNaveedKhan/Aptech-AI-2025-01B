<?php 
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["username"];
    $email = $_POST["email"];

    $fileName = $_FILES['file']['name'];
    $tmpName = $_FILES['file']['tmp_name'];
    $folder = "uploads/";
    
    if (move_uploaded_file($tmpName, $folder.$fileName)) {
        $sql = "INSERT INTO users (username, email, profile_pic) VALUES ('$name', '$email', '$fileName')";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            header('location: view_file.php');
            exit;
        }else {
            echo "Failed to upload user details!";
        }
    }else {
        echo "Error uploading file!";
    }

}

?>