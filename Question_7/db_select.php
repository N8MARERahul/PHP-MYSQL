<?php

    include "db_connection.php";

    $querry = "SELECT * from student_info";

    $result = mysqli_query($connection, $querry);
?>
<table border ="2" cellspacing = "0" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Roll</th>
        <th>City</th>
        <th>Phone No.</th>
    </tr>
<?php
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
?>  
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["roll"]; ?></td>
        <td><?php echo $row["city"]; ?></td>
        <td><?php echo $row["phone_no"]; ?></td>
    </tr>     
<?php     
        } 
    } else {
        echo "The table is empty--";
    }

?>
</table>