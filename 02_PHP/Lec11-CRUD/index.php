<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lecture11 - CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        label {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <form action="insert.php" method="post">
            <div class="mb-3">
                <label class="form-label">Student Name</label>
                <input type="text" class="form-control" placeholder="Enter your name here" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Student Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email here" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Student bio</label>
                <textarea class="form-control" name="bio" rows="3" placeholder="Enter your bio here"></textarea>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto mt-4">
                <button class="btn btn-success" type="submit">Add Student</button>
                <a href="clearAll.php?action=deleteAll" onclick="return clearAll()" class="btn btn-danger" type="submit">Delete Students List</a>
            </div>
        </form>
    </div>

    <div class="container mt-5">
        <table class="table table-hovered table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Student Bio</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $sql = "SELECT * FROM students ORDER BY student_id DESC";
                $result = mysqli_query($conn, $sql);

                $students = mysqli_num_rows($result);

                $sno = 0;
                if ($students > 0) {
                    while ($student = mysqli_fetch_assoc($result)) {
                        $sno++;
                ?>
                        <tr>
                            <th scope="row"><?= $sno ?></th>
                            <td><?= $student['student_name'] ?></td>
                            <td><?= $student['student_email'] ?></td>
                            <td><?= $student['student_bio'] ?></td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <a href="edit.php?id=<?= $student['student_id'] ?>" class="btn btn-warning" type="submit">Edit</a>
                                    <a href="delete.php?id=<?= $student['student_id'] ?>" onclick="return confDelete()" class="btn btn-danger" type="submit">Delete</a>
                                </div>
                            </td>
                        </tr>

                    <?php

                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5" style="text-align: center; font-weight: bold;">No students found.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        function clearAll() {
            return confirm("Are you sure you want to delete students list?");
        }

        function confDelete() {
            return confirm("Are you sure you want to delete this student record!?");
        }
    </script>
</body>

</html>