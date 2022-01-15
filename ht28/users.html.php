<table border="'1">
    <?php foreach($list as $user): ?>
        <tr>
            <td><?php echo $user['id'] ?>     </td>
            <td><?php echo $user['name'] ?>   </td>
            <td><?php echo $user['age'] ?>    </td>
            <td><?php echo $user['sex'] ?>    </td>
        </tr>
    <?php endforeach ;  ?>
</table>


<?php for($i=1; $i<6; $i++):?>
    <a href="users.php?page=<?php echo $i ?>"> <?php echo $i ?> </a>

<?php endfor?>

<br/>
<a href="http://localhost:8080/less28.html">Main page</a>

<br/>
<button onclick="main_page('http://localhost:8080/less28.html')">Main page</button>





