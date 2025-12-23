<?php 
// Config (APP INFO)
define("APP_NAME", "GFT Solutions");
echo APP_NAME . "<br>";
const VERSION = 1.0;
echo VERSION . "<br>";

// Print Statement
echo "Hello World! <br>";

// Variables (With different data types)
$name = "Laiba"; 
$age = 21;
$gpa = 3.5;
$is_active = true;
$errMsg = null; // null

// $2name = "abc"; 

$first_name = "Syeda"; // Snake Case
$lastName = "Anusha"; // Camel Case
$name = "Laiba"; 


// Printing variables
echo $name . "<br>"; // String 
echo $age . "<br>"; // Integer 
echo $gpa . "<br>"; // Float 
echo $is_active ? "True <br>" : "False <br>"; // Ternary Operator // Boolean

// Array
$marks = [87, 99, 55]; // Array
echo $marks[2]; // Indexed Array (CRUD PROJECT)

// Foreach Loop (Array Iteration)
foreach ($marks as $mark) {
    echo $mark . "<br>";
}

$role = "user";

if ($role == "user") {
    echo "Welcome to user dashboard";
}else {
    echo "Welcome to admin dashboard";
}

echo "<br>";

$num1 = 5;
$num2 = 7;
$add = $num1 + $num2;
$sub = $num1 - $num2;
$mul = $num1 * $num2;
$div = $num1 / $num2;


$marks = 85;

if ($marks != 80) {
    echo "A+";
}
echo "<br>";

for ($i=1; $i <= 10; $i++) { 
    echo $i . " ";
}

echo "<br>";

function greet($userName) {
    echo "Hello World, ${userName}";
}

greet("Fatima");
echo "<br>";
function add($a, $b) {
    $res = $a + $b;
    echo $res;
}

add(5,6);
echo "<br>";
function even($num) {
    return $num % 2 == 0;
}

$num = 56;
if (even($num)) {
    echo "Even number";
}else {
    echo "Odd number";
}


?>