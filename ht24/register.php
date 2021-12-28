<?php

SESSION_START();

// №1 подключится к БД
$connection = new PDO('mysql:host=localhost; dbname=ht23', 'root', "123123");

$login= $_POST['Login'];
$password= $_POST['Passw'];

if ($login=='root' && $password=='123123' or $login=='admin' && $password=='admin' ){
    $reg=true;
    $_session['registr']=$reg;
} else{
    $reg=false;
    $_session['registr']=$reg;
}

// №2 проверка
if($_session['register']==true){
    header("Location: index24.html");

} else{
    header("Location: fault.html");
}