<?php 
$name = "      lAiBa ajaZ    ";
echo "Orignal: '$name'<br>";

$name = trim($name);
$name = strtolower($name);

echo "Clean: '$name'<br>"; // laiba ajaz

echo strlen($name);

echo "<br>";
$text = "Hello World";
// strpos()

echo strpos($text, "Pakistan");
// strpos() => returns number, returns false

if (strpos($name, "laiba") !== false) {
    echo "Found";
}else {
    echo "Not Found";
}
echo "<br>";
$email = "laibagmail.com";

if (strpos($email, "@") === false) {
    echo "Invalid Email";
}
echo "<br>";


$file = "document.pdf";

if (strpos($file, ".pdf") !== false) {
    echo "PDF Detected";
}
echo "<br>";

$comment = "this is stupid thing";

if (strpos($comment, "stupid") !== false) {
    echo "Bad Word Detected";
}

echo "<br>";

$link = "https://www.facebook.com";

if (strpos($link, "facebook") !== false) {
    echo "Facebook link";
}


?>