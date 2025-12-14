<?php
include 'config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE student_id = $id";
$result = mysqli_query($conn, $sql);
$student = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $editName = $_POST["editname"];
    $editEmail = $_POST["editemail"];
    $editBio = $_POST["editbio"];


    $query = "UPDATE students SET student_name = '$editName', student_email = '$editEmail', student_bio = '$editBio' WHERE student_id = $id";
    $exec = mysqli_query($conn, $query); 

    if ($exec) {
        header('location: index.php');
        exit; 
    }else {
        echo "Failed to update student details!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Student Name</label>
                <input type="text" class="form-control" value="<?= $student['student_name'] ?>" placeholder="Enter your name here" name="editname" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Student Email</label>
                <input type="email" class="form-control" name="editemail" value="<?= $student['student_email'] ?>" placeholder="Enter your email here" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Student bio</label>
                <textarea class="form-control" name="editbio" rows="3" placeholder="Enter your bio here"><?= $student['student_bio'] ?></textarea>
            </div>

            <div class="d-grid gap-2 d-md-block">
                <a href="index.php" class="btn btn-secondary">Cancel</a>
                <button class="btn btn-success" type="submit">Save Changes</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>