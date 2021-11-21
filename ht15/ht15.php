<?php
/*

 Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст),
public методы setName, getName, setAge, getAge.
Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле
salary (зарплата), а также методы public getSalary и setSalary.
Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого
класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля
стипендия, курс, а также геттеры и сеттеры для них.
Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей
задачи. Этот метод должен вносить следующие private поля: водительский стаж, категория
вождения (A, B, C).
 */
class User{
    protected $name;
    protected $age;

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
