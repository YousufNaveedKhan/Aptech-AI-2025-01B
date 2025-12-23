<?php 
// lec03-arrays.php
// Indexed Arrays
$arr = ["apple", "banana", "cherry"];
print_r($arr);
echo "<br>";
foreach ($arr as $item) {
    echo $item . "<br>";
}

$person = ["name" => "John", "age" => 30, "city" => "New York"];
// Associative Arrays
echo $person[0]; // undefined array key 0
print_r($person);

// echo "Hello\nWorld!"; // Demonstrating escape sequence

// Indexed Array + Associated Array = Multi dimentional Array
// Multidimensional Arrays
$person = [ 
    array("name" => "John", "age" => 30, "city" => "New York"),
    array("name" => "Jane", "age" => 25, "city" => "Los Angeles"),
    array("name" => "Mike", "age" => 35, "city" => "Chicago")

];
echo "<br>";

print_r($person); // Outputs: Jane

echo "<br>";
echo $person[1]["name"]; // Outputs: Jane
echo "<br>";
echo $person[2][0]; // Outputs: Undefined array key 0



?>