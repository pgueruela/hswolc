<?php 
include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php'; ?>

<div class="container">
<?php 

$id = $_GET['id'];

$result = $conn->query("SELECT firstname, lastname, gender, patient_address, patient_number, birthdate, department, position, civil_status, blood_type FROM patient_pd_tbl WHERE id=$id");

	$row = mysqli_fetch_assoc($result);

 	?>
 	<div class="row">
 		<div class="col-md-3 side-panel">
 			<div class="card">
 				<div class="card-body">
			    <img src="../includes/assets/img/profile_pic.png" width="50" height="50">
			    <p style="text-align: center;"><?php echo $row['firstname'] . " " . $row['lastname']; ?></p>
			    <p style="text-align: center"><?php echo $row['patient_number']; ?></p>
			    <p style="text-align: center"><?php echo $row['patient_address']; ?></p>
			</div>

 			</div>
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
							<a class="nav-link" href="../view_patient_profile/vital_signs.php?id=<?php echo $id ?>"><i class="fas fa-stethoscope"></i> Vital Signs</a>
						</li>
						<li class="list-group-item">

							<a class="nav-link" href="../view_patient_profile/consultation.php?id=<?php echo $id ?>"><i class="fas fa-comment-medical"></i> Consultation</a>	
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
		$id = $_GET['id'];

		$result = $conn->query("SELECT blood_pressure, patient_height, patient_weight, patient_height, bmi, respiratory_rate, heart_rate, temperature FROM consultation_tbl WHERE patient_id=$id");

		$row = mysqli_fetch_assoc($result);

		 if (isset($_POST['update_data'])) {

			$blood_pressure = $_POST['blood_pressure'];
			$patient_height = $_POST['patient_height'];
			$patient_weight = $_POST['patient_weight'];
			$bmi = $_POST['bmi'];
			$respiratory_rate = $_POST['respiratory_rate'];
			$heart_rate = $_POST['heart_rate'];
			$temperature = $_POST['temperature'];
			
			$sql = "UPDATE consultation_tbl SET blood_pressure = '$blood_pressure', patient_height = '$patient_height', patient_weight = '$patient_weight', bmi = '$bmi', respiratory_rate = '$respiratory_rate', heart_rate = '$heart_rate', temperature = '$temperature' WHERE patient_id=$id ";


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
							<h6>Update Vital Sign of Patient</h6>
					</div>
				</div>
			<hr>
			<div class="form-group">
					 			<div class="row">
									<div class="col-md-8">
										<label for="firstname">Blood Pressure</label>
						   				 <input type="text" class="form-control" id="blood_pressure" aria-describedby="emailHelp" name="blood_pressure" value="<?php echo $row['blood_pressure']; ?>" required/>
									</div>
								</div>
					  		</div>
							<div class="form-group">
							 	<div class="row">
									<div class="col-md-8">
										<label for="exampleInputEmail1">Patient Height</label>
							    		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="patient_height" value="<?php echo $row['patient_height']; ?>" required/>
									</div>
								</div>
							</div>
						  	<div class="form-group">
								<div class="row">
									<div class="col-md-8">
										<label for="exampleInputEmail1">Patient Weight</label>
								    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="patient_weight" value="<?php echo $row['patient_weight']; ?>" required/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-md-8">
										<label for="exampleInputEmail1">BMI</label>
								    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bmi" value="<?php echo $row['bmi']; ?>" required/>
									</div>
								</div>
							</div>
							<div class="form-group">
						 		<div class="row">
									<div class="col-md-8">
										<label for="exampleInputEmail1">Respiratory Rate</label>
						    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['respiratory_rate']; ?>" name="respiratory_rate" required/>	
									</div>
								</div>
							</div>
							<div class="form-group">
						 		<div class="row">
									<div class="col-md-8">
										<label for="exampleInputEmail1">Heart Rate</label>
						    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['heart_rate']; ?>" name="heart_rate" required/>	
									</div>
								</div>
							</div>

							<div class="form-group">
						 		<div class="row">
									<div class="col-md-8">
										<label for="exampleInputEmail1">Temperature</label>
						    			<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp value="<?php echo $row['temperature']; ?>" name="temperature" required/>	
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
