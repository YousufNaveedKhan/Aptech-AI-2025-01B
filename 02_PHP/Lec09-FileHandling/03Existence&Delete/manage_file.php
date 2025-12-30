<?php
$path = __DIR__ . '/temp.txt';

if (!file_exists($path)) {
    file_put_contents($path, 'Temporary content');
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"]) && $_POST["action"] === "delete") {
    if (file_exists($path)) {
        unlink($path);
        echo "File deleted";
    } else {
        echo "File not found.";
    }
    echo "<br><a href='manage_file.php'>Back</a>";
    exit;
}


echo "<h3>Manage file: temp.txt</h3>";
if (file_exists($path)) {
    echo "File Size: " . filesize($path) . " bytes.";
    echo "<form method='post'><button name='action' type='submit' value='delete'>Delete file</button></form>";
}else {
    echo "File not found. (It's probably deleted)";
    echo "<br><a href='manage_file.php'>Refresh</a>";
}
