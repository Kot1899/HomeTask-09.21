<?php

echo ' hello, it is hometask #7'. "\n";

//write list of people and creat new doc
file_put_contents('list7.txt', 'FirstName;LastName;Age;Sex;
Alex;Petrov;18;Man
Ivan;Petrov;14;Man
Petr;Petrovich;20;Man
Olga;Petrovna;24;Women
Irina;Olegovich;24;Women
Anna;Hakin;10;Women
Mike;Krug;19;Man
John;Braun;39;Man');

//change this text to array:
$list1=file_get_contents('list7.txt');
$list_string = explode("\n", $list1);
$students=[];
foreach ($list_string as $v){
    $students_finish= explode(';', $v);
    $students[]=$students_finish;
}
//number of index
$number= count($students);
$number_array=$number-1;

//echo $number . '       '. $number_array;
include "function.php";
$line_header='*+++++++++++++++++++*++++++++++++++++++*';
header_line($line_header);


for ($i=0; $i<= $number_array; $i++){
$students[$i][0] = str_pad($students[$i][0],11,' ', STR_PAD_BOTH);
$students[$i][1] = str_pad($students[$i][1],13,' ', STR_PAD_BOTH);
$students[$i][2] = str_pad($students[$i][2],4,' ', STR_PAD_BOTH);
$students[$i][3] = str_pad($students[$i][3],7,' ', STR_PAD_BOTH);
}

foreach ($students as $v) {
    $name = $v[0];
    $last_name = $v[1];
    $age = $v[2];
    $sex = $v[3];
    $table_student=print_table($name, $last_name, $age,$sex);
    echo $table_student . "\n";
}
header_line($line_header);

// hard task #1 - plus one column with 18+

echo' add new column with 18+ age'. "\n";

header_line($line_header);

for ($i=0; $i<1; $i++) {
    $name = $students[$i][0];
    $last_name = $students[$i][1];
    $age = $students[$i][2];
    $sex = $students[$i][3];
    $table_student=print_table($name, $last_name, $age,$sex);
    echo $table_student . "\n";
}

for ($i=1; $i<$number_array; $i++) {
    $control_age = 18;
    if ($students[$i][2]  < $control_age) {
        $name = $students[$i][0];
        $last_name = $students[$i][1];
        $age = $students[$i][2] . ' minor';
        $sex = $students[$i][3];
        $table_student = print_table($name, $last_name, $age, $sex);
        echo $table_student . "\n";
    } else {
        $name = $students[$i][0];
        $last_name = $students[$i][1];
        $age = $students[$i][2] . ' adult';
        $sex = $students[$i][3];
        $table_student = print_table($name, $last_name, $age, $sex);
        echo $table_student . "\n";
    }
}
header_line($line_header);
// hard task #2 - plus one column with 18+

echo' list of people whom more 18'. "\n";

header_line($line_header);


for ($i=0; $i<1; $i++) {
    $name = $students[$i][0];
    $last_name = $students[$i][1];
    $age = $students[$i][2];
    $sex = $students[$i][3];
    $table_student=print_table($name, $last_name, $age,$sex);
    echo $table_student . "\n";
}

for ($i=1; $i<$number_array; $i++) {
    $control_age = 18;
    if ($students[$i][2]  >= $control_age) {
        $name = $students[$i][0];
        $last_name = $students[$i][1];
        $age = $students[$i][2] . ' minor';
        $sex = $students[$i][3];
        $table_student = print_table($name, $last_name, $age, $sex);
        echo $table_student . "\n";
    }
}