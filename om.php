<?php include('header.php') ?>
<?php include('connect.php') ?>

<div class="box1">
  <h2>Student Records</h2>
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