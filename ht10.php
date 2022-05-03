<?php
/*
В одном из прошлых заданий, ты читал из файла users.txt.txt, всех пользователей и выводил их в виде списка\таблицы.
В этом задании, тебе необходимо создать форму, с методом отправки POST, которая будет содержать такие же поля
(имя, пол, возраст) как в твоем файле со списком. Данные с формы ты должен добавить в файл, как новую запись.
В итоге у тебя должна получится программа которая выводит список из файла, и форма, которая должна добавлять
в этот файл новую запись.
 */
//include 'allfunctions.php';

echo '<h2><i>Hello, Alex,  it is hometask #10</i></h2>';

echo '<pre>';

$people = file_get_contents('users10.txt');

$array_people = explode("\n", $people);
$users=[];

// применим тут функцию
//First_expl()
foreach ($array_people as $v) {
    $usersFinish = explode(';', $v);
    $users[] = $usersFinish;
}

$name= $_POST['NAME'];
$age= $_POST['AGE'];
$sex= $_POST['SEX'];

$users[]=[$name,$age,$sex];
//var_dump($users.txt);
//die;

$usersALL=[];
foreach ($users as $v){
    $usersFinish1= implode(';', $v);
    $usersALL[] = $usersFinish1;
}
$array_people1 = implode("\n", $usersALL);

file_put_contents('users10.txt',$array_people1);
echo 'U amazing)';
