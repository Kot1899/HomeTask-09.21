<?php
function first_str(){
    $str=
        '<tr>'.
        '<td> <strong> <center> ' .'#'.'</center></strong></td>'.
        '<td> <strong> <center> ' .'Name'.'</center></strong></td>'.
        '<td> <strong> <center> ' .'Age'.'</center></strong></td>'.
        '<td> <strong> <center> ' .'Sex'.'</center></strong></td>'.
        '<td> <strong> <center> ' .'Number'.'</center></strong></td>'.
        '<td> <strong> <center> ' .'Serial'.'</center></strong></td>'.
        '<td> <strong> <center> ' .'Date of issure'.'</center></strong></td>'.
        '</tr>';
    return $str;
}


function second_str($list)
{
    foreach ($list as $v) {
        $str2=
        '<tr>';
        '<td><strong><big><center>' . $v['id'] . '</center></big></strong></td>';
        '<td><center><font size="4" color="blue">' . $v['name'] . '</center></font size="4"
color="blue"></font></td>';
        '<td><strong><big><center>' . $v['age'] . '</center></big></strong></td>';
        '<td><strong><big><center>' . $v['sex'] . '</center></big></strong></td>';
        '<td><strong><big><center>' . $v['number'] . '</center></big></strong></td>';
        '<td><strong><big><center>' . $v['serial'] . '</center></big></strong></td>';
        '<td><strong><big><center>' . $v['date_issure'] . '</center></big></strong></td>';
       '</tr>';
    }
    return $str2;
}
