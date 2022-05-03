<?php
$filename=$_GET['somefile'];
$people_string = file_get_contents($filename);
$people_word=explode("\n", $people_string);
$students=[];
foreach ($people_word as $v) {
    if (strlen($v)>0){
        $people = explode(';', $v);
        $students[]=$people;
    }
}
echo '<table border=1>';
foreach ($students as $v) {
    echo '<tr>';
    echo '<td bgcolor=yellow><strong><center>' . $v[0].'</td></center></strong>';
    echo '<td bgcolor=yellow><strong><center><font color="#00bfff"> ' .$v[1].'</font></td></center></strong>';
    }
echo '</table>';
$button = 'Touch me pls';
echo '<a href="/ht9.html"> <strong> <font color="red">'.$button.'</font></strong></a>';