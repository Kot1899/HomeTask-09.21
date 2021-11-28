<?php
/*
Возьми любое из прошлых заданий, которое работает с классами и объектами. Добавь туда методы
 конструктора, деструктора и __toString. Продемонстрируй их работу.

Я не ограничиваю полет твоей фантазии, достаточно любой демонстрации, чтобы я увидел работу
 всех трех магических методов.

*/

class User{
    protected $name;
    protected $age;

    public function __construct($name)
    {
        $this->setName($name);
    }

    public function setName($v_name){
        $this->name = $v_name;
    }

    public function getName(){
        return $this->name;
    }

    public function setAge($v_age){
        $this->age = $v_age;
    }

    public function getAge(){
        return $this->age;
    }
}
/*
class Worker extends User{
    private $salary;

    public function setSalary($v_salary){
        $this->salary = $v_salary;
    }

    public function getSalary(){
        return $this->salary;
    }
}

$ivan= new Worker();
$ivan->setName('Ivan');
$ivan->setSalary(1000);

$vasya= new Worker();
$vasya->setName('Vasya');
$vasya->setSalary(2000);

$allman=[$ivan,$vasya];
$sum=0;
foreach ($allman as $v){
    $sum+=$v->getSalary();
}
//var_dump($sum);
echo 'Hello Akex, general salary of all man: '.$sum. "\n";

class Student extends User{
    private $grant;
    private $course;

    public function setGrant($v_grant){
        $this->grant = $v_grant;
    }

    public function getCourse(){
        return $this->course;
    }
}
class Driver extends Worker {
    private $driver_experience;
    private $category;

    public function setDriver_experience($v_Dr_ex){
        $this->driver_experience = $v_Dr_ex;
    }

    public function getCategory(){
        return $this->category;
    }
}
*/

/*  first method without CONSTRUCT
$user1 = new User();
    $user1-> setName('Vitali');
    $user1->setAge(27);

echo 'test echo: ' . $user1->getName() .' '. $user1->getAge(). "\n";
$user1-> setName('Alex');
echo 'test echo: ' . $user1->getName() .' '. $user1->getAge();
*/

/*second method with CONSTRUCT
$user1 = new User('vITALI');
echo 'TEST_ECHO: ' . $user1->getName() .','. $user1->getAge(). "\n";
*/
