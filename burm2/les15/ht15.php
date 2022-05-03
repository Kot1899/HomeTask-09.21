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
class user{
    protected  $name;
    protected $age;
    public function Set_name($v_name){
    $this->name=$v_name;
    }
    public function Set_age($v_age){
        $this->age=$v_age;
    }
    public function Get_name(){
        return $this->name;
    }
    public function Get_age(){
        return $this->age;
    }
}
class worker extends user{
 private $salary;
 public function Get_salary(){
     return $this->salary;
 }
 public function Set_salary($v_salary){
     $this->salary=$v_salary;
 }
}

$ivan= new worker();
$ivan->Set_name('ivan');
$ivan->Set_age(25);
$ivan->Set_salary(1000);

$vasya= new worker();
$vasya->Set_name('vasya');
$vasya->Set_age(26);
$vasya->Set_salary(2000);

$sum=$ivan->Get_salary()+$vasya->Get_salary();
echo $sum;

class student extends user{
    private $grand;
    private $course;
    public function Get_grand(){
        return $this->grand;
    }
    public function Set_grand($v_grand){
        $this->grand=$v_grand;
    }
    public function Get_course(){
        return $this->course;
    }
    public function Set_course($v_course){
        $this->course=$v_course;
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