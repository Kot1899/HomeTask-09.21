<?php
/*
Тебе необходимо создать две таблицы — пользователь, паспорт пользователя.

Пользователь — имя, возраст, пол
Паспорт — номер, серия, дата выдача. На одного пользователя может быть один паспорт.

Создать форму, которая будет создавать пользователя сразу вместе с паспортом. Т.е. если поля паспорта заполнены,
 то создать такую запись в базе, в соответствующей таблице.

Вывести всех пользователей в виде таблицы, с колонками — имя, возраст, пол, наличие паспорта (да/нет).

Усложнение — сделать постраничную навигацию пользователей. На одну страницу может быть показано 5 пользователей.
У списка должна быть возможность перейти на следующую, предыдущую, первую и последнюю страницы.
 */
/*
echo '<h2><i>Hello, Alex,  it is hometask #23</i></h2>';

echo '<pre>';

$people = file_get_contents('users23.txt');

$array_people = explode("\n", $people);
$users=[];

foreach ($array_people as $v) {
    $usersFinish = explode(';', $v);
    $users[] = $usersFinish;
}

$name= $_POST['NAME'];
$age= $_POST['AGE'];
$sex= $_POST['SEX'];

$users[]=[$name,$age,$sex];

$usersALL=[];
foreach ($users as $v){
    $usersFinish1= implode(';', $v);
    $usersALL[] = $usersFinish1;
}
$array_people1 = implode("\n", $usersALL);

file_put_contents('users23.txt',$array_people1);
echo "U amazing) let's doing ht24";

*/

$connection = new PDO('mysql:host=localhost; dbname=ht23', 'root', "123123");

$name= $_POST['NAME'];
$age= $_POST['AGE'];
$sex= $_POST['sex'];
$number= $_POST['number'];
$serial= $_POST['serial'];
$date_of_issure= $_POST['date_of_issure'];

$sql = "insert into user (name, age, sex) values('$name','$age', '$sex')";
$stm =$connection->exec($sql);

//Echo 'ok';

$stmt = $connection->prepare("INSERT INTO user");
$stmt->execute();
$userId = $connection->lastInsertId();

$stmt = $connection->prepare("INSERT INTO passport (user_id) (:userId)");
$stmt->bindParam(':userId', $userId);

$stmt->execute();
























