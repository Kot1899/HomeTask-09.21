<?php
//namespace myRoma;
namespace mynamespace;
trait myName{
    public $name;
}

class students{
    use myName;
    public  $age;
    public  $sex='male';
}