<?php
$connection = new PDO('mysql:host=localhost; dbname=ht23', 'root', "123123");

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
echo '<br>'.'<a href="/previous.phpl"><strong><font size="3" color="#006400">' .$button2. '</strong></font size="6"color="#006400"></a>' . '___________';
echo '<a href="/next.php"><strong><font size="3" color="#006400">' .$button3. '</strong></font size="6"color="#006400"></a>' .'<br>'.'<br>';
echo '<a href="/ht24.php"><strong><font size="3" color="#006400">' .$button1. '</strong></font size="6"color="#006400"></a>' . '________________';
echo '<a href="/last.php"><strong><font size="3" color="#006400">' .$button4. '</strong></font size="6"color="#006400"></a>' ;

