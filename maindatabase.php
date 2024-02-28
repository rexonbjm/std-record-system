<?php
    $server="localhost";
    $user="root";
    $password="";
    $connection=mysqli_connect($server, $user, $password);
    if(!$connection){
        die("database not connected");
    } 
    echo "database connected";
    $statement="CREATE DATABASE record";
    $stmt_run=mysqli_query($connection, $statement);
    if($stmt_run){
        echo "database created";
    }
    else{
        echo "database not created";
    }
