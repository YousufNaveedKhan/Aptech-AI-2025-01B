<?php 
$path = '/PathHandling/user';
$directory = dirname($path);
echo $directory;

$file = $directory . '/index.php';
?>
<h2>User Dashboard</h2>
<a href="<?= $file ?>">Main Page</a>