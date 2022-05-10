<?php


class woman extends User
{

    public $sex = 'female';

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}