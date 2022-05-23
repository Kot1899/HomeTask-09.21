<?php
namespace romanenko;
trait myName{
    public $name;
}

class student{
    use myName;
    public  $age;
    public  $sex='male';
}