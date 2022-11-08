<?php
include 'function3.php';

$players = [
    ['name'=>'olivie', 'number'=>9],
    ['name'=>'teo', 'number'=>19],
    ['name'=>'tonali', 'number'=>8],
    ['name'=>'benacer', 'number'=>4],
    ['name'=>'calabria', 'number'=>2],
    ['name'=>'pobega', 'number'=>32],
];

//number of array elements
$size=sizeof($players);
echo 'number of Milan players is '. $size."\n";

//function what can count my players
$milanPlayers=countNum($players);
echo 'my own function '. $milanPlayers."\n";

//show al players:
for($i=0;$i<=($milanPlayers-1); $i++){
    echo 'player '. $players[$i]['name'].' has number '.
        $players[$i]['number']. ' his strlen is '.
        strlen($players[$i]['name']). "\n";
}
myFooter();

//full player through  my function
for($i=0; $i<$milanPlayers; $i++){
    fullPlayers($players[$i]['name'],$players[$i]['number']);
}