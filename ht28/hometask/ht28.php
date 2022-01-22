<?php
/*
Bозьми одно из прошлых заданий за основу, которое работало с авторизацией, формой нового юзера с паспортом, и выводила
 список уже существующих юзеров. Задача — добавить интерактивности.

Самое простое, что ты можешь сделать — удаление юзеров из таблицы, при помощи аякса (т.е. так чтобы запись удалялась
 без перезагрузки страницы).

Если в своем предыдущем решении ты использовал постраничную навигацию, то также можешь добавить переход между
 страницами при помощи аякса.

Усложнение, заслуженное джедая — форму добавления нового юзера, можно получить при помощи аякса, сохранить юзера
 при помощи аякса,  и получить в существующей таблице — при помощи аякса.

Таким образом, у тебя получится страница, по элементам которой ты можешь переходить, без перезагрузки страницы.
 */

// №1 подключится к БД
$connection = new PDO('mysql:host=localhost; dbname=ht23', 'root', "123123");

$name= $_POST['NAME'];
$age= $_POST['AGE'];
$sex= $_POST['sex'];
$number= $_POST['number'];
$serial= $_POST['serial'];
$date_of_issure= $_POST['date_of_issure'];

//№2 записать данные в табличкку юзеров
$sql = "insert into user (name, age, sex) values('$name','$age', '$sex')";
$stm =$connection->exec($sql);
$userId = $connection->lastInsertId();

//№3 записать данные в табличку паспорта
$stmt = $connection->prepare("INSERT INTO passport (number,serial,date_of_issure, user_id)
values (:number,:serial, :date_of_issure,:userId)");
$stmt->bindParam(':userId', $userId);
$stmt->bindParam(':number', $number);
$stmt->bindParam(':serial', $serial);
$stmt->bindParam(':date_of_issure', $date_of_issure);
$stmt->execute();

//№4 проверить наличие паспорта
/*
$sql=" select * from user ";
$stm= $connection->prepare($sql);
$stm->execute();
$list=$stm->fetchAll(PDO::FETCH_ASSOC);

for ($i=0; $i< count($list); $i++){
    $sql =  "Select * from  passport where user_id=:id";
    $stm = $connection->prepare($sql);
    $stm->bindValue('id', $list[$i]['id']);
    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);

    $list[$i]['passport']=$result;

}
echo "<pre>";
var_dump($list);
echo 'Ok';
*/

//№5 выбрать всех полозователей
$sgl_join="SELECT * FROM user LEFT JOIN passport ON user.id = passport.user_id LIMIT 5";

$stm= $connection->query($sgl_join);
$stm->execute();
$list=$stm->fetchAll(PDO::FETCH_ASSOC);

//№6 вывести пользователей
echo '<table border ="1">';

include 'allfunctions.php';
$first= first_str();
Echo $first;

foreach ($list as $v){

    echo '<tr>';
    echo '<td><strong><big><center>' . $v['id'] . '</center></big></strong></td>';
    echo '<td><center><font size="4" color="blue">' . $v['name'] . '</center></font size="4"
color="blue"></font></td>';
    echo '<td><strong><big><center>' . $v['age'] . '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $v['sex'] . '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $v['number'] . '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $v['serial'] . '</center></big></strong></td>';
    echo '<td><strong><big><center>' . $v['date_of_issure'] . '</center></big></strong></td>';
    echo '</tr>';
}
echo '</table>';

//№7 усложнение - навигация на страничке
$button1= "FIRST PAGE";
$button2= "PREVIOUS PAGE";
$button3= "NEXT PAGE";
$button4= "LAST PAGE";
echo '<br>'.'<a href="/previous.php"><strong><font size="3" color="#006400">' .$button2. '</strong></font size="6"color="#006400"></a>' . '___________';
echo '<a href="/next.php"><strong><font size="3" color="#006400">' .$button3. '</strong></font size="6"color="#006400"></a>' .'<br>'.'<br>';
echo '<a href="/fierst.php"><strong><font size="3" color="#006400">' .$button1. '</strong></font size="6"color="#006400"></a>' . '________________';
echo '<a href="/last.php"><strong><font size="3" color="#006400">' .$button4. '</strong></font size="6"color="#006400"></a>' ;














