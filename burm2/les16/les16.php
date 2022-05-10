<?php

//simple example with function and variable

//function plus($a, $b){
//    static $c;
//    $c=$c+$a+$b;
//    return $c;
//}
//echo plus(10,200)."\n";
//echo plus(10,20);




// example with function and file_get_contents

//function getuser(){
//    static $users = null;
//    if(is_null($users)){
//        echo 'controoooool' . "\n";
//        $s= file_get_contents('user.txt');
//        $users=explode("\n", $s);
//        foreach ($users as $i=>$user) {
//            $users[$i]= explode(';', $user);
//        }
//    }
//    return $users;
//}
//
//$list1= getuser();
//$list2= getuser();
//$list3= getuser();
//$list4= getuser();
//$list5= getuser();
//echo count($list1). "\n";


// example with function and class (oop)

class User{
    public  $name;
    public  $age;
}


class user_list{
    public static $data=[];
}

$alex= new User();
$alex->name='Aleeeeeex';
$alex->age=10;

$oll= new User();
$oll->name='oll';
$oll->age=50;

$kile= new User();
$kile->name='kile';
$kile->age=80;

//статическое свойство позволяет обращаться к нему на чтение и запись НЕ создавая новые обьекты!
            // это по старому
            $list= new user_list();
            //$list->data[]=$alex;
            //$list->data[]=$oll;
            //$list->data[]=$kile;

            //это по новому (с примeн.слова static):
            user_list::$data[]=$alex;
            user_list::$data[]=$oll;
            user_list::$data[]=$kile;
            user_list::$data[]=$oll;

echo count(user_list::$data);

//var_dump(user_list::$data);





//static method GET and SET (when $data is protected)

class user_list1{
    protected static $data=[];

    public static function add_user_to_data($user){  //SETter
        user_list1::$data[]=$user;
    }

    public static function get_user(){  //GETter
        return user_list1::$data;
    }
}

$alex= new User();
$alex->name='Aleeeeeex';
$alex->age=10;

$oll= new User();
$oll->name='oll';
$oll->age=50;

$kile= new User();
$kile->name='kile';
$kile->age=80;

user_list1::add_user_to_data($alex);
user_list1::add_user_to_data($oll);
user_list1::add_user_to_data($kile);
echo "\n"."\n"."\n"."\n".'----------------'."\n"."\n";
echo count(user_list1::get_user());