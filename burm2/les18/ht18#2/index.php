<?php
echo 'hello kot'."\n";
include 'figure.php';
include 'circle.php';
include 'rectangle.php';
include 'quadrate.php';

$circle= new circle();
$circle->setSize(10);
echo '-----circle-----'."\n";
echo $circle;

$rectangle= new rectangle();
$rectangle->setWeight(10);
$rectangle->setHeight(20);
echo '-----rectangle-----'."\n";
echo $rectangle;

$quadrate= new quadrate();
$quadrate->setSize(10);
echo '-----quadrate-----'."\n";
echo $quadrate;