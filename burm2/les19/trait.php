<?php

class User {
    public  $name;
}

trait Animal{
    public function getSex(){
        return $this->sex;
    }
}

class Man extends User{
    public $sex;
    use Animal;
}
$alex=new Man;
$alex->sex='male';
echo $alex->getSex();

$a=rand(10,20);
echo $a;