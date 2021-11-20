<?php

$s= file_get_contents('2.txt');
$s=$s. 'ivanr
hjfr
123';
file_put_contents('2.txt', $s);

