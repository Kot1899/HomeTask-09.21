<?php
/*
Возьми за основу прошлое задание с циклами, где ты выводил всех юзеров в разных циклах и в разном порядке (в прямом и обратном порядке).

Тело циклов у тебя везде, по идее, одинаковое — это вывод юзера. Твоя задача, вынести в функцию тот самый вывод (аналогично видео уроку).

Попробуй изменять функцию, и запускать программу каждый раз меняя вывод, чтобы оценить всю силу использования функций.
*/

include 'allfunctions.php';

$users = [
    [ 'name' => 'Alex', 'age' => 18],
    [ 'name' => 'Mike', 'age' => 12],
    [ 'name' => 'Oleg', 'age' => 11],
    [ 'name' => 'Paul', 'age' => 20],
    [ 'name' => 'Smith', 'age' => 38],
];
// количество элементов в массиве
$size = sizeof( $users);
echo 'Кол-во элементов массива:' . $size . "\n";

//Функция что позволяеит считать количество эл-тов массива

$number = count ($users);
echo 'Кол-во элементов массива(через функцию):' . $number . "\n";

// выведу с помощью цикла FOR обратный список:

$line1 ='============================';
Header1($line1);

echo 'FOR' . "\n";
for ($i = $number-1; $i >= 0; $i--) {
    $name= $users[$i]['name'];
    $age = $users[$i]['age'];
    For_show ($name, $age);
}
// выведу с помощью цикла WHILE обратный список:
echo "\n" . 'WHILE' . "\n";

$i=$number-1;
while ($i>=0){
    $name= $users[$i]['name'];
    $age = $users[$i]['age'];
    For_show ($name, $age);
    $i--;
}
// выведу с помощью цикла DO-WHILE обратный список:
echo "\n" . 'DO-WHILE' . "\n";
$i=$number-1;
do {
    $name= $users[$i]['name'];
    $age = $users[$i]['age'];
    For_show ($name, $age);
    $i--;
}
while($i>=0);

// выведу с помощью цикла FOREACH обратный список:
echo "\n" . 'FOREACH' . "\n";
for ($i=4; $i>=0 ; $i--){
    $reverse[$i]=$users[$i];
}

echo "\n" .'FOReach' . "\n";
foreach ($reverse as $i=>$v){
    $name= $reverse[$i]['name'];
    $age = $reverse[$i]['age'];
    For_show ($name, $age);
}


Header1($line1);

