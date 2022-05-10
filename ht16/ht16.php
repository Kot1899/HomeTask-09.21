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
class User{
    public $name;
    public $age;
    public $city;
}

class Builder {
    public static $counter=0;

    public static function AddtoPeople($name, $age, $city)
    {
       $a= new User($name, $age, $city);
       $a->name=$name;
       $a->age=$age;
       $a->city=$city;

        builder::$counter++;

       return $a;

    }
public static function getCounter(){
       return builder::$counter;
}
  }
  $user1=Builder::AddtoPeople('Vitali', '27','KH');
$user2=Builder::AddtoPeople('Alex', '10','KH');
$user3=Builder::AddtoPeople('Vlada', '9','KH');

//echo '<pre>';
//var_dump($user1, $user2, $user3);
echo 'number of users.txt: ' . builder::$counter . "\n";
echo 'number of users.txt (function CIUNT): ' . count(builder::getCounter()) . "\n";








