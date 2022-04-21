<?php

function header_line($line_header){
    $header1=$line_header . "\n";
echo $header1;
}

function print_table($name, $last_name, $age, $sex){
    $print_table= sprintf('|%11s|%13s|%4s|%7s|', $name, $last_name, $age, $sex);
    return $print_table;
}

