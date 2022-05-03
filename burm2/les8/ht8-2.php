<?php
echo  '<strong> <h3>Hello my funny Kot, it is hometask#8/2</h3></strong>';
//write list of people and creat new doc

file_put_contents('list8.txt', 'FirstName;LastName;Age;Sex;
Alex;Petrov;18;Man
Ivan;Petrov;14;Man
Petr;Petrovich;20;Man
Olga;Petrovna;24;Women
Irina;Olegovich;24;Women
Anna;Hakin;10;Women
Mike;Krug;19;Man
John;Braun;39;Man');

//change this text to array:
$list1=file_get_contents('list8.txt');
$list_string = explode("\n", $list1);
$students=[];
foreach ($list_string as $v){
    $students_finish= explode(';', $v);
    $students[]=$students_finish;
}
//number of index
$number= count($students);
$number_array=$number-1;

$max_age= $students[1][2];
for ($i=1; $i<=$number_array; $i++){
    if($max_age<$students[$i][2]){
//        $max_age=$students[$i][2];

    }
}

include 'function.php';

$line_header='+++++++++++++++++++++++++++++++++*';
header_line2 ($line_header);

echo '<table border="2">';
for ($i=0; $i<1; $i++){
    echo '<tr>';
    echo '<td bgcolor="#00bfff"><big><strong><center><font color="yellow"> ' . $students[$i][0].'</font></center></strong></big></<td>';
    echo '<td bgcolor="#00bfff"><big><strong><center><font color="yellow"> ' . $students[$i][1].'</font></center></strong></big></<td>';
    echo '<td bgcolor="#00bfff"><big><strong><center><font color="yellow"> ' . $students[$i][2].'</font></center></strong></big></<td>';
    echo '<td bgcolor="#00bfff"><big><strong><center><font color="yellow"> ' . $students[$i][3].'</font></center></strong></big></<td>';
}

for ($i=1; $i<$number;$i++){
    $control_age=18;
    if($students[$i][2]< $control_age){
        echo '<tr>';
        echo '<td><i><center>' . $students[$i][0].'</center></i></<td>';
        echo '<td><i><center>' . $students[$i][1].'</center></i></<td>';
        echo '<td><i><center>' . $students[$i][2].'minor'.'</center></i></<td>';
        echo '<td><i><center>' . $students[$i][3].'</center></i></<td>';
        echo '</tr>';
    } else{
        echo '<tr>';
        echo '<td><i><center>' . $students[$i][0].'</center></i></<td>';
        echo '<td><i><center>' . $students[$i][1].'</center></i></<td>';
        echo '<td><i><center>' . $students[$i][2].'adult'.'</center></i></<td>';
        echo '<td><i><center>' . $students[$i][3].'</center></i></<td>';
        echo '</tr>';
    }
}
echo '<table border>';


header_line2 ($line_header);
echo '<strong><font color="red">'.$max_age. '</strong></font color="red">';
