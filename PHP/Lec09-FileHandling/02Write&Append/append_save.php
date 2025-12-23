<?php
$path = __DIR__ . "/comments.txt";

// validations
if (!isset($_POST["user_text"])) {
    echo "No text provided.";
}

$text = trim($_POST['user_text']);
if ($text === '') {
    echo "Empty text isn't allowed";
}


$entry = date('d-m-Y H:i:s') . " - " . $text . PHP_EOL;
file_put_contents($path, $entry, FILE_APPEND | LOCK_EX);
echo "Saved. <a href='view_comments.php'>View Comments</a> | <a href='append_form.php'>Go back</a>";

