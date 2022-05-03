<?php

echo '<h3> Hello Kot </h3>';
echo '<pre>';
$file=$_FILES['Attach'];
$file_name=$_FILES['Attach']['name'];
if (array_key_exists('Attach', $_FILES) && $file['error'] == 0){
    if ($_FILES['Attach']['type'] == 'text/plain'){
        move_uploaded_file($file['tmp_name'],  $file_name);
    }
//    var_dump($_POST, $_FILES);
$people = file_get_contents($file_name);
    echo 'U user list:' ."\n";
} else{
    echo 'u have some problems';
}
$people1= file_get_contents($file_name);
$people_string=explode("\n", $people1);
$students=[];
foreach ($people_string as $v) {
    if (strlen($v)>0){
        $people_word=explode(';', $v);
        $students[]=$people_word;
    }
}
echo '<table border = 1>';
foreach ($students as $v) {
    echo '<tr>';
    echo '<td><strong><center>' . $v[0] . '</center> </strong></td>';
    echo '<td><strong><center>' . $v[1] . '</center> </strong></td>';
    echo '<td><strong><center>' . $v[2] . '</center> </strong></td>';
    echo '</tr>';
}
echo '</table>';
