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
    public function setName;
    public function getName;
    public function setAge;
    public function getAge;
}