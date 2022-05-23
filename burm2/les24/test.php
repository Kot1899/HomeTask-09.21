<?php
/*   cookie GET
$var1=$_COOKIE['some_var'];

echo $var1;
*/

//session GET
session_start();

$return= $_SESSION['sessionName'];
echo  $return;
