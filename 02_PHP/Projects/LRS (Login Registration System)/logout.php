<?php 
if (isset($_GET['logout_now']) && $_GET['logout_now'] == 1) {
    session_start();
    session_unset();
    session_destroy();
    header('location: login.php');
}
?>