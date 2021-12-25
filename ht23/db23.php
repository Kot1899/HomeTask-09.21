<?php
$connection = new PDO('mysql:host=localhost; dbname=ht23', 'root', "123123");


$sql=" select * from user ";
$stm= $connection->prepare($sql);
$stm->execute();
$list=$stm->fetchAll(PDO::FETCH_ASSOC);
/*
echo "<pre>";
var_dump($list);
echo 'oK';
*/

for ($i=0; $i< count($list); $i++){
//    echo $user['id']."<br>";

    $sql =  "Select * from  passport where user_id=:id";
    $stm = $connection->prepare($sql);
    $stm->bindValue('id', $list[$i]['id']);
    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);

    $list[$i]['passport']=$result;

}
echo "<pre>";
var_dump($list);

echo 'Ok';