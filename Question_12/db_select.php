<?php

    require "E:\applications/xampp\htdocs\Assignments\Question_11\db_connection.php";

    $field = $_POST['field'];

    $query = "SELECT * from employee ORDER BY $field";
?>
    <table border = '2' align="center" cellspacing = "5" cellpadding="15" style="font-size: 20px;">
        <tr>
            <th>ID</th>
            <th>Ename</th>
            <th>Address</th>
            <th>Phone No</th>
            <th>Salary</th>
            <th>Category</th>
            <th>Language</th>
        </tr>
<?php
    if ($result = mysqli_query($conn, $query)) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['ename'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['phone_no'] ?></td>
                <td><?php echo $row['salary'] ?></td>
                <td><?php echo $row['category'] ?></td>
                <td><?php echo $row['language'] ?></td>
            </tr>
<?php
            }
        } else {
            echo "Table is Empty !!";
        }
    } else {
        echo "Error";
    }

?>
</table>