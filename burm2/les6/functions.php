<?php

function for_show($name, $age, $city){

 return $name . '= ' . $age . ' years, from  ' . $city . "\n";
}

function header_line($line_header){
    $header=$line_header. "\n";
    return $header;
}
function table_students($name, $age, $city){
    return sprintf('I%7sI%4sI%6sI', $name, $age, $city) . "\n";
}

