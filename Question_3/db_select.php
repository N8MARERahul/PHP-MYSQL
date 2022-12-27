<?php

    include "E:\applications/xampp\htdocs\Assignments\Question_2\db_con.php";

    $querry = "SELECT * from student where d_o_b between '2000-01-01' and '2005-12-31'";

    $result = mysqli_query($connection, $querry);
?>
<table border ="2" cellspacing = "0" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Roll</th>
        <th>City</th>
        <th>Email</th>
        <th>D_O_B</th>
    </tr>
<?php
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
?>  
    <tr>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["roll"]; ?></td>
        <td><?php echo $row["city"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["d_o_b"]; ?></td>
    </tr>     
<?php     
        } 
    } else {
        echo "The table is empty--";
    }

?>
</table>