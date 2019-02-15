<?php 
include '../includes/header.php';

include '../includes/admin_sidebar.php';


$id= $_GET['id'];

$result = $conn->query("SELECT firstname, lastname FROM admin_tbl WHERE id=$id");

$row = mysqli_fetch_assoc($result);


if (isset($_POST['save_changes'])) {
 	$firstname = $_POST['firstname'];
 	$lastname = $_POST['lastname'];

	$sql = "UPDATE admin_tbl SET firstname = '$firstname', lastname = '$lastname' WHERE id=$id ";


	if ($conn->query($sql) === TRUE) {
			 echo "<script> alert('Updated successfully!'); </script>";
			 header("Location: edit_user_account.php?id=$id");

	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			exit();
	} 

}else{
 ?>
<div class="col-md-9">
<form method="post" action="">
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
}

?>