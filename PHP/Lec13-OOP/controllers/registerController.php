<?php
include '../models/Authentication.php';

$std = new Authentication();
if (!empty($_POST['name']) && !empty($_POST['remail']) && !empty('rpass')) {
    $std->register($_POST['name'], $_POST['remail'], $_POST['rpass']);
    header('location: ../loginView.php');
}else {
    header('location: registerView.php');
}
