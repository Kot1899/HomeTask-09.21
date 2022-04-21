<?php

//запишем в файл текст:

echo 'hello, it is hometask #7' . "\n";

file_put_contents('people_list.txt', 'FirstName;LastName;Age;Sex;
Alex;Petrov;18;Man
Ivan;Petrov;14;Man
Petr;Petrovich;20;Man
Olga;Petrovna;24;Women
Irina;Olegovich;24;Women
Anna;Hakin;10;Women
Mike;Krug;19;Man
John;Braun;39;Man');

//преобразуем єту строку в массив:

$people = file_get_contents('people_list.txt');

// check our people list
//echo $people;

$array_people = explode("\n", $people);
$users=[];
foreach ($array_people as $v){
    $usersFinish= explode(';', $v);
    $users[] = $usersFinish;
}

$number= count($users);
$number_array=$number-1;

echo $number . '       '. $number_array;
include "function.php";
echo $users[0][0];