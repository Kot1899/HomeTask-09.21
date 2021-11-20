<?php
/*
 Тебе необходимо написать свой первый класс, который будет описывать структуру пользователя
(можешь взять любую другую структуру из жизни — еду, товар, животное), у которого будет
следующий набор свойств — имя, фамилия, возраст, пол.
Создай как минимум два объекта от этого класса с разными значениями, и выведи на экран
(можно через var_dump, можно через echo отдельные поля)
Результат задания можешь приложить файлом, или ссылку на репозиторий с данными заданием.
 */

class Over {
    public $list;
}
class people_of_lesson{
    public $name = 'no name';
    public $firstname;
    public $age=10;
    public $sex='male';
}

$user1= new people_of_lesson();
$user1->name='Vitali';
$user1->firstname='Romanenko';
$user1->age=27;


$user2= new people_of_lesson();
$user2->name='Alex';
$user2->firstname='Burmistrov';

echo 'FIRST TASK'. "\n";
$array= [$user1, $user2];
foreach ($array as $v){
    echo 'name:' . $v->name. ', age:' . $v->age . "\n";
}
echo "\n" . 'SECOND TASK'. "\n";

$user3= new people_of_lesson();
$user3->name='Vlada';
$user3->firstname='Marchenko';
$user3->sex='female';

$userALL= new Over();
$userALL->list= [$user1, $user2, $user3];
foreach ($userALL->list as $i=>$v){
    echo $i. ' name:' . $v->name.  ', firstname:' . $v->firstname. ', age:' . $v->age . ', sex:' . $v->sex ."\n";
}