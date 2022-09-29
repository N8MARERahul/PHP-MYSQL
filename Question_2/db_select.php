<?php

    include "db_con.php";

    $querry = "SELECT * from student";

    $result = mysqli_query($connection, $querry);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            echo "Name = " . $row["name"] . " Roll = " . $row["roll"] . " City = " . $row["city"] . " Email = " . $row["email"] . " D_o_B = " . $row["d_o_b"] . "<br>";
        } 
    } else {
        echo "The table is empty--";
    }

?>