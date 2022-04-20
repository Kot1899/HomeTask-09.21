<?php

$users = [
    ['name'=> 'Alex', 'age' => 10],
    ['name'=> 'Vlada', 'age' => 20],
    ['name'=> 'Kot', 'age' => 30],
];

for ($i=0; $i<3; $i++) {
    $name= $users[$i]['name'];
    $age= $users[$i]['age'];
    printUser($name, $age);
    printUserTer($name, $age);

};
printUser('Mike', 12, 'male');
printheader();


// ,без тернарника
function printUser($name, $age, $sex = 'n/a')
{
    echo 'its without ternarnic: ';

    if ('n/a' == $sex) {
        echo $name . '=' . $age;
    } else{
        echo $name . '=' . $age.', '. $sex;
    }
    echo "\n";
};

// с тернарником
function printUserTer($name, $age, $sex = 'n/a')
{
    echo 'its ternarnic: ';
    echo $name . '=' . $age. ('n/a'== $sex ? '': ', '. $sex);
//    if ('n/a' == $sex) {
//        echo $name . '=' . $age;
//    } else{
//        echo $name . '=' . $age.', '. $sex;
//    }
    echo "\n";
};

function printheader() {
    echo '===*****==';
}