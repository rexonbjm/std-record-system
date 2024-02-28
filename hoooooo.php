<?php
include 'connect.php';

if(isset($_POST['register'])){
    $uname = $_POST['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="dash.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <div class="welcome">
        <img src="logo.png" alt="nss">
      </div>
      <div class="side-panel">
        <div class="profile">
          <h2><?php 
        $query = "SELECT * FROM idpw"; 
        
        $result = mysqli_query($connection , $query);

        if(!$result){ 
            die ("query failed" . mysqli_error($connection));
        } else {
            $row = mysqli_fetch_assoc($result);
             echo $row['username']; 
        }
        ?>
        </h2>
          <p>@<?php 
        $query = "SELECT * FROM idpw"; 
        
        $result = mysqli_query($connection , $query);

        if(!$result){ 
            die ("query failed" . mysqli_error($connection));
        } else {
            $row = mysqli_fetch_assoc($result);
             echo $row['username']; 
        }
        ?> </p>
         </div>
            <nav>
              <ul>
                <li><a href="hoooooo.php">Home</a></li>
                <li><a href="studentsinfo.php">Students Info</a></li>
                
              </ul>
            </nav>
          <div class="options">
            <a href="#">Settings</a>
            <a href="loginpage.html">Log Out</a>
          </div>
</div>
</body>
</html>