<?php

$dsn= 'mysql:host=localhost;port = 33060;dbname=mycat';
$user = 'root';
$pass = 123123;
 $connection= new PDO('mysql:host=localhost;port = 33060;dbname=mycat',
    $user, $pass);
//it was connection to my sql database


// first method
/*
$insert=" insert into mycat.student (name,age, city) values ('mike',18,'ny')";
$connection->exec($insert); // only - del/insert/up
$connection-> errorInfo();
*/

/*
//second method
$stm= $connection->query('select id, name  from student');//all+ SELECT  //єто сфор.запрос
$stm->execute();    // єто запустить
$list = $stm->fetchAll(2); //  это получить масив результата и присв. перменную для удобств
//2- it is PDO::FETCH_ASSOC
//3 - it is PDO::FETCH_NUM
var_dump($list);
*/

//third method  NOT CAREFUL VARIANT

/*
$stm=$connection->prepare('select * from student');
$stm-> execute();
$list= $stm->fetchAll(2);
var_dump ($list);
*/

//third method   CAREFUL VARIANT

//$stat='delete from student where id=:value1 and age=:value2 ';
//$stm=$connection->prepare($stat);
//$stm->bindValue(':value1', $_GET['id']); // - этот метод позволяет более безопасно проводить код
//$stm->bindValue(':value2', $_GET['age']); // - этот метод позволяет более безопасно проводить код
//$stm-> execute();
//
//$list= $stm->fetchAll(2);
//var_dump ($list);
// чтобы работало все в браузере нужно: запустить локалку и прописать /les22.php?id=xx&age=xx

$insert=" insert into mycat.user (name,age, sex) values ('mike',18,'ny')";
$connection->exec($insert); // only - del/insert/up
echo 'ok, u are amazing cat';
