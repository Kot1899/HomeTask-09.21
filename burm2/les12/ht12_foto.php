<?php


$att=$_FILES['attach_file'];
$att_name=$_FILES['attach_file']['name'];
if (array_key_exists('attach_file', $_FILES) && $_FILES['attach_file']['error'] == 0){
    if ($_FILES['attach_file']['type'] == 'image/jpeg'){
        move_uploaded_file($att['tmp_name'],'C:/PHP hometask/' .  $att_name);
    }
    echo 'thanks Kot)' . '<br/>'. 'u amazing';
}
echo  '<br/>';

/*
$all_files=glob('*txt');
foreach ($all_files as $v) {
    echo '<a href="">'. $v . '</a><br/>';
}
C:\PHP hometask
*/