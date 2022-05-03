<?php

echo "Hello, test\n";
/*
 Возьми свое решение из прошлого задания. Приведи его в вид, где у тебя есть минимум две собственных функции.

Выведи таблицу с пользователями, рисуя ее с колонками, где в качестве колонки будет "|" (вертикальная палка) или буква "i" англ большая или любой другой символ, который похож на разделитель колонки для таблицы.

В качестве результата у тебя должно получится примерно такое. Длинна имени может быть разная, возраст может быть до 1 до 99 — соответственно твой результат должен всегда подстраиваться, и выглядеть аккуратно.

Функции, которые тебе могут помочь в решении задачи (не обязательно использовать все):

printf — форматированный вывод
str_repeat — повторить один символ (к примеру тире), сколько угодно раз
strlen / mb_strlen — узнать длину строки (вычислить самое длинное имя)
str_pad — заполнить строку лишними символами, до требуемой итоговой длины (к примеру заполнить имя пробелами)
 */

include 'allfunctions.php';

$users = [
    [ 'name' => 'Alex', 'age' => 18],
    [ 'name' => 'Mike', 'age' => 12],
    [ 'name' => 'Oleg', 'age' => 11],
    [ 'name' => 'Paul', 'age' => 20],
    [ 'name' => 'Smith', 'age' => 38],
    [ 'name' => 'Tom', 'age' => 98],
];

//Функция что позволяеит считать количество эл-тов массива (first own function count_index)

$number = count_index ($users);
echo 'Кол-во элементов массива(через функцию):' . $number . "\n";


//second own function Header1:
$line1 ='——————————————';

//third own function For_show:
echo 'Our source array "users.txt":' . "\n";
// выведу с помощью цикла FOR обратный список:
for ($i = $number-1; $i >= 0; $i--) {
    $name= $users[$i]['name'];
    $age = $users[$i]['age'];
    For_show ($name, $age);
}

/* в тестовом режиме выведу и проверю работу функции sprintf:
echo sprintf('| %s | %d |', $users.txt[1]['name'], $users.txt[1]['age']);
*/

// our new table with users.txt
echo 'Our new table with "users.txt":' . "\n";

Header1($line1);

echo sprintf('|%6s|%4d |', 'NAME','AGE');
ECHO "\n";

Header1($line1);

for ($i= 0; $i< $number; $i++){
    $users[$i]['name']= str_pad($users[$i]['name'], 6);
}
//fourth own function table_users:
for ($i = 0; $i < $number; $i++){
    $name= $users[$i]['name'];
    $age = $users[$i]['age'];
    table_users ($name, $age);
}
//header:
Header1($line1);






