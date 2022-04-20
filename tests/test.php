<?php


$x = 100;
$y = &$x;
$x += 100;
$x++;
echo $y;