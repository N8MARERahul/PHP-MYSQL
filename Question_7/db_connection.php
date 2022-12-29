<?php
  
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "assignment";

    $connection = mysqli_connect($server_name, $user_name, $password, $db_name);

    if(!$connection)
        die("Connection Failed.." . mysqli_connect_errno());

?>