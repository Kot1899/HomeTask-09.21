<?php
/*
В одном из прошлых заданий, ты читал из файла users.txt.txt, всех пользователей и выводил их в виде списка\таблицы.
В этом задании, тебе необходимо создать форму, с методом отправки POST, которая будет содержать такие же поля
(имя, пол, возраст) как в твоем файле со списком. Данные с формы ты должен добавить в файл, как новую запись.
В итоге у тебя должна получится программа которая выводит список из файла, и форма, которая должна добавлять
в этот файл новую запись.
 */

echo '<h2><i>Hello, Alex,  it is hometask #10</i></h2>';

file_put_contents('users10.txt',
    'FirstName;Age;Sex;
Alex;ht18#1;Man
Ivan;14;Man
Petr;20;Man
Olga;24;Women
Irina;24;Women
Anna;10;Women
Mike;19;Man
John;39;Man');

//преобразуем єту строку в массив:

//$line1= '***************************************';
//header1($line1);
echo '<pre>';

$people = file_get_contents('users10.txt');

$array_people = explode("\n", $people);
$users=[];

foreach ($array_people as $v){
    $usersFinish= explode(';', $v);
    $users[] = $usersFinish;
}
include 'allfunctions.php';
$number = count_index( $users);
//$line1 = '+++++++++++++++++++++++++++++++++++';
//header1($line1);

/*
//echo '<br/>';
echo '<table border="2">';
for ($i=0; $i<1; $i++) {
    echo '<tr>';
    echo '<td><strong><big><center>' . $users.txt[$i][0]. '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $users.txt[$i][1]. '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $users.txt[$i][2]. '</center></big></strong></td>';
    echo '</tr>';
}
//echo '<br/>';


for ($i=1; $i<$number; $i++) {
    $controlAge = ht18#1;
    if ($users.txt[$i][2] < $controlAge) {

        echo '<tr>';
        echo '<td><center>' . $users.txt[$i][0]. '</center></td>';
        echo '<td><center>' . $users.txt[$i][1]. 'minor'.'</center></td>';
        echo '<td><strong><center>' . $users.txt[$i][2]. '</center></strong></td>';

        echo '</tr>';

        echo '<br/>';
    }
    else {

        echo '<tr>';
        echo '<td><center>' . $users.txt[$i][0]. '</center></td>';
        echo '<td><center>' . $users.txt[$i][1]. ' adult'. '</center></td>';
        echo '<td><strong><center>' . $users.txt[$i][2]. '</center></strong></td>';

        echo '</tr>';

        echo '<br/>';
    }
}
echo '</table>';

*/

$name= $_POST['name'];
$age= $_POST['age'];
$sex= $_POST['sex'];

$users[]=$name.';'.$age.';'.$sex."/n";
file_put_contents('users10.txt', implode("\n", $users));
echo 'U amazing)';
