<?php
$connection = new PDO('mysql:host=localhost; dbname=myCat', 'root', "123123");
//$connection->exec('insert into ht2 (name, age, city, number_car)
// values ('ivan', 10, 'KH', 2), ('mike', 12, 'LA', 3)');
$connection->exec('delete from ht2 where id=12');
echo 'oK';