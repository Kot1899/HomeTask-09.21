<?php
class user{
    public $name;
    public $age;
    public $city;
}

class builder {
    public static $counter=0;
    public static function people($v_name, $v_age, $v_city){
        $new_human = new user($v_name, $v_age, $v_city);
        $new_human->name = $v_name;
        $new_human->age = $v_age;
        $new_human->city = $v_city;

        self::$counter++;
        return $new_human;
    }
    public static function get_counter(){
//        return builder::$counter;//первый вариант
        return self::$counter; // второй вариант
    }
}

$user1=builder::People('alex',10,'ny');
$user1=builder::People('oll',20,'ny');
$user1=builder::People('kile',30,'ny');
$user1=builder::People('loki',40,'ny');
$user1=builder::People('jo',50,'ny');

echo builder::get_counter();



