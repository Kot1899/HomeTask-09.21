<?php

$connection = new PDO('mysql:host=localhost; dbname=ht23', 'root', "123123");

$number_page=4;

$stm=$connection->prepare('select * from user limit :offset , :limit');
$stm->bindValue('offset',$_GET['page']*$number_page, PDO::PARAM_INT);
$stm->bindValue('limit',$number_page, PDO::PARAM_INT);
$stm->execute();

$list= $stm->fetchAll(PDO::FETCH_ASSOC);
include 'users.html.php';


