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

                <h5 class="text-center">Register</h5>
                <form action="controllers/registerController.php" method="post">
                    <input name="name" class="form-control mb-2" placeholder="Name">
                    <input name="remail" class="form-control mb-2" placeholder="Email">
                    <input name="rpass" type="password" class="form-control mb-2" placeholder="Password">
                    <button class="btn btn-success w-100">Register</button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>