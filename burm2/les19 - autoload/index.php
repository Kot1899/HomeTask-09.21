<?php
echo 'hello kot'."\n";

spl_autoload_register(function($v) { include 'direc/'. $v .'.php';});
//include 'direc\man.php';
//include 'direc\woman.php';

$alex=new \man ('19', 'alex');
echo $alex->name;

$oll=new \woman ('19', 'oll');
echo "\n".$oll->name . ' is '. $oll->sex;