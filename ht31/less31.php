<?php
//email
//$s= $_POST['email'];
$s= 'username@examle.com';
$date= '2000-12-24';


/*
if (strlen($s)>0){
 echo 'not empty'."\n";

 if(strpos($s, '@')>0 && strpos($s, '.com')>0){
     echo '@ and dot com exist';
 }
};
*/

//$RES=   filter_var($s, FILTER_VALIDATE_EMAIL);
//var_dump($RES);

if( filter_var($s, FILTER_VALIDATE_EMAIL)){$s123=$s;};
echo $s123 ."it ok too";
echo "\n";

$d= strtotime ($date);
if (strlen($d)>0) {
    echo 'good job' . "\n";
};
/*
//проверка на корректность сиволов

$d='°';
echo '°='.htmlspecialchars($d);


//проверка на отсутсвие тегов

$a='<strong> hello</strong>
    <script> alert(2) </script>';

echo $a."\n";
echo strip_tags($a)."\n\n\n";
echo htmlspecialchars($a);
*/


