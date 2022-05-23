<?php

//connection to db
$dsn='mysql:host=localhost; dbname=mycat';
$userCon='root';
$passwordCon='123123';
$connection= new PDO($dsn,$userCon,$passwordCon);

//getting data from form POST method
$name=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$number=$_POST['number'];
$serial=$_POST['serial'];
$date=$_POST['date'];

//  write data to bd user
$sql="insert into user (name, age, sex) value ('$name', '$age','$sex')";
$stm=$connection->query($sql);
$stm->execute();
$userId=$connection->lastInsertId();

//  write data to bd passport
$sql_stat="insert into passport (number,serial,date_issure, user_id)
values (:number,:serial, :date, :userId)";
$stat=$connection->prepare($sql_stat);
$stat->bindParam(':userId', $userId);
$stat->bindParam(':number', $number);
$stat->bindParam(':serial', $serial);
$stat->bindParam(':date', $date);
$stat->execute();

//add user and passport and show it is oll
$sgl_join="SELECT * FROM user LEFT JOIN passport ON user.id = passport.user_id LIMIT 155";

$stm= $connection->query($sgl_join);
$stm->execute();
$list=$stm->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($list);
