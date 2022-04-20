<?php

echo ' hello, it is hometask #7'. "\n";

//write list of people and creat new doc
file_put_contents('list7.txt', '
FirstName;LastName;Age;
Alex;Petrov;12;Man
Ivan;Petrov;14;Man
Petr;Petrovich;20;Man
Olga;Petrovna;24;Women
Irina;Olegovich;24;Women
Anna;Hakin;10;Women
Mike;Krug;19;Man
John;Braun;39;Man
');

//change this text to array:
$list1=file_get_contents('list7.txt');
$list_string = explode("\n", $list1);
$students=[];
foreach ($list_string as $v){
    $students_finish= explode(';', $v);
    $students=$students_finish;
}
//number of index
$number= count($students);
$number_array=$number-1;

echo $number . '       '. $number_array;

