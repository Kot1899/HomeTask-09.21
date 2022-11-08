<?php

function myFooter(){
    echo '----------------AC-------------'."\n"."\n";
}

function show($name, $number, $pos){
    return $name . '= ' . $number. ' and play on position - '. $pos."\n";
}

function myFooter2($footer){
    $foo=$footer."\n";
    return $foo;
}

function myTable($name, $number, $pos){
    return sprintf('|%7s|%6s|%10s|', $name, $number, $pos)."\n";
}

