</style>
<?php 
include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php'; ?>


<div class="container">
<?php 

$id = $_GET['id'];

$result1 = $conn->query("SELECT * FROM patient_pd_tbl WHERE id=$id");

	$row1 = mysqli_fetch_assoc($result1); ?>

 	<div class="row">

	<?php 
	if ($row1['position'] == 'Employee') { ?>

		<div class="col-md-3 side-panel">
			<div class="accordion" id="patient_accordion" aria-expanded="true">
			  <div class="card card-side-panel">
			    <div class="card-header card-header-side-panel" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          Patient Informations
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#patient_accordion">
			      <div class="card-body">
			         <ul class="list-group list-group-flush">
				    	<li class="list-group-item">
				    		<a class="nav-link" href="../modules/sidebar_view_patient_profile.php?id=<?php echo $id ?>"><i class="far fa-user"></i> Personal Data</a>
				    	</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/consultation.php?id=<?php echo $id ?>"><i class="fas fa-stethoscope"></i> Consultation Records</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/annual_physical_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i> Physical Records</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/medical_profile_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i>Medical Profile</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/medical_laboratories.php?id=<?php echo $id ?>"><i class="fas fa-vials"></i> Medical Laboratories</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/medical_certificate.php?id=<?php echo $id ?>"><i class="fas fa-certificate"></i> Medical Certificate</a>	
						</li>
			 		 </ul>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	<?php
	}else{ ?>
		<div class="col-md-3 side-panel">
			<div class="accordion" id="patient_accordion" aria-expanded="true">
			  <div class="card card-side-panel">
			    <div class="card-header card-header-side-panel" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          Patient Informations
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#patient_accordion">
			      <div class="card-body">
			         <ul class="list-group list-group-flush">
				    	<li class="list-group-item">
				    		<a class="nav-link" href="../modules/sidebar_view_patient_profile.php?id=<?php echo $id ?>"><i class="far fa-user"></i> Personal Data</a>
				    	</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/consultation.php?id=<?php echo $id ?>"><i class="fas fa-stethoscope"></i> Consultation Records</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/annual_physical_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i> Physical Records</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/medical_laboratories.php?id=<?php echo $id ?>"><i class="fas fa-vials"></i> Medical Laboratories</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/medical_certificate.php?id=<?php echo $id ?>"><i class="fas fa-certificate"></i> Medical Certificate</a>	
						</li>
			 		 </ul>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	<?php		
	}
 	?>
		<?php
		$id = $_GET['id'];

		$result = $conn->query("SELECT * FROM patient_pd_tbl WHERE id=$id");

		$row = mysqli_fetch_assoc($result);

		 if (isset($_POST['update_data'])) {
		 	$status = $_POST['status'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$address = $_POST['patient_address'];

			$dateOfBirth = $_POST['birthdate'];
			$today = date("Y-m-d");
			$diff = date_diff(date_create($dateOfBirth), date_create($today));
			$age = $diff->format('%y');

			$gender = $_POST['gender'];
			$patient_number = $_POST['patient_number'];
			$contact_person = $_POST['contact_person'];
			$person_contact_emergency_number = $_POST['person_contact_emergency_number'];
			$position = $_POST['position'];
			$department = $_POST['department'];
			$civil_status = $_POST['civil_status'];
			$blood_type = $_POST['blood_type'];
			
			$sql = "UPDATE patient_pd_tbl SET status= '$status', firstname = '$firstname', lastname = '$lastname', patient_address = '$address', age=$age, gender = '$gender', patient_number = $patient_number, position = '$position', department = '$department', civil_status = '$civil_status', contact_person = '$contact_person', person_contact_emergency_number = $person_contact_emergency_number, blood_type = '$blood_type' WHERE id=$id ";


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
							<h6><i class="fas fa-edit"></i> Update Personal Data</h6>
					</div>
				</div>
			<hr>
			<div class="form-group">

							<fieldset class="form-group">
							    <div class="row">
							      <legend class="col-form-label col-sm-2 pt-0">Status</legend>
							      <div class="col-sm-10">
							        <div class="form-check">
							          <input class="form-check-input" type="radio" name="status" value="Active" <?php if ($row['status'] != "Inactive" ) echo "checked"; ?> >
							          <label class="form-check-label" for="gridRadios1">
							            Active
							          </label>	
							        </div>
							        <div class="form-check">
							          <input class="form-check-input" type="radio" name="status" value="Inactive"  <?php if ($row['status']== "Inactive") echo "checked"; ?>>
							          <label class="form-check-label" for="gridRadios2">
							            Inactive
							          </label>
							        </div>
							      </div>
							    </div>
							  </fieldset>
<hr>
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

							<div class="form-group">
						 		<div class="row">
									<div class="col-md-8">
										<label for="exampleInputEmail1">Birthdate</label>
						    			<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="birthdate" value="<?php echo $row['birthdate']; ?>" >	
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

							<div class="form-group">
									<div class="row">
										<div class="col-md-8">
											<label for="exampleInputEmail1">Contact person in case of emergency</label>
									    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter contact persons name" name="contact_person" value="<?php echo $row['contact_person']; ?>" required/>
										</div>
									</div>
							</div>
							
							<div class="row">
								<div class="col-md-8">
								<label for="exampleInputEmail1">Contact Number</label>
									<div class="input-group mb-3">
				  						<div class="input-group-prepend">
				    					<span class="input-group-text" id="basic-addon1">+63</span>
				  						</div>
			  							<input type="number" class="form-control" placeholder="Contact persons emergency number" aria-label="Username" aria-describedby="basic-addon1" name="person_contact_emergency_number" value="<?php echo $row['person_contact_emergency_number']; ?>" required/>
									</div>
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
									      <option><?php echo $row['civil_status']; ?></option>
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
										      <option><?php echo $row['blood_type']; ?></option>
										      <option>A</option>
										      <option>B</option>
										      <option>AB</option>
										      <option>O</option>
										      <option>Unknown</option>
										    </select>
									</div>
								</div>
					  		</div>

							<div class="row">
					  			<div class="col-md-8">
					  				<button type="submit" class="btn btn-success" name="update_data">Save Changes</button>
					  			</div>
					  		</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
