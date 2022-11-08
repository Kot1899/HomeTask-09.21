<?php
$player=[
  ['name'=>'kile', 'number'=>'21'],
    ['name'=>'teo', 'number'=>19],
    ['name'=>'calabria', 'number'=>2],
    ['name'=>'tomori', 'number'=>23],
];

for ($i=0; $i<4; $i++){
    $name=$player[$i]['name'];
    $num=$player[$i]['number'];
//    $pos=$player[$i]['pos'];
    printPlayer($name, $num);
    printPlayerTer($name, $num);
};
printPlayer('Kjer', 00, 'defender');
printheader();

//without ter
function printPlayer ($name, $number, $pos= 'n/a'){
    echo "its Milan players without tern"."\n";
    if ('n/a'==$pos){
        echo $name . '='. $number;
    }else{
        echo $name.'='.$number.' is '.$pos;
    }
    echo "\n";
}

// with tern
function printPlayerTer ($name, $number, $pos='n/a'){
    echo 'its Milan players with tern'."\n";
    echo $name . '=' .$number.('n/a'==$pos ? '' : 'is '.$pos);
    echo "\n"."\n"."\n";
}

function printheader(){
    echo '------------smile----------';
}

