<?php

class man extends  User{

    public $sex='male';
    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }
}