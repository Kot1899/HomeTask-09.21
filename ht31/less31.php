<?php
//email
//$s= $_POST['email'];
$s= 'username@examle.com';


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

//if( filter_var($s, FILTER_VALIDATE_EMAIL)){};
//echo "it ok too";

//проверка на корректность сиволов

$d='°';
echo '°='.htmlspecialchars($d);


//проверка на отсутсвие тегов

$a='<strong> hello</strong>
    <script> alert(2) </script>';

echo $a."\n";
echo strip_tags($a)."\n\n\n";
echo htmlspecialchars($a);
