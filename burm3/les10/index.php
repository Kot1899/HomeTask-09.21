<?php

echo 'lesson 10, cao Milan calcio'."\n";
$player=file_get_contents('players7.txt');
$toString=explode("\n",$player);
$play=[];

foreach ($toString as $item) {
    $toText=explode(';', $item);
    $play[]=$toText;
}

$name=$_POST['playerName'];
$number=$_POST['playerNumber'];
$pos=$_POST['playerPos'];
$play[]=[$name,$number,$pos];
//var_dump($play);
$playFull=[];
foreach ($play as $item) {
    $toString=implode(';', $item);
    $playFull[]=$toString;
}
$playerFull=implode("\n", $playFull);
file_put_contents('players10.txt', $playerFull);
echo 'good job';