<?php
/*
Сделай текстовый файл, со следующим содержимым

FirstName;LastName;Age;
Alex;Petrov;12;Man
Ivan;Petrov;14;Man
Petr;Petrovich;20;Man
Olga;Petrovna;24;Women
Irina;Olegovich;24;Women
Anna;Hakin;10;Women
Mike;Krug;19;Man
John;Braun;39;Man

Напиши программу, используя максимум полученных знаний, которая сможет вывести
 данные из этого файла в виде красивой таблицы (аналогично как из прошлого занятия).

Усложнение №1. Не выводи людей с возрастом меньше 14

Усложнение №2. Добавь еще одну колонку, и выведи там совершеннолетний или нет,
данный пользователь.
*/

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

//number of index
include 'allfunctions.php';

$number = count_index( $users);
echo 'present task^:' . "\n";
$line1 = '++++++++++++++++++++++++++++++++++++++++';
header1($line1);
echo $number;
for ($i=0; $i<$number; $i++){
    $users[$i][0]= str_pad($users[$i][0], 11, ' ' , STR_PAD_BOTH);
    $users[$i][1]= str_pad($users[$i][1], 13, '.', STR_PAD_BOTH);
    $users[$i][2]= str_pad($users[$i][2], 4, ' ', STR_PAD_BOTH);
    $users[$i][3]= str_pad($users[$i][3],7, '.',STR_PAD_BOTH);
}

foreach ($users as $v){
    $name = $v[0];
    $last_n = $v[1];
    $age = $v[2];
    $sex= $v[3];
    $pr=table_users7($name, $last_n, $age, $sex);
    echo $pr. "\n" ;
    }

$line1= '****************************************';
header1($line1);

//hard task#1 "Не выводи людей с возрастом меньше 14":

echo 'hardtask#1:' . "\n";

$line1 = '++++++++++++++++++++++++++++++++++++++++';
header1($line1);
for ($i=0; $i<1; $i++) {
        $name = $users[$i][0];
        $last_n = $users[$i][1];
        $age = $users[$i][2];
        $sex = $users[$i][3];
        $pr = table_users7($name, $last_n, $age, $sex);
        echo $pr . "\n";
    }

for ($i=1; $i<$number; $i++) {
    $controlAge = 14;
    if ( $users[$i][2] > $controlAge ) {
    $name = $users[$i][0];
    $last_n = $users[$i][1];
    $age = $users[$i][2];
    $sex = $users[$i][3];
    $pr = table_users7($name, $last_n, $age, $sex);
    echo $pr . "\n";
}
}
$line1= '****************************************';
header1($line1);

//hard task#2: "Добавь еще одну колонку, и выведи там совершеннолетний или нет, данный пользователь.":

echo 'hardtask#2' . "\n";

$line1 = '+++++++++++++++++++++++++++++++++++++++++++++';
header1($line1);


for ($i=0; $i<1; $i++) {
    $name = $users[$i][0];
    $last_n = $users[$i][1];
    $age = $users[$i][2];
    $sex = $users[$i][3];
    $pr = table_users8($name, $last_n, $age, $sex);
    echo $pr . "\n";
}

for ($i=1; $i<$number; $i++) {
    $controlAge = 18;
    if ($users[$i][2] < $controlAge) {
        $name = $users[$i][0];
        $last_n = $users[$i][1];
        $age = $users[$i][2] . 'minor';
        $sex = $users[$i][3];
        $pr = table_users7($name, $last_n, $age, $sex);
        echo $pr . "\n";
    }
    else {
        $name = $users[$i][0];
        $last_n = $users[$i][1];
        $age = $users[$i][2] . 'adult';
        $sex = $users[$i][3];
        $pr = table_users7($name, $last_n, $age, $sex);
        echo $pr . "\n";
    }
}
$line1= '*********************************************';
header1($line1);