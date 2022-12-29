<?php

    require "db_connection.php";

    $query = "INSERT into student_info (name, roll, city, phone_no) values ('William', 998, 'New York', 1111100000)";

    if ($result = mysqli_query($connection, $query)) {
        echo "Insertion Successful";
    } else {
        echo "Something Went Wrong.";
    }

?>