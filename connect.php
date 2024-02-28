<?php
    $server="localhost";
    $user="root";
    $pass= "";
    $database= "record";

    $connection=mysqli_connect($server,$user,$pass,$database);
    if(!$connection){
        die("".mysqli_connect_error());
    }