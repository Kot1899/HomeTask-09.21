
<?php
/*
 Напиши форму загрузки файла, которая будет принимать текстовый файл со списком пользователей.
 Отобрази список тех пользователей что есть в файле, в виде той таблицы, которую ты делал в прошлых заданиях.
*/

//include 'allfunctions.php';

echo '<h3><i>Hello, Alex,  it is hometask #11</i></h3>';

echo '<pre>';

echo "it's was great)"."\n";


if (array_key_exists('attach', $_FILES) && $_FILES['attach']['error']==0)
{
    move_uploaded_file($_FILES['attach']['tmp_name'], $_FILES['attach']['name']);
    $q=file_get_contents($_FILES['attach']['name']);

    echo 'u users list:'."\n"."\n"  ;}
else { echo 'Guys, u have some problems';
}
//var_dump($_POST, $_FILES);


$s= file_get_contents($_FILES['attach']['name']);

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
    echo '<td><strong><big><center>' . $v[2] . '</center></big></strong></td>';
    echo '</tr>';

}
echo '</table>';
