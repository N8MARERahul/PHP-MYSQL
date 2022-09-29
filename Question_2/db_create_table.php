<?php

    include_once "db_con.php";

    $querry = "CREATE TABLE Student (
        name varchar(30) NOT NULL,
        roll int NOT NULL,
        city varchar(20),
        email varchar(30),
        d_o_b date 
        )";
    if(mysqli_query($connection, $querry))
        echo "Table successfully created.";
    else 
        echo "Error creating table: " . mysqli_errno($connection);
    
    
    mysqli_close($connection);

?>