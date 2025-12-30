<?php 
include 'config.php';
include 'functions.php';

if (!isLoggedIN()) redirect("login-register.php");

if (isset($_POST["post"])) {
    $content = htmlspecialchars($_POST["content"]);
    $uid = $_SESSION["userID"];
    if (!empty($content)) {
        $res = mysqli_query($conn, "INSERT INTO posts (userid, content) VALUES ('$uid', '$content')");
    }
}

$post = mysqli_query($conn, "
SELECT posts.*, users.username, users.profile_pic
FROM posts JOIN users 
ON posts.userid = users.user_id
ORDER BY post_id DESC
");
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
                <form method="post">
                    <textarea class="form-control mb-2" name="content" placeholder="What's on your mind?" required></textarea>
                    <button class="btn btn-primary float-end" name="post">Post</button>
                </form>
            </div>
        </div>
                <?php if (mysqli_num_rows($post) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($post)): ?>
            <div class="card mb-3 shadow-sm">
                <div class="card-body d-flex justify-content-between">
                    <div class="d-flex">
                        <?php if (!empty($row['profile_pic'])): ?>
                        <img src="uploads/<?= $row['profile_pic'] ?>" width="50" height="50" class="rounded-circle me-3">
                        <?php else: ?>
                        <img src="uploads/person.jpg" width="50" height="50" class="rounded-circle me-3">
                        <?php endif; ?>
                        <div>
                            <strong><?= $row["username"] ?></strong><br>
                            <small class="text-muted"><?= htmlspecialchars($row['created_at']) ?></small>
                            <p class="mt-2"><?= nl2br($row['content']) ?></p>
                        </div>
                    </div>

                    <?php if ($row["userid"] === $_SESSION["userID"]): ?>
                        <div class="dropdown">
                            <button class="btn btn-light btn-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                &#x22EE; 
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="edit_post.php?id=<?= $row['post_id'] ?>">Edit</a></li>
                                <li><a class="dropdown-item text-danger" href="delete_post.php?id=<?= $row['post_id'] ?>" onclick="return confirm('Are you sure you want to delete this post?')">Delete</a></li>
                            </ul>
                        </div>
                        <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
            <?php else: ?>
                <div class="card shadow-sm">    
                <div class="card-body">
                    <h5 class="text-center text-muted mb-3">No Posts Found.</h5>
                    <p>Be the first one to post something!</p>
                    </div>
                </div>
            <?php endif; ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>