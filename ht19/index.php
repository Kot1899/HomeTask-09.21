<?php

/*Возьми за основу любой из твоих классов Пользователь (User), состоящего как минимум из таких свойств как имя и возраст.
Создай несколько юзеров, с разным именем и возрастом (можешь к примеру использовать функцию rand(), для
 генерирования случайного возраста). Все эти юзеры должны быть помещены в один массив.
На этом этапе у тебя должен быть массив пользователей с разным именем и возрастом.
Далее, реализуй новый класс, к примеру назови его Control (не наследованный от юзера, это новый самодостаточный класс),
 задачей которого будет — фильтровать и/или сортировать пользователей.
Создай там (в классе Control) метод, который будет фильтровать пользователей, и возвращать только тех, у которых возраст
 больше 18 лет. Метод может быть статическим (на твое усмотрение, но я буду рад если он будет именно статическим),
 назови его к примеру filter. Его задача принимать массив пользователей, а возвращать массив пользователей,
которым больше 18 лет.
Для фильтрации, внутри метода filter, тебе понадобится функция php — array_filter. Она может использовать у себя замыкание.
Поскольку, у тебя два разных класса, то следует сделать их в разных файлах, и реализовать автозагрузку классов, для
этого тебе подойдет функция — spl_autoload_register.
*/
/*
spl_autoload_register(function ($v){ include $v.'.php';});
*/
spl_autoload_register(function ($v){ include $v. '.php';});
//include 'Romanenko\User.php';
$alex= new \Romanenko\User;
$alex->name='Alex';
$alex->age=rand(32,39);
$alex->city='KH';

$vlada= new \Romanenko\User;
$vlada->name='Vlada';
$vlada->age=11;
$vlada->city='NY';

$vitali= new \Romanenko\User;
$vitali->name='Vitali';
$vitali->age=rand(27,29);
$vitali->city='LW';


$users=[$alex,$vlada,$vitali];
//spl_autoload_register(function ($v){ include $v.'.php';});
//var_dump($users);
echo $alex->city;

//foreach ($users as $v){
//    if ($v->age > $adult) {
//        $users_new[]=$v;
//
//    }
//}
$total= new \Romanenko\Control;
//$total-> Filter ($users);

var_dump($total-> Filter ($users));