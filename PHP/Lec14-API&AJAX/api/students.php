<?php
header('Content-Type: application/json');

$students = [
    [
        "id" => 1,
        "name" => "Laiba",
        "course" => "HDSE",
        "email" => "laiba@gmail.com"
    ],
    [
        "id" => 2,
        "name" => "Anusha",
        "course" => "ADSE",
        "email" => "anusha@gmail.com"
    ],
    [
        "id" => 3,
        "name" => "Fatima",
        "course" => "ADSE",
        "email" => "fatima@gmail.com"
    ],
    [
        "id" => 4,
        "name" => "Abdul Rehman",
        "course" => "ADSE",
        "email" => "abd@gmail.com"
    ],
];

echo json_encode($students);
