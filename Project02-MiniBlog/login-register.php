<?php 
include 'config.php';
include 'functions.php';

if (isset($_POST['register'])) {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $fileName = $_FILES["profile_pic"]["name"];
    $tmpName = $_FILES["profile_pic"]["tmp_name"];
    $path = "uploads/" . $fileName;

    move_uploaded_file($tmpName, $path);

    mysqli_query($conn, "INSERT INTO users (username, password, profile_pic) VALUES ('$username', '$password', '$fileName')");
}


if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $q = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $user = mysqli_fetch_assoc($q);

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["userID"] = $user["user_id"];
        redirect("index.php");
    }

}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login / Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Mini Blog</h3>

                        <ul class="nav nav-tabs mb-3" id="authTab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button">Login</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button">Register</button>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="login">
                                <form method="post" class="mb-3">
                                    <input class="form-control mb-2" name="username" placeholder="Username" required>
                                    <input class="form-control mb-2" type="password" name="password" placeholder="Password" required>
                                    <button class="btn btn-success w-100" name="login">Login</button>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="register">
                                <form method="post" enctype="multipart/form-data">
                                    <input class="form-control mb-2" name="username" placeholder="Username" required>
                                    <input class="form-control mb-2" type="password" name="password" placeholder="Password" required>
                                    <label class="form-label">Profile Picture</label>
                                    <input class="form-control mb-2" type="file" name="profile_pic">
                                    <button class="btn btn-primary w-100" name="register">Register</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>