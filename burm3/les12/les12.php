<?php
echo '<pre>';
var_dump($_FILES['attach']);
if(array_key_exists('attach',$_FILES)&& $_FILES['attach']['error']==0){
    if($_FILES['attach']['type'] == 'text/plain'){
        move_uploaded_file($_FILES['attach']['tmp_name'],
        $_FILES['attach']['name']);
        $newName=$_FILES['attach']['name'];
        echo 'ok'.$newName;
    }
}
