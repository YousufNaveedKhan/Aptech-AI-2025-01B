<?php 
$path = __DIR__ . '/comments.txt';

if (file_exists($path)) {
    echo "<h3>Comments</h3>";
    echo "<p>" . file_get_contents($path) . "<p>";
}else {
    echo "File doesn't exist";
}

?>