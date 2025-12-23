<?php 
// Array Functions -- Array Operations -- Array Methods
// $fruits = ["Apple", "Banana", "Orange", "Mango", "Grapes"];
// // Count the number of elements in the array
// $count = count($fruits);
// echo "Number of fruits: " . $count . "\n";



$stdName = "Laiba";
$passingMarks = 40;

$marks = ["44", "53", "62", "39", "55"]; // 0 => "85", 1 => "78", 2 => "90", 3 => "66", 4 => "55"

array_push($marks, "70");

echo "Marks of $stdName: <br>";
foreach ($marks as $index => $mark) {
    echo "Subject: " . ($index + 1) . " - " . $mark . "<br>";
}

$totalMarks = array_sum($marks);
$subjects = count($marks);
$averageMarks = $totalMarks / $subjects;
$result = number_format($averageMarks, 2);

$maxMarks = max($marks);
$minMarks = min($marks);

// if ($averageMarks >= $passingMarks) {
//     echo "Pass";
// }else {
//     echo "Fail";
// }
$overAllResult = ($averageMarks >= $passingMarks) ? "Pass" : "Fail"; // Ternary Operator

$grade = "";
if ($averageMarks >= 80) {
    $grade = "Grade: A+";
}else if ($averageMarks >= 70) {
    $grade = "Grade: A";
}else if ($averageMarks >= 60) {
    $grade = "Grade: B";
}else if ($averageMarks >= 50) {
    $grade = "Grade: C";
}else if ($averageMarks >= 40) {
    $grade = "Grade: D";
}else {
    $grade = "Grade: F";
}

echo "<hr>";

echo "Total Marks: " . $totalMarks . "<br>";
echo "Average Marks: " . $result . "<br>";
echo "Highest Marks: " . $maxMarks . "<br>";
echo "Lowest Marks: " . $minMarks . "<br>";
echo "Overall Result: " . $overAllResult . "<br>";
echo $grade . "<br>";

echo "<hr>";

?>