<?php

    require "E:\applications/xampp\htdocs\Assignments\Question_2\db_con.php";

    $querry = "SELECT * from login";

    $result = mysqli_query($connection, $querry);
?>
<table border ="2" cellspacing = "0" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>User Name</th>
        <th>Password</th>
    </tr>
<?php
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
?>  
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["username"]; ?></td>
        <td><?php echo $row["password"]; ?></td>
    </tr>     
<?php     
        } 
    } else {
        echo "The table is empty--";
    }

?>
</table>