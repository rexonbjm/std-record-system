<?php
include 'connect.php';

if(isset($_POST['add_students'])){
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $grade = $_POST['grade'];

    if(empty($fname)){
        header('location: index.php?message=You need to fill in the first name!');
        exit; 
    }

    else{
      $query = "INSERT INTO students (first_name, last_name, grade) VALUES ('$fname', '$lname', '$grade')";
      $result= mysqli_query($connection, $query);

      if(!$result){
        die("Query failed" .mysqli_error($connection));
      }

      else{
        header('location:studentsinfo.php?insert_msg=Your data has been added successfully'); 
      }
    }
}


