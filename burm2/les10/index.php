<?php


//include 'function.php';

 echo '<h3><font color="orange">Hello dear Kot</h3></font>';

echo '<pre>';

$people = file_get_contents('students10.txt');
$people_string=explode("\n", $people);
$students=[];

foreach ($people_string as $v) {
    $people_word = explode(';', $v);
    $students[] = $people_word;
}

$name=$_POST['people_name'];
$age=$_POST['people_age'];
$sex=$_POST['people_sex'];

$students[]=[$name,$age,$sex];
//var_dump($students);
$students_full=[];
foreach ($students as $v) {
    $people_string2=implode(';', $v);
    $students_full[]=$people_string2;
}
$people_full=implode("\n", $students_full);

file_put_contents('students11.txt', $people_full);
echo 'U amazing';
