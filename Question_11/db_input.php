<?php

    require "db_connection.php";

    $ename = $_POST['ename'];
    $address = $_POST['address'];
    $phno = $_POST['phno'];
    $salary = $_POST['salary'];
    $category = $_POST['category'];
    $language = $_POST['lang'];
    $lang = "";
    foreach($language as $lang_1)
        $lang .= $lang_1 . ",";

    $query = "INSERT into employee(ename, address, phone_no, salary, category, language)
    values ('$ename', '$address', '$phno', '$salary', '$category', '$lang')";

    if (mysqli_query($conn, $query)) 
        echo "Data inserted Successfully";
    else 
        echo "Error In Insert";

?>