<?php

    include "E:\applications/xampp\htdocs\Assignments\Question_2\db_con.php";

    $query = "INSERT into student(name, roll, city, email, d_o_b) 
    values('Morn', '171', 'Japan', 'morn@email.com', '1990-01-01')";

    if(mysqli_query($connection, $query))
        echo "Data inserted successfully";
    else
        echo "Error in insert";

?>