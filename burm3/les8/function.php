<?php

function myFooter($foo){
    $footer=$foo."\n";
    return $footer;
}

function myTeam ($name, $number, $pos, $goal){
    $table=sprintf('|%10s|%6s|%9s|%4s|',$name, $number, $pos, $goal);
    return $table;
}

function myHeader($head){
    $header=$head.'<br>';
    return $header;
}