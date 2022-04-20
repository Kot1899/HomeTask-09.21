<?php
echo 'hello, my hometask #6' . "\n". "\n";

include "functions.php";

$students = [
    ['name'=>'alexE', 'age'=> 10, 'city'=>'lviv'],
    ['name'=>'alexW', 'age'=> 20, 'city'=>'luck'],
    ['name'=>'alexQ', 'age'=> 30, 'city'=>'ny'],
    ['name'=>'alex0', 'age'=> 40, 'city'=>'london'],
    ['name'=>'alex1', 'age'=> 50, 'city'=>'rome'],
    ['name'=>'alex2', 'age'=> 60, 'city'=>'milan'],
    ['name'=>'alex3', 'age'=> 70, 'city'=>'barca'],
];
// first function which count array elements
$number = count($students);
echo 'number array elements through function: ' . $number . "\n". "\n";

//second own function Header:
$line_header='-----------------';

//third own function for-show:
echo 'our list of students:' . "\n";
for ($i=0; $i<=$number-1; $i++){
    $name = $students[$i]['name'];
    $age = $students[$i]['age'];
    $city = $students[$i]['city'];
    $show= for_show($name, $age, $city);
    echo $show;
};

echo 'our new table with student list:'."\n";

echo header_line($line_header);
echo sprintf('I%6sI%5sI%6sI', 'Name ', "Age ", 'City ') . "\n";
echo header_line($line_header);
for( $i=0; $i<=$number-1; $i++){
    $students[$i]['name']= str_pad($students[$i]['name'], 6);
}
//my next own function TABLE
for($i=$number-1; $i>=0; $i--){
    $name = $students[$i]['name'];
    $age = $students[$i]['age'].' ';
    $city = $students[$i]['city'];
    $table= table_students($name, $age, $city);
    echo $table;
}
echo header_line($line_header);