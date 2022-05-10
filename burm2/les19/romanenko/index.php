<?php
spl_autoload_register(function ($v){
    $v = str_replace('\\','/',$v);
    include $v.'.php';
});

use romanenko\man;
use romanenko\woman;

$alex=new \man ('Alex', 10);
$oll=new \woman ('oll', 20);

echo $alex->name .' is '.$alex->age .' years old and he is a '.$alex->sex . "\n";
echo $oll->name .' is '.$oll->age .' years old and she is a '.$oll->sex . "\n";
