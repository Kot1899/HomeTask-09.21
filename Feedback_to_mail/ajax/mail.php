<?php
//echo 'hello';

$email=$_POST['email'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$subject="=?utf-8?B?".base64_encode('message from site')."?=";//особая конструкция надо запомнить, а дальше просто зашифровано фраза
$headers= "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";

$success=mail("my.vit.kharkiv@gmail.com",$subject, $message,  $headers);//почта, куда отправится;тема письма; само сообщение; заголовки
echo $success;






?>