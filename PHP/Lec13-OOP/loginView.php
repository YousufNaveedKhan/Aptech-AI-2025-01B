<!DOCTYPE html>
<html>

<head>
    <title>Registration - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto card p-4">

                <h4 class="text-center">Login</h4>

                <form action="controllers/loginController.php" method="post">
                    <input name="email" class="form-control mb-2" placeholder="Email">
                    <input name="password" type="password" class="form-control mb-2" placeholder="Password">

                    <button class="btn btn-primary w-100">Login</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>