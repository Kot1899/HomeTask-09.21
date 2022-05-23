<?php
/*
Тебе необходимо создать две таблицы — пользователь, паспорт пользователя.

Пользователь — имя, возраст, пол
Паспорт — номер, серия, дата выдача. На одного пользователя может быть один паспорт.

Создать форму, которая будет создавать пользователя сразу вместе с паспортом. Т.е. если поля
паспорта заполнены, то создать такую запись в базе, в соответствующей таблице.

Вывести всех пользователей в виде таблицы, с колонками — имя, возраст, пол, наличие паспорта
 (да/нет).

Усложнение — сделать постраничную навигацию пользователей. На одну страницу может быть показано
 5 пользователей.У списка должна быть возможность перейти на следующую, предыдущую, первую и
последнюю страницы.
 */
include ('function.php');

//connection to DB
$dsn='mysql:host=localhost; dbname=mycat';
$username='root';
$password=123123;
$connection= new PDO ($dsn,$username,$password);

//getting of data post method
$name=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$number=$_POST['number'];
$serial=$_POST['serial'];
$dateIssure=$_POST['date_of_issure'];

//write users data to my table
$sql="insert into mycat.user (name, age, sex) values  ('$name', '$age', '$sex')";
$stm= $connection->query($sql);
$stm->execute();
$userId=$connection->lastInsertId();

//write passport data to my table
if(empty($number)){
    $sql4="insert into mycat.user (passport) values  ('no')";
    $stm= $connection->exec($sql4);
}else{
    $stm=$connection->prepare("insert into mycat.passport (number, serial, date_issure, user_id)
 values (:number1, :serial, :date_issure, :user_id)");
    $stm->bindParam(":number1" , $number );
    $stm->bindParam(":serial" , $serial );
    $stm->bindParam(":date_issure" , $dateIssure );
    $stm->bindParam(":user_id" , $userId );
    $stm->execute();
    $sql4="insert into mycat.user (passport) values  ('yes')";
    $stm= $connection->exec($sql4);
}
//now we check, does have user passport?
/*
$sql2='select * from mycat.user';
$stm=$connection->prepare($sql2);
$stm->execute();
$list=$stm->fetchAll(2);

for ($i=0; $i<count($list); $i++) {
    $sql3 = 'select * from passport where user_id = :id';
    $stm3 = $connection->prepare($sql3);
    $stm3->bindValue('id', $list[$i]['id']);
    $stm3->execute();
    $result = $stm3->fetchAll(2);
            if ($result = null) {
                $sql4="insert into mycat.user (passport) values  ('no')";
                $stm= $connection->query($sql4);
                $stm->execute();
            } else {
                $sql4="insert into mycat.user (passport) values  ('yes')";
                $stm= $connection->query($sql4);
                $stm->execute();
            }
//    $list[$i]['passport']=$result;
}
echo '<pre>';
var_dump($result);
*/

// select users who have passport
$sql_join='select * from user left join passport on user.id=passport.user_id limit 5';
$stm=$connection->query($sql_join);
$stm->execute();
$list=$stm->fetchAll(PDO::FETCH_ASSOC);

// view all users in html-table
echo '<table border=1>';
$firstString=first_str();
echo  $firstString;
//$secondString= second_str($list);
//echo $secondString;
foreach ($list as $v){
    echo '<tr>';
    echo '<td><strong><big><center>' . $v['id'] . '</center></big></strong></td>';
    echo '<td><center><font size="4" color="blue">' . $v['name'] . '</center></font size="4"
color="blue"></font></td>';
    echo '<td><strong><big><center>' . $v['age'] . '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $v['sex'] . '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $v['number'] . '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $v['serial'] . '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $v['date_issure'] . '</center></big></strong></td>';
    echo '</tr>';
}
echo '</table>';
//echo '<pre>';
//var_dump($list);

echo 'ooooooooook'. '<br/>';



//№7 усложнение - навигация на страничке
$button1= "FIRST PAGE";
//$button2= "PREVIOUS PAGE";
$button3= "NEXT PAGE";
$button4= "LAST PAGE";
//echo '<br>'.'<a href="/previous.phpl"><strong><font size="3" color="#006400">' .$button2. '</strong></font size="6"color="#006400"></a>' . '___________';
echo '<a href="/next.php"><strong><font size="3" color="#006400">' .$button3. '</strong></font size="6"color="#006400"></a>' .'<br>'.'<br>';
echo '<a href="/first.php"><strong><font size="3" color="#006400">' .$button1. '</strong></font size="6"color="#006400"></a>' . '________________';
echo '<a href="/last.php"><strong><font size="3" color="#006400">' .$button4. '</strong></font size="6"color="#006400"></a>' ;

