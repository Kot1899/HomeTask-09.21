<?php

echo 'hello Kot';

$people = file_get_contents('users.txt');
$array_people=explode("\n", $people);
$users=[];

foreach ($array_people as $v) {
    $usersFinish=explode(';', $v);
    $users[]=$usersFinish;
    }
$name=$_POST['NAME'];
$age=$_POST['AGE'];
$sex=$_POST['SEX'];

$users[]=[$name, $age, $sex];
$usersALL=[];
foreach ($users as $v) {
    $usersFinish1=implode(";", $v);
    $usersALL[]=$usersFinish1;
    }
$array_people1=implode("\n", $usersALL);

file_put_contents('users.txt', $array_people1);

echo 'u amazing';