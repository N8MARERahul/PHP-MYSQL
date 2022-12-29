<?php

    require "db_connection.php";

    $query = "UPDATE student_info SET name = 'Steve' WHERE id = 2";

    if ($result = mysqli_query($connection, $query)) {
        echo "Update Successful";
    } else {
        echo "Something Went Wrong.";
    }

?>