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

    $newpass = Validate($_POST['newpassword']);

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

            $id = $row['id'];

            if ($row['username'] == $uname && $row['password'] == $pass) {
                
                $query = "UPDATE login  SET password = '$newpass' WHERE id = '$id'";

                $result_2 = mysqli_query($connection, $query);

                if ($result_2) {
                    echo "Succesfully Password Changed";
                    exit();
                } else {
                    echo "Unable to Change Password";
                }

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
