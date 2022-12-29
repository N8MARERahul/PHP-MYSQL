<?php

    require "db_connection.php";

    $query = "DELETE FROM student_info WHERE id = 1";

    if ($result = mysqli_query($connection, $query)) {
        echo "Deletion Successful";
    } else {
        echo "Something Went Wrong.";
    }

?>