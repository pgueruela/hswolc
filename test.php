<?php

include 'includes/header.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hswolc";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  ?>

<form method="post" action="test.php">

  <input  type="hidden" name="status" value="1" checked>
  <input  type="submit" name="submit" value="submit" >

</form>

<?php 
if (isset($_POST['submit'])) {
  # code...
  $status = $_POST['status'];

  $sql = "INSERT INTO test (status)
  VALUES ($status)";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
 ?>