<?php 
include 'config.php';
$id = $_GET['id'];

$query = "DELETE FROM students WHERE student_id = $id";
$res = mysqli_query($conn, $query);
if ($res) {
    header('location: index.php');
    exit;
}else {
    echo "Failed to delete student record!";
}
?>