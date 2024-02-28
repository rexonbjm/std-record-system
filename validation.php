<html>
<body>
<?php
  session_start();

  $servername = "localhost";
  $user = "root";
  $pass = "";
  $dbname = "record";
  $conn = new mysqli($servername,$user,$pass,$dbname);
  if ($conn) {
    /*echo "connecton successful";*/

  }else{
    echo "no connection";
  }
   
  if(isset($_POST['login'])){
  $uname = $_POST['username'];
  $pass = $_POST['password'];
  
  $q = " select * from idpw where username = '$uname' && password = '$pass' ";
 
  $result = mysqli_query($conn, $q); 
    if ($result->num_rows > 0) {
      // User authenticated successfully
      echo "Login successful!";
      header("location:hoooooo.php");
  } else {
      // Authentication failed
      echo '<script type=text/javascript> alert("Invalid username or password");</script>';
  }
}
  $conn->close();
  ?>
 <script>
    // Redirect to index page after 0.5 seconds
    setTimeout(function() {
      window.location.href = "loginpage.html";
    }, 500); // Adjust the delay as needed
  </script>

</body>
</html>