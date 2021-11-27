<?php

/*
В качестве практики, работы над static, напиши несколько классов. Для начала тебе понадобится
твой любой класс из прошлых заданий (User / Worker / Driver/ или любой другой собственный), с
описанием любого набора свойств.

Допустим, для примера это класс User, со свойствами имя и возраст.

Напиши второй класс, назови его Builder (строитель). Создай в нем метод, который будет
принимать в качестве аргументов имя и возраст, будет создавать нового пользователя, и
возвращать его.

Создай в своем "строителе" статическое свойство, которое будет хранить количество созданных
пользователей, и увеличивай каждый раз на единицу (привет инкремент!) в методе, который будет
создавать пользователя.

В результате у тебя должно быть два класса — User & Builder. В Builder у тебя будет метод,
 который создает пользователя, и увеличивает на +1 свое статическое свойство.

Выведи количество созданных пользователей, созданных через класс Builder
 */

class Builder {
    public $name;
    public $age;
    public static $data=[];

    public static function AddtoData($name, $age)
    {
        Builder::$data[] = $name, $age;
    }
    public static function getData(){
    return Builder::$data;
    }
}

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

