<?php
class user{
    const ADULT = 18;
    const SEX_MALE='male';
    const SEX_FEMALE='female';

    public $age;
    public $sex;
}

$alex=new user;
$alex->sex= user::SEX_MALE;
$alex->age= user::ADULT;

echo $alex->age . $alex->sex;