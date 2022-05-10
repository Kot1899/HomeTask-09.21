<?php

class Men{
    protected $name;
    protected $age;
    protected $sex;
    public function __construct  ($name, $age=18, $sex='male' )
    {
        $this->name=$name;
        $this->age=$age;
        $this->sex=$sex;
    }
    public function getName(){
        return $this->name;
}
    public function getAge(){
        return $this->age;
    }
    public function getSex(){
        return $this->sex;
    }

    public function __destruct()
    {
   echo '_________destuct';
    }
    public function __toString()
    {
       return $this->age;
    }
}
    $user1= new Men('alex', 10, 'female');
echo $user1->getName().', '.$user1->getAge().', '.$user1->getSex()."\n";
echo $user1;