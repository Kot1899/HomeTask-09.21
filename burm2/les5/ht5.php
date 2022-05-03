<?php

include 'function.php';

$students = [
    ['name' => 'alex', 'age'=>'10'],
    ['name'=>'vitali', 'age'=>'20'],
    ['name'=>'vlada', 'age'=>30],
    ['name'=>'kate', 'age'=>29],
];

//number array elements
$size=sizeof($students);
echo 'number array elements =' . $size . "\n";

//function what can count number array elements:
$number= Count_number($students);
echo 'numbers array elements through function:' . $number . "\n";

//show users.txt list:
for ($i=0; $i<$size; $i++){
    echo 'student name - '. $students[$i]['name'] . ', student age - ' . $students[$i]['age'] . '.' .
        'length of name -'. strlen($students[$i]['name']) . "\n";
    }

echo '+++++++++++++++++++++++++++++++++++++++' . "\n";


$students = [
    ['name' => 'alex', 'age'=>'10'],
    ['name'=>'vitali', 'age'=>'20'],
    ['name'=>'vlada', 'age'=>30],
    ['name'=>'kate', 'age'=>29],
];

//number array elements
$size=sizeof($students);
echo 'number array elements =' . $size . "\n";

//function what can count number array elements:
$number= Count($students);
echo 'numbers array elements through function:' . $number . "\n";


for ($i=0; $i<$number; $i++){
    all_student($students[$i]['name'], $students[$i]['age']);}
