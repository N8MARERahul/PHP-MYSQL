<?php

require "E:\applications/xampp\htdocs\Assignments\Question_2\db_con.php";


if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    $uname = validate($_POST['username']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: db_login.php?error=User Name is required");

        exit();
    } else if (empty($pass)) {

        header("Location: db_login.php?error=Password is required");

        exit();
    } else {

        $sql = "SELECT * FROM login WHERE username='$uname' AND password='$pass'";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] == $uname && $row['password'] == $pass) {
                
                header("Location: db_select.php");

                exit();
            } else {

                echo "Incorrect Username or Password.";

                exit();
            }
        } else {

            echo "Invalid Username or Password.";
            
            exit();
        }
    }
} else {

    echo "Something went Wrong";

    exit();
}
