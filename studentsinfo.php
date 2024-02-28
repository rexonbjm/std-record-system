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
   <div class="align">
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

<div class="container">
<?php include('connect.php') ?>

<div class="box1">
  <button class="add-students-btn" onclick="openPopup()">Add Students</button>
</div>

<table class="records-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $query = "SELECT * FROM students"; 
        
        $result = mysqli_query($connection , $query);

        if(!$result){ 
            die ("query failed" . mysqli_error($connection));
        } else {
            while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['grade']; ?></td>
            <td>
            <a href="edit.php?id=<?php echo $row['id']; ?>" class="edit-btn">Edit</a>
            <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete-btn">Delete</a>
            </td>
        </tr>
        <?php
            } 
        }
        ?>
    </tbody>
</table>

<?php

  if(isset($_GET['message'])){
    echo "<h6>" .$_GET['message']. "<h6>";
  }
?>

<?php

  if(isset($_GET['insert_msg'])){
    echo "<h6>" .$_GET['insert_msg']. "<h6>";
  }
?>

<div id="popup" class="popup">
  <div class="popup-content">
    <span class="close" onclick="closePopup()">&times;</span>
    
    <h2>Add Student</h2>
    <form action="add_student.php" method="post">
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" >
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="grade">Grade:</label>
            <input type="text" id="grade" name="grade" required > 
        </div>
        <input type="submit" class="submit-btn" name = "add_students" value = "ADD">
    </form>
  </div>
</div>

<?php include('footer.php') ?> 

<script>
  function openPopup() {
    document.getElementById("popup").style.display = "block";
  }

  function closePopup() {
    document.getElementById("popup").style.display = "none";
  }
</script>
</div>
</div>
</body>
</html>