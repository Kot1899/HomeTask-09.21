<?php
namespace Romanenko;
trait Naming{
    public $name;
}
class User{
    use Naming;
    public $age;
    public $city;
}