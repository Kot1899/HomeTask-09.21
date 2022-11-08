<?php

$file=$_GET['webFile'];
$list=file_get_contents($file);
$toString=explode("\n",$list);
$play=[];
foreach ($toString as $value){
    if(strlen($value>0)){
        $toText=explode(';', $value);
        $play[]=$toText;
    }
};
echo '<table border=1>';
foreach ($play as $value){
    echo '<tr>';
    echo '<td bgcolor=yellow><strong><center>'.$value[0].'</center></strong>';
    echo '<td bgcolor=red><strong><center><font color ="#00fbbf">'
        .$value[1].'</font></center></strong></td>';
}
echo '<br/>'.'</table>';
$button='submit';
echo '<a href="/ht9.html"><strong><font color="#7fffd4">'.
    $button.'</font></strong></a>';


