<?php

/*
Возьми любое из прошлых заданий, которое работает с классами и объектами. Добавь туда методы
 конструктора, деструктора и __toString. Продемонстрируй их работу.

Я не ограничиваю полет твоей фантазии, достаточно любой демонстрации, чтобы я увидел работу
 всех трех магических методов.

*/

$x = "\n";

class User
{
    public $name;
    protected $age;
    public $car = 'maybe';

    public function __construct($name, $age, $car)
    {
        echo '___constr' . "\n";
        $this->setName($name);
        $this->setAge($age);
        return $this->car;
    }

    public function __destruct()
    {
        echo '==destuct' . "\n";
    }

    public function __toString()
    {
        // 3 options of magic method __toString:
//       return $this->name;
        return $this->getName() . ' has ' . $this->getCar();
//       return '__toString';
    }

    public function setName($v_name)
    {
        $this->name = $v_name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($v_age)
    {
        $this->age = $v_age;
    }

    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function setCar($v_car)
    {
        $this->car = $v_car;
    }

    public function getCar()
    {
        return $this->car;
    }
}

/*  first method without CONSTRUCT
$user1 = new User();
    $user1-> setName('Vitali');
    $user1->setAge(27);

echo 'les19 - autoload echo: ' . $user1->getName() .' '. $user1->getAge(). "\n";
$user1-> setName('Alex');
echo 'les19 - autoload echo: ' . $user1->getName() .' '. $user1->getAge();
*/

//second method with CONSTRUCT


$user1 = new User('vITALI', 27, 'nissan');
echo 'TEST_ECHO: ' . $user1->getName() . ',' . $user1->getAge() . ', car: ' . $user1->getCar() . "\n";
$exemple = $user1 . $x;
echo 'magic method __toString: ' . $exemple;

$user2 = new User('Alex', 10, 'tesla');
echo 'Alex car: ' . $user2->car . $x;
echo 'magic method toString: ' . $user2 . $x;

$user3 = $user2;
echo 'user3 name: ' . $user3 . $x;
