<?php
echo  '<title>SESSION from les #24</title>';
session_start();

//connection to db
$dsn= 'mysql:host=localhost; dbname=mycat';
$userCon='root';
$passwordCon='123123';
$connection= new PDO($dsn,$userCon,$passwordCon);

//getting data from POST method
$login=$_POST['Login'];
$password=$_POST['Passw'];

//checking new-data with bd-data
$sql="select * from accounts where login='".$login."' and password='".$password."' ";
$stm=$connection->query($sql);
$stm->execute();
$list=$stm->fetchAll(PDO::FETCH_ASSOC);

if($list != null){
    $_SESSION['check']=true;
}else{
    $_SESSION['check']=false;
}

//step to next page when TRUE
if($_SESSION['check']==true){
    header('location: form.html');
}

//step to next page when FALSE
if($_SESSION['check']==false){
    header('location: fault.html');
}




echo 'hello kot';

$sping='sdsdsdsdsdweere';
$code= base64_encode($sping);
//base64