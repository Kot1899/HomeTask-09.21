<?php
$filename= $_GET['filename'];
$s= file_get_contents($filename);
$a = explode( "\n", $s);
$users=[];
foreach ($a as $v){
    if (strlen($v)>0){
        $user= explode(';', $v);
        $users[]= $user;
    }
}
echo '<table border ="1">';
foreach ($users as $v){
    echo '<tr>';
    echo '<td><strong><big><center>' . $v[0] . '</center></big></strong></td>';
    echo '<td><center><font size="4" color="blue">' . $v[1] . '</center></font size="4" color="blue"></font></td>';
    echo '</tr>';

}
echo '</table>';

$button1= "Don't tuch me";
echo '<a href="/ht9.html"><strong><font size="6" color="#006400">' .$button1. '</strong></font size="6"color="#006400"></a>';