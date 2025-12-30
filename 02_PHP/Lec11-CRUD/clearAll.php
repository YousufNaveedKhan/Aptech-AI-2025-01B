<?php 
include 'config.php';

if (isset($_GET['action']) && $_GET['action'] === 'deleteAll') {
    $sql = "DELETE FROM students";
    $res = mysqli_query($conn, $sql);

    header('location: index.php');
}
?>