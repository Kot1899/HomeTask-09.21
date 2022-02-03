<?php

echo base64_decode('0JLQvtC30YzQvNC4INC30LAg0L7RgdC90L7QstGDINGB0LLQvtGOINGA0LDQsdC+0YLRgyDQv9C+INC30LDQtNCw0L3QuNGOINGBINCw0LLRgtC+0YDQuNC30LDRhtC40LXQuSwg0YHQtdGB0YHQuNGP0LzQuCDQuCDQutGD0LrQuC4g0KPRgdC+0LLQtdGA0YjQtdC90YHRgtCy0YPQuSDQv9GA0L7RhtC10YHRgSDQsNCy0YLQvtGA0LjQt9Cw0YbQuNC4INGC0LDQutC40Lwg0L7QsdGA0LDQt9C+0LwsINGH0YLQvtCx0Ysg0LjRgdC/0L7Qu9GM0LfQvtCy0LDQu9GB0Y8g0LzQtdGC0L7QtCDRhdC10YjQuNGA0L7QstCw0L3QuNGPIG1kNSDQuNC70Lggc2hhMSDQv9GA0Lgg0L/RgNC+0LLQtdGA0LrQtSDQv9Cw0YDQvtC70Y8u');

/*
 * Возьми за основу свою работу по заданию с авторизацией, сессиями и куки. Усовершенствуй процесс авто
ризации таким образом, чтобы использовался метод хеширования md5 или sha1 при проверке пароля.

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
    header("Location: index242.html");

} else{
    header("Location: fault.html");
}
