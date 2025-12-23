<?php
include 'config.php';
include 'functions.php';

if (!isLoggedIN()) redirect("login-register.php");

if (empty($_GET['id'])) {
    redirect('index.php');
}

$postID = (int)$_GET['id'];

$q = mysqli_query($conn, "SELECT * FROM posts WHERE post_id = '$postID' AND userid = " . $_SESSION["userID"]);
$post = mysqli_fetch_assoc($q);

if (isset($_POST['update'])) {
    $content = $_POST['content'];
    mysqli_query($conn, "UPDATE posts SET content='". mysqli_real_escape_string($conn, $content) ."' WHERE post_id = $postID AND userid = " . $_SESSION['userID']);
    redirect("index.php");
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mini Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mini Blog</a>
            <div class="d-flex">
                <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">

        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="mb-3">Edit Post</h5>
                <form method="post">
                    <textarea class="form-control mb-2" name="content" placeholder="Post content goes here..." required><?= $post['content'] ?></textarea>
                    <button class="btn btn-primary" name="update">Update Post</button>
                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>