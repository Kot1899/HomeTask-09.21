<?php

/*
Возьми за основу прошлую работу с сохранением юзера, паспортом, и авторизацией. Дополни его
 всевозможными проверками.

К примеру, для авторизации ты точно знаешь, что логин и пароль должны прийти не пустыми. А при
создании пользователя и паспорта, ты знаешь что имя это строка, возраст это число и он должен быть
больше нуля. И т.д.

В работе тебе помогут комбинированные условия, и функции filter_var, strlen.
 */

// №1 подключится к БД
$connection = new PDO('mysql:host=localhost; dbname=ht23', 'root', "123123");

$connection->exec(  "insert into regist_hash ( login, password_hash)  values ('root', md5('123123') ), ('admin', md5('admin'))");

echo 'ok';

SESSION_START();

// №2 подключится к БД

$login= $_POST['Login'];
$password= md5($_POST['Passw']);

// №2 проверка с БД

//if ($user->password==md5($_POST['password'])){
//
//}

$sgl="SELECT * FROM regist_hash where login='" . $login . "' and password='" . $password . "'";
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
    header("Location: index24.html");

} else{
    header("Location: fault.html");
}
