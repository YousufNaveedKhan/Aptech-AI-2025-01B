<?php
include 'config.php';

$q = "SELECT * FROM users";
$exec = mysqli_query($conn, $q);
$row = mysqli_num_rows($exec);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>

<body>
    <h2>User Details</h2>
    <table>
        <thead>
            <th>Username</th>
            <th>Email</th>
            <th>Profile Picture</th>
        </thead>
        <tbody>
            <?php if ($row > 0): ?>
                <?php while ($data = mysqli_fetch_assoc($exec)): ?>
                    <tr>
                        <td><?= $data['username'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td>
                            <img src="uploads/<?= $data['profile_pic'] ?>" alt="Profile Pic" width="50" height="50" style="border-radius: 50%;">
                        </td>
                    </tr>

                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td>No Data Found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>