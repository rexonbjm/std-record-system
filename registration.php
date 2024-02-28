<?php
include 'connect.php';

if(isset($_POST['register'])){
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    if(empty($uname)){
        echo '<script type=text/javascript> alert("You need to fill in the username!");</script>' ;
    }

    else{
      $query = "INSERT INTO idpw (username, password) VALUES ('$uname', '$pass')";
      $result= mysqli_query($connection, $query);

      if(!$result){
        die("Query failed" .mysqli_error($connection));
      }

      else{
        echo '<script type=text/javascript> alert("Successfully registered!");</script>';
        echo'<script>
        // Redirect to index page after 3 seconds
        setTimeout(function() {
          window.location.href = "loginpage.html";
        }, 1000); // Adjust the delay as needed
      </script>';
      }
    }
}

