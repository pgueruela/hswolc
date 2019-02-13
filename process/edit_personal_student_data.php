<?php 
include '../includes/header.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
include '../includes/admin_sidebar.php';

$id = $_GET['id'];


$result = $conn->query("SELECT id, firstname, lastname, gender, patient_address, patient_number, birthdate, department, position, civil_status, blood_type FROM patient_pd_tbl WHERE id=$id");

$row = mysqli_fetch_assoc($result);


 if (isset($_POST['update_data'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['patient_address'];
	$gender = $_POST['gender'];
	$birthdate = $_POST['birthdate'];
	$patient_number = $_POST['patient_number'];
	$position = $_POST['position'];
	$department = $_POST['department'];
	$civil_status = $_POST['civil_status'];
	$blood_type = $_POST['blood_type'];
	
	$sql = "UPDATE patient_pd_tbl SET firstname = '$firstname', lastname = '$lastname', patient_address = '$address', gender = '$gender',birthdate = '$birthdate', patient_number = $patient_number, position = '$position', department = '$department', civil_status = '$civil_status', blood_type = '$blood_type' WHERE id=$id ";


	if ($conn->query($sql) === TRUE) {
			 echo "<script> alert('Stored successfully'); </script>";
			 header("Location: ../display/view_studentpatient.php");

	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			exit();
	} 

}else{?>
<div class="col-md-10">
		<form method="post">
				<div class="row">
					<div class="col-md-8">
						<h6>Update Personal Data for Patient</h6>
					</div>
				</div>
				<hr>
				<div class="form-group">
		 			<div class="row">
						<div class="col-md-8">
							<label for="firstname">Firstname</label>
			   				 <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter patient firstname" name="firstname" value="<?php echo $row['firstname']; ?>" required/>
						</div>
					</div>
		  		</div>
				<div class="form-group">
				 	<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Lastname</label>
				    		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient lastname" name="lastname" value="<?php echo $row['lastname']; ?>" required/>
						</div>
					</div>
				</div>
			  	<div class="form-group">
					<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Address</label>
					    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient address" name="patient_address" value="<?php echo $row['patient_address']; ?>" required/>
						</div>
					</div>
				</div>

				<fieldset class="form-group">
				    <div class="row">
				      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
				      <div class="col-sm-10">
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="gender" value="M" <?php if ($row['gender'] != "F" ) echo "checked"; ?> >
				          <label class="form-check-label" for="gridRadios1">
				            Male
				          </label>	
				        </div>
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="gender" value="F"  <?php if ($row['gender']== "F") echo "checked"; ?>>
				          <label class="form-check-label" for="gridRadios2">
				            Female
				          </label>
				        </div>
				      </div>
				    </div>
				  </fieldset>

				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Birthdate</label>
			    			<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="birthdate" value="<?php echo $row['birthdate']; ?>"  required/>
						</div>
					</div>
				</div>


				<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Telephone/Cellphone #</label>
				    		<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient telephone/cellphone number" value="<?php echo $row['patient_number']; ?>" name="patient_number" required/>
						</div>
				</div>
				<br>

				<fieldset class="form-group">
				    <div class="row">
				      <legend class="col-form-label col-sm-2 pt-0">Position</legend>
				      <div class="col-sm-10">
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="position" value="Student" <?php if ($row['position'] != "Employee" ) echo "checked"; ?>>
				          <label class="form-check-label" for="gridRadios1">
				            Student
				          </label>
				        </div>
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="position" <?php if ($row['position'] == "Employee" ) echo "checked"; ?>  value="Employee">
				          <label class="form-check-label" for="gridRadios2">
				            Employee
				          </label>
				        </div>
				      </div>
				    </div>
				</fieldset>

				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Department</label>
			    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient deparment" value="<?php echo $row['department']; ?>" name="department" required/>	
						</div>
					</div>
				</div>

				<div class="form-group">
		 			<div class="row">
						<div class="col-md-8">
						 	<label for="exampleFormControlSelect1">Civil Status</label>
						    <select class="form-control" id="exampleFormControlSelect1" name="civil_status">
						      <option>Married</option>
						      <option>Widowed</option>
						      <option>Separated</option>
						      <option>Divorced</option>
						      <option>Single</option>
						    </select>
						</div>
					</div>
		  		</div>

		  		<hr>

				<div class="form-group">
		 			<div class="row">
						<div class="col-md-8">
							 <label for="exampleFormControlSelect1">Blood Type</label>
							    <select class="form-control" id="exampleFormControlSelect1" name="blood_type">
							      <option>A</option>
							      <option>B</option>
							      <option>AB</option>
							      <option>O</option>
							    </select>
						</div>
					</div>
		  		</div>
				<div class="row">
		  			<div class="col-md-8">
		  				<button type="submit" class="btn btn-primary" name="update_data">Register</button>
		  			</div>
		  		</div>
			</form>
		</div>
<?php
}
?>