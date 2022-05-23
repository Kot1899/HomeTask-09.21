<?php
// include 'roma/woman.php';
// require 'roma/man.php';

spl_autoload_register(function ($v){
    require_once ('roma\\'. $v.'.php');
});

 $user1 = new \oll\woman('miko');
 $user2= new \kile\man('mike');


 echo $user1->name . ' and ' . $user2->name;