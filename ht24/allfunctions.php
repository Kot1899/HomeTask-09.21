<?php
//function Count_index(){
//    for ($i=0; $i<9; $i++){
//    }
//    return $i;
//}
//function First_expl ()
//{
//    foreach ($array_people as $v) {
//        $usersFinish = explode(';', $v);
//        $users.txt[] = $usersFinish;
//    }
//    return $users.txt;
//}
//
//function For_show($name, $age){
//    echo $name . ' = ' . $age . ' years' . "\n";
//}
//
//function Header1($line1){
//    echo $line1 . "\n";
//}
//
//function table_users($name, $age){
//    echo sprintf('|%6s|%4d |', $name, $age);
//    echo "\n";
//}
//
//function table_users7($name, $last_n, $age, $sex){
//    $pr=sprintf('|%11s|%13s|%4s|%7s|', $name, $last_n, $age, $sex);
//    return $pr;
//}
//
//function table_users8($name, $last_n, $age, $sex){
//    $pr=sprintf('|%11s|%13s|%9s|%7s|', $name, $last_n, $age, $sex);
//    return $pr;
//}
//
//function table_users9($name, $last_n, $age, $sex){
//    $pr=sprintf('%11s%13s%9s%7s', $name, $last_n, $age, $sex);
//    return $pr;
//}
function first_str()
{
$s='<tr>'.
    '<td><strong><big><center>' . '#' . '</center></big></strong></td>'.
    '<td><strong><big><center>' . 'Name' . '</center></big></strong></td>'.
    '<td><strong><big><center>' . 'Age' . '</center></big></strong></td>'.
    '<td><strong><big><center>' . 'Sex' . '</center></big></strong></td>'.
    '<td><strong><big><center>' . 'Number' . '</center></big></strong></td>'.
    '<td><strong><big><center>' . 'Serial' . '</center></big></strong></td>'.
    '<td><strong><big><center>' . 'Date of issure' . '</center></big></strong></td>'.
    '</tr>';
       return $s;
}
//
//echo '<tr>';
//echo '<td><strong><big><center>' . '#' . '</center></big></strong></td>';
//echo '<td><strong><big><center>' . 'Name' . '</center></big></strong></td>';
//echo '<td><strong><big><center>' . 'Age' . '</center></big></strong></td>';
//echo '<td><strong><big><center>' . 'Sex' . '</center></big></strong></td>';
//echo '</tr>';