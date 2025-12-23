<?php 
session_start();
include '../models/Authentication.php';

$user = new Authentication();
if (!empty($_POST['email']) && !empty('password')) {
    $user->login($_POST['email'], $_POST['password']);
    header('location: ../dashboard.php');
}else {
    header('location: ../registerView.php');
}
?>