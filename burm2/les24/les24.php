<?php
/*cookies SET
setcookie('some_var', 10);

//echo 'hello kot a='. $a;
*/

//session SET
session_start();
$a= 'hello kot from session';

$_SESSION['sessionName']= $a;
echo 'ok';