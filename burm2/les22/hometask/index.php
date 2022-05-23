<?php
/*
 Тебе необходимо создать соединение с базой в коде, и выполнить все те запросы, которые
 ты делал в прошлом задании, но уже в коде. А именно:

сделать вставку записи
обновить данные у вставленной записи
удалить какой-то элемент
вывести список существующих данных
Решение желательно предоставить через GIT, но можно и архивом с картинками к задаче.
 */

//connection

$dsn='mysql:host=localhost; dbname=mycat';
$connection = new PDO ($dsn, 'root', '123123');

//first
/*
$stat= " insert into student (name, age, city) values ('oll', 12, 'la'), ('nike', 19, 'vin') ";
$stm=$connection->exec($stat);
*/

//second
/*
$stat= " update student set name='Lebron' where id=32 ";
$stm=$connection->query($stat);
$stm->execute();
*/

//third
/*
$stat= " delete from student where city='vin' or id>34";
$stm=$connection->query($stat);
$stm->execute();
*/

//fourth
/*
$stm= $connection->query('select * from student');
$stm->execute();
$list = $stm->fetchAll(2);
echo '<pre/>';
var_dump($list);
echo 'ok';
*/

//fifth
$stat = 'update student set city = "adult" where age<:value ';
$stm=$connection->prepare($stat);
$stm->bindValue(':value', $_GET['age']);
$stm->execute();
$list=$stm->fetchAll(2);

$stm= $connection->query('select * from student');
$stm->execute();
$list = $stm->fetchAll(2);

echo '<pre/';
var_dump($list);
echo 'ok, u wonderful guy';