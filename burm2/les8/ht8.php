<?php
 include 'function.php';
 $students =[
     [ 'name' => 'Alex', 'age' => 18],
     [ 'name' => 'Mike', 'age' => 12],
     [ 'name' => 'Oleg', 'age' => 11],
     [ 'name' => 'Paul', 'age' => 20],
     [ 'name' => 'Smith', 'age' => 38],
     [ 'name' => 'Tom1', 'age' => 50],
     [ 'name' => 'Tom2', 'age' => 51],
     [ 'name' => 'Tom3', 'age' => 52],
     [ 'name' => 'Tom4', 'age' => 53],
     [ 'name' => 'Tom5', 'age' => 54],
     [ 'name' => 'Tom5', 'age' => 55],
     [ 'name' => 'Tom6', 'age' => 56],
     [ 'name' => 'Tom7', 'age' => 68],
     [ 'name' => 'Tom8', 'age' => 12],
 ];
 $number=count($students);
 $number_array=$number-1;
 echo '<strong> All STUDENTS: </STRONG> <i> '.$number.'</i>' ;
 echo '<br>';

 $max_age= $students[0]['age'];
 for ($i=0; $i<=$number_array;$i++){
     if ($students[$i]['age']>$max_age){
         $max_age=$students[$i]['age'];
     }
 }

 echo '<strong> AGE OLDEST STUDENT: </STRONG>'.'<strong><i>'.$max_age.'</i></strong>';