<?php 
include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php'; ?>


<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="accordion" id="patient_accordion">
			  <div class="card card-side-panel">
			    <div class="card-header card-header-side-panel" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
			          Patient
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#patient_accordion">
			      <div class="card-body">
			         <ul class="list-group list-group-flush">
				    	<li class="list-group-item">
				    		<a class="nav-link" href="add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
				    	</li>
						<li class="list-group-item">
							<a class="nav-link" href="view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
						</li>
			 		 </ul>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="accordion" id="reports_accordion" aria-expanded="false">
			  <div class="card">
			    <div class="card-header card-header-side-panel" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
			          Reports
			        </button>
			      </h5>
			    </div>

			    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#reports_accordion">
			      <div class="card-body">
			        <ul class="list-group list-group-flush">
				    	<li class="list-group-item"><a class="nav-link" href="../display/view_monthly_report.php">View Monthly Report</a>
				    	</li>
						<li class="list-group-item"><a class="nav-link" href="../display/view_daily_report.php">View Daily Report</a>
						</li>
						<li class="list-group-item"><a class="nav-link" href="../display/view_visits_report.php">View Visits Report</a>
						</li>
			  		</ul>
			      </div>
			    </div>
			  </div>
			</div>
 		</div>
		<?php
		$id = $_GET['id'];

		$result = $conn->query("SELECT * FROM patient_pd_tbl WHERE id=$id");

		$row = mysqli_fetch_assoc($result);

		 if (isset($_POST['update_data'])) {

			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$address = $_POST['patient_address'];
			$gender = $_POST['gender'];
			$patient_number = $_POST['patient_number'];
			$position = $_POST['position'];
			$department = $_POST['department'];
			$civil_status = $_POST['civil_status'];
			
			$sql = "UPDATE patient_pd_tbl SET firstname = '$firstname', lastname = '$lastname', patient_address = '$address', gender = '$gender', patient_number = $patient_number, position = '$position', department = '$department', civil_status = '$civil_status' WHERE id=$id ";


			if ($conn->query($sql) === TRUE) {
					 echo "<script> alert('Updated successfully'); </script>";
			} else {
			    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			} 

		}
?>
			<div class="col-md-9">
				<div class="card">
					<div class="card-body">
						<form method="post">
				<div class="row">
					<div class="col-md-8">
							<h6>Update Personal Data of Patient</h6>
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
							<div class="row">
					  			<div class="col-md-8">
					  				<button type="submit" class="btn btn-primary" name="update_data">Save Changes</button>
					  			</div>
					  		</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
