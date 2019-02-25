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
