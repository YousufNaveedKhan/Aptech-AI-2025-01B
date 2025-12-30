<!-- Array Methids -->
 <?php 
// Array Column
$students = [
    ["name" => "Ali", "age" => 20, "grade" => "A"],
    ["name" => "Sara", "age" => 22, "grade" => "B"],
    ["name" => "Omar", "age" => 21, "grade" => "A"]
];
$arrCol = array_column($students, 'age'); 
print_r($arrCol);

echo "<br>";

// sort
$numbers = [5, 2, 9, 1, 5, 6];
sort($numbers);
print_r($numbers);


echo "<br>";
// rsort
rsort($numbers);
print_r($numbers);

echo "<br>";

// in array
$fruits = ["apple", "banana", "orange"];
in_array("mango", $fruits) ? print("Found") : print("Not Found");

echo "<br>";

// array_search
$names = ["Abu Hurerah", "Laiba", "Anusha"];
$index = array_search("Laiba", $names); 
echo $index;

echo "<br>";

// array_merge
$arr1 = [1, 2, 3]; // [1, 2, 3, 4, 5, 6]
$arr2 = [4, 5, 6];
$mergedArr = array_merge($arr1, $arr2);
print_r($mergedArr);

echo "<br>";
// array_unique
$names = ["Anusha", "Laiba", "Anusha", "Abu Hurerah"];
$arrUnique = array_unique($names);
print_r($arrUnique);
echo "<br>";


// array_combine
$arr1 = ["a", "b", "c"];
$arr2 = ["Apple", "Banana", "Cherry"];
// ["a" => "Apple", "b" => "Banana", "c" => "Cherry"]
$combinedArr = array_combine($arr1, $arr2);
print_r($combinedArr);
echo "<br>";

// array_keys
$users = [
    "id" => 1,
    "name" => "Ali",
    "email" => "ali@gmail.com"
];

$arrKeys = array_keys($users);
print_r($arrKeys);

// array_values
echo "<br>";
$arrValues = array_values($users);
print_r($arrValues);

// array filter
echo "<br>";
$nums = [44, 55, 66, 77, 88, 99];
$filteredArr = array_filter($nums, function($num) {
    return $num > 66;
});
print_r($filteredArr);

// array_map
echo "<br>";
$mappedArr = array_map(function($num) {
    return $num * 2;
}, $nums);
print_r($mappedArr);


// array_reverse
echo "<br>";
$newArr = [1, 2, 3, 4, 5];
$reversedArr = array_reverse($newArr);
print_r($reversedArr);

// array_slice
echo "<br>"; 
$names = ["Anusha", "Laiba", "Abu Hurerah", "Misbah"];
print_r($names);
echo "<br>"; 
// => 0 to 3
$slicedArr = array_slice($names, 0, 3); 
print_r($slicedArr);



// array_splice
echo "<br>";
$nums = [1, 2, 3, 4, 5];
$new_nums = [25, 50, 75];
array_splice($nums, 1, 3, $new_nums);
print_r($nums);

// shuffle
echo "<br>";

$numss = [1, 2, 3, 4, 5, 6, 7, 8];
shuffle($numss);
print_r($numss);

?>