<?php 
include 'config.php';
include 'functions.php';

if (isset($_GET['id'])) {
    $postID = (int)$_GET['id'];
    mysqli_query($conn, "DELETE FROM posts WHERE post_id = $postID");
}

redirect('index.php');
?>