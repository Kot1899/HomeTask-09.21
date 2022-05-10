<?php

class Men{
    protected $name;
    protected $age;
    protected $country;

    public function __construct($name, $age, $country){
        echo '_____________________________________constuct' . "\n";
        $this->name=$name;
        $this->age=$age;
        $this->country=$country;
    }

    public function __destruct(){
        echo '____________________________________destruct'."\n";
    }

    public function __toString()
    {
     return $this->country;
    }

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }

}
$user1=new Men ('kot',10,'ukraine');
echo 'my name is '.$user1->getName(). ' and I am ' . $user1->getAge(). ' years old. I am from '.$user1."\n";

$user2=$user1;
echo 'you from '. $user2. ' too';
echo "\n". 'done'."\n";