<?php
    require("connect.php");
    $stmt="CREATE TABLE students(
        id INT PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(50),
        last_name VARCHAR(50),
        grade INT(11)
        )";
        $query=mysqli_query($connection, $stmt);
        if ($query) {
            echo"table created";
        }
        else {
            echo "table not created";
        }
        mysqli_close($connection);