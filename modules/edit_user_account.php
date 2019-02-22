<?php 
include '../header-include.php';
include '../includes/header-img.php';
include '../includes/db.php';
?>

<!--  Admin Navigation Bar -->
 <nav class="navbar navbar-toggleable-md navbar-style">
    <div class="container">

      <a class="navbar-brand" href="#" style="color: #fff;">HSWOLCIS</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../process/logout_account_process.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
      </ul>
    </div>
  </nav>
<div class="container">
<?php
$id= $_SESSION['id'];

$result = $conn->query("SELECT firstname, lastname FROM admin_tbl WHERE id=$id");

$row = mysqli_fetch_assoc($result); ?>

<div class="col-md-9">

<form method="post">
	<h2>Update profile</h2>
	<hr>
	<div class="container">
		 <div class="form-group">
		 		<div class="row">
					<div class="col-md-8">
						<label for="exampleInputEmail1">Firstname</label>
		    <input type="text" class="form-control" placeholder="Enter email" name="firstname" value="<?php echo $row['firstname']; ?>" required/>
			
					</div>
		  		</div>
		 </div>
		  <div class="form-group">
		 		<div class="row">
					<div class="col-md-8">
						<label for="exampleInputEmail1">Lastname</label>
		    <input type="text" class="form-control" placeholder="Enter email" name="lastname" value="<?php echo $row['lastname']; ?>" required/>
					</div>
				</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-8">
		  		<button type="submit" class="btn btn-primary" name="save_changes">Save Changes</button>
		  	</div>
		  </div>
	</div>

</form>
<?php 
if (isset($_POST['save_changes'])) {
 	$firstname = $_POST['firstname'];
 	$lastname = $_POST['lastname'];

	$sql = "UPDATE admin_tbl SET firstname = '$firstname', lastname = '$lastname' WHERE id=$id ";
	echo "<script>
	alert('Updated Successfully!');
</script>";

	if ($conn->query($sql) === TRUE) {
			 header("Location: edit_user_account.php?id=$id");

	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			exit();
	} 
}
?>

