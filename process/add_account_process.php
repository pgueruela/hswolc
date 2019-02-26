<?php 
include 'includes/db.php';


// initializing variables
$firstname = "";
$lastname ="";
$username ="";
$errors = array(); 


// REGISTER USER 
if (isset($_POST['register'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  $user_check_query = "SELECT * FROM admin_tbl WHERE username='$username'LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "*Username already exists");
    }

  }

  if ($password != $confirm_password) {
	array_push($errors, "*The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$hash_pass = password_hash($password, PASSWORD_DEFAULT);
  	
  	$query = "INSERT INTO admin_tbl (firstname, lastname, usertype, username, password) 
  			  VALUES('$firstname', '$lastname', '$usertype', '$username', '$hash_pass')";
  	mysqli_query($conn, $query);
    echo "<script>alert('Successfully registered!');</script>";
  }
}

?>