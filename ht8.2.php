<?php

/*
Возьми за основу свою работу с чтением юзеров из файла, выведи всех юзеров в
виде таблицы, с теми же колонками, только используя HTML теги. В работе тебе
также понадобиться использовать запущенный сервер PHP.

Можно применять свою фантазию, и разукрашивать страницу как угодно.
*/

//запишем в файл текст:

echo '<h2><i>Hello, Alex,  it is hometask #8/2</i></h2>';

file_put_contents('people_list.txt',
    'FirstName;LastName;Age;Sex;
Alex;Petrov;ht18;Man
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
$line1 = '+++++++++++++++++++++++++++++++++++';
header1($line1);
//echo '<br/>';
echo '<table border="2">';
for ($i=0; $i<1; $i++) {
    echo '<tr>';
    echo '<td><strong><big><center>' . $users[$i][0]. '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $users[$i][1]. '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $users[$i][2]. '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $users[$i][3]. '</center></big></strong></td>';
    echo '</tr>';
  }
//echo '<br/>';


for ($i=1; $i<$number; $i++) {
    $controlAge = 18;
    if ($users[$i][2] < $controlAge) {
//        $name = $users.txt[$i][0];
//        $last_n = $users.txt[$i][1];
//        $age = $users.txt[$i][2] . 'minor';
//        $sex = $users.txt[$i][3];
//        $pr = table_users9($name, $last_n, $age, $sex);
//        echo $pr ;
        echo '<tr>';
        echo '<td><center>' . $users[$i][0]. '</center></td>';
        echo '<td><center>' . $users[$i][1]. '</center></td>';
        echo '<td><strong><center>' . $users[$i][2].' minor'. '</center></strong></td>';
        echo '<td><i><center>' . $users[$i][3]. '</center></i></td>';
        echo '</tr>';

        echo '<br/>';
    }
    else {
//        $name = $users.txt[$i][0];
//        $last_n = $users.txt[$i][1];
//        $age = $users.txt[$i][2] . 'adult';
//        $sex = $users.txt[$i][3];
//        $pr = table_users9($name, $last_n, $age, $sex);
//        echo $pr ;
        echo '<tr>';
        echo '<td><center>' . $users[$i][0]. '</center></td>';
        echo '<td><center>' . $users[$i][1]. '</center></td>';
        echo '<td><strong><center>' . $users[$i][2].' adult'. '</center></strong></td>';
        echo '<td><i><center>' . $users[$i][3]. '</center></i></td>';
        echo '</tr>';

        echo '<br/>';
    }
}
//echo '<br/>';
$max_age= $users[1][2];
for ($i=1 ; $i<$number; $i++){
    if ($users[$i][2]>$max_age){
        $max_age= $users[$i][2];
    }
}

echo '<table border>';

echo '<font size="5" color="red" face="Arial">'.$max_age. '</font size="5" color="red" face="Arial">';
echo '<br/>';

$line1= '***************************************';
header1($line1);