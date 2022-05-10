<?php
abstract class User{
    public $name;
    protected $sex;
    public function __construct($v){
        return $this->name=$v;
    }
    abstract public function setSize();
}
class Man extends User{
    protected $sex='male';
    public function setSize(){
        //some mathematics
    }
}
class Woman extends User{
    protected $sex='female';
    public function setSize(){
        //some mathematics
    }
}

$user1= new Man ('oll');
$user2=new Woman ('kile');

var_dump($user2, $user1);
