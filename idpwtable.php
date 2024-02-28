<?php
    require("connect.php");
    $stmt="CREATE TABLE idpw(
        username VARCHAR(20),
        password VARCHAR(20)
        )";
        $query=mysqli_query($connection, $stmt);
        if ($query) {
            echo"table created";
        }
        else {
            echo "table not created";
        }
        mysqli_close($connection);