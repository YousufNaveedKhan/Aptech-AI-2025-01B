<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lec12 - FileUploading</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Enter your name"> <br>
        <input type="email" name="email" placeholder="Enter your email"> <br>
        <input type="file" name="file"> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>