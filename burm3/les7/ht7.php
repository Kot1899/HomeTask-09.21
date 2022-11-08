<?php

include_once 'function.php';

echo ' hello Milan fans, now I tell u about dream team: ' ."\n";

// write Milan players to list and create doc
file_put_contents('players7.txt', 'Name;Number;Pos;Goal
Sandro;8;Mildl;2
Calabria;2;def;1
Fik;23;def;0
Rafa;5;forvard;17
Ibra;11;for;10
Olievie;9;for;9
DeKeteler;90;midl;4');

//change this txt to array
$list=file_get_contents('players7.txt');
$tostring=explode("\n",$list);
$play=[];
foreach ($tostring as $value){
    $totext=explode(';',$value);
    $play[]=$totext;
}

//count
$countNum=count($play);
$top=$countNum-1;

//footer
$foo= '-----------------AC---------------';
echo myFooter($foo);

//cicle
for ($i=0; $i<=$top; $i++){
    $play[$i][0]=str_pad($play[$i][0],10,' ',2);
    $play[$i][1]=str_pad($play[$i][1],6,' ',2);
    $play[$i][2]=str_pad($play[$i][2],9,' ',2);
    $play[$i][3]=str_pad($play[$i][3],4,' ',2);
}

foreach ($play as $value){
    $name=$value[0];
    $number=$value[1];
    $pos=$value[2];
    $goal=$value[3];
    $table=myTeam($name, $number, $pos,$goal);
    echo $table. "\n";
};
echo myFooter($foo);

// hard task#1 - add one column who is good forvard

echo "new column:"."\n";
//crate header of table
for($i=0;$i<1;$i++){
    $name= $play[$i][0];
    $number= $play[$i][1];
    $pos= $play[$i][2];
    $goal= $play[$i][3];
    $table=myTeam($name,$number,$pos,$goal);
    echo $table."\n";
};
 for ($i=1; $i<=$top; $i++){
    $controlGoal=10;
    if($play[$i][3]>=$controlGoal){
        $name= $play[$i][0];
        $number= $play[$i][1];
        $pos= $play[$i][2];
        $goal= $play[$i][3].'good ';
        $table=myTeam($name,$number,$pos,$goal);
        echo $table."\n";
     }else{
        $name= $play[$i][0];
        $number= $play[$i][1];
        $pos= $play[$i][2];
        $goal= $play[$i][3].'slow ';
        $table=myTeam($name,$number,$pos,$goal);
        echo $table."\n";
    }
 }
 echo myFooter($foo);



