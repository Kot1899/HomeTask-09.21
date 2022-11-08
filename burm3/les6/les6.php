<?php

include_once 'function3.php';
$footer = '---------AC2---------';

$players=[
    ['name'=>'sandro', 'number'=>8, 'pos'=>'midl'],
    ['name'=>'mike', 'number'=>30, 'pos'=>'goal'],
    ['name'=>'fik', 'number'=>23, 'pos'=>'def'],
    ['name'=>'messi', 'number'=>30, 'pos'=>'midl'],
    ['name'=>'rafa', 'number'=>17, 'pos'=>'midl'],
    ['name'=>'ibra', 'number'=>11, 'pos'=>'forvard'],
];

$numPlayers= count($players);
$topFor= $numPlayers-1;
echo 'number array elements through fun: '.$numPlayers."\n";
myFooter();

echo 'full team:'."\n";
for ($i=0; $i<=($numPlayers-1); $i++){
    $name=$players[$i]['name'];
    $number=$players[$i]['number'];
    $pos=$players[$i]['pos'];
    $show=show($name, $number, $pos);
    echo $show;
};
myFooter();

echo 'footer #2 now and next times'."\n";
echo myFooter2($footer);
echo sprintf('|%7s|%6s|%10s|', 'name', 'number','position')."\n";

//echo myFooter2($footer);
//for($i=0; $i<=$topFor; $i++){
//    $players[$i]['name']=str_pad($players[$i]['name'],7, STR_PAD_BOTH);
//}

//my table with lions)
for($i=$topFor; $i>=0; $i--){
    $name=$players[$i]['name'];
    $number=$players[$i]['number'];
    $pos=$players[$i]['pos'];
    $table=myTable($name, $number, $pos);
    echo $table;
}
echo myFooter2($footer);

