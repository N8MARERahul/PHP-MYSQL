<?php

    include "db_con.php";

    $querry = "INSERT into student(name, roll, city, email, d_o_b) values 
    ('Rahul', '095', 'Domjur', 'abcd@email.com', '2002-09-14'),
    ('Romit', '222', 'Makardaha', 'klamn@email.com', '2002-02-21'),
    ('Purnendu', '099', 'Nolpur', 'asdf@email.com', '2002-01-01'),
    ('Kusal', '087', 'Domjur', 'lkjh@email.com', '2003-02-13'),
    ('Ranjana', '104', 'Santragachi', 'qwer@email.com', '2002-06-10')";
  
    if(mysqli_query($connection, $querry))
        echo "Data inserted Succecfully.";
    else 
        echo "Error in insert.";

?>