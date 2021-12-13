<?php
$connection = new PDO('mysql:host=localhost; dbname=myCat', 'root', "123123");

// first part of task

//$connection->exec(  "insert into ht2 (name, age, city, number_car)
// values ('mike', 14, 'KH', 5), ('iivan', 10, 'KH', 2)");


// first part of task

//$connection->exec(  "update ht2 set name='Rita', age=77 where name='iivan'");
//echo 'oK';


// third part of task
//$connection->exec('delete from ht2 where name="mike" ');
//echo 'oK';


//fourth part of task

$stm= $connection->query(" select * from ht2 ");
$stm->execute();
$list=$stm->fetchAll(PDO::FETCH_ASSOC);
var_dump($list);
echo 'oK';
