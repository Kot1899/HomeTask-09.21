<?php
// №1 connection to DB
$connection = new PDO('mysql:host=localhost; dbname=les19 - autoload', 'root', "123123");

$email_d= $_POST['Email'];
$login_d= $_POST['Login'];
$name_d= $_POST['Name'];
$password_d= $_POST['Password'];
$birth_date_d= $_POST['Date'];  //проверить чтобы исходно ко мне приходила стрка формата 2000-12-25
$country_d= $_POST['Country'];
echo $birth_date_d;
/*
session_start();

//№2 checking all inputs before save

// check email
    if( filter_var($email_d, FILTER_VALIDATE_EMAIL)){
        $email_full=$email_d;
    };

// check login
    if (strlen($login_d)>0) {
        $login_full = $login_d;
    };

// check name
if (strlen($name_d)>0) {
    $name = $name_d;
};

// check password
if (strlen($password_d)>0) {
    $password = $password_d;
};

// check birth date
$date= strtotime ($birth_date_d);
if (strlen($date)>0) {
    $birth_date=$birth_date_d;
};

// check country
if (strlen($country_d)>0) {
    $country = $country_d;
};

// check for uniqueness
$login_md5 = md5($login_full);
$email_md5 = md5($email_full);

$sgl="SELECT * FROM form where login='" . $login_md5 . "' and email='" . $email_md5 . "'";
$stm= $connection->query($sgl);
$stm->execute();
$list=$stm->fetchAll(PDO::FETCH_ASSOC);

if ($list!=null){
    $login = $login_full;
    $email = $email_full;
};

//№3 write data to BD
$sql = "insert into form (email, login, name, password, birth_date, country ) 
values('$email', md5('$login'), '$name', md5('$password'),'$birth_date', '$country' )";

$stm =$connection->exec($sql);

// №4 transfer to next page
//if($_SESSION['register']==true){};
    header("Location: index_sign_in.html");

*/