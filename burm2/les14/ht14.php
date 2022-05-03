<?php

class over{
    public $list;
}
class students{
    public $name='no name';
    public $firstname;
    public $age=18;
    public $sex = 'human';
}

$student1= new students();
$student1->name='Alex';
$student1->age=20;
$student1->firstname='Burm';
$student1->sex='male';

$student2= new students();
$student2->name='kot';
$student2->age=28;
$student2->firstname='kotya';

echo 'first task'. "\n";
$students_array=[$student1,$student2];
foreach ($students_array as $v) {
    echo 'name - ' . $v->name . ', lastname - ' . $v->firstname. ', age - ' . $v->age . ', sex - ' . $v->sex . "\n";
}

echo "\n". 'second task' . "\n";

$student3= new students();
$student3->name='kate';
$student3->age=29;
$student3->firstname='sun';

$all_students= new over();
$all_students->list=[$student1,$student2, $student3];
foreach ($all_students->list as $num=>$v){
    echo $num.'. '. $v->name . ', ' . $v->age . "\n";
}