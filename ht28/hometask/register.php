<?php

SESSION_START();

// №1 подключится к БД
$connection = new PDO('mysql:host=localhost; dbname=ht23', 'root', "123123");

$login= $_POST['Login'];
$password= $_POST['Passw'];

// №2 проверка с БД

//$sgl="SELECT * FROM registration where login="'.$login.' "and password="'.$password.';
$sgl="SELECT * FROM registration where login='" . $login . "' and password='" . $password . "'";
$stm= $connection->query($sgl);
$stm->execute();
$list=$stm->fetchAll(PDO::FETCH_ASSOC);

if ($list!=null){
    $reg=true;
    $_session['register']=$reg;
} else{
    $reg=false;
    $_session['register']=$reg;
}

// №3 направление на след страничку
if($_session['register']==true){
    header("Location: index242.html");

} else{
    header("Location: fault.html");
}

