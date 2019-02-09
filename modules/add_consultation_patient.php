<?php 
include '../includes/header.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
include '../includes/admin_sidebar.php';
?>
		<div class="col-md-10">
				
			<form method="post">
				<div class="row">
					<div class="col-md-8">
						<h4>Consultation Form</h4>
					</div>
				</div>
				<hr>
				<div class="form-group">
		 			<div class="row">
						<div class="col-md-8">
							<label for="blood-pressure">Blood Pressure</label>
			   				 <input type="text" class="form-control" id="blood_pressure" aria-describedby="emailHelp" placeholder="Enter patient blood pressure" name="blood_pressure" required/>
						</div>
					</div>
		  		</div>

		  		<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Height</label>
			    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient height" name="patient_height" required/>	
						</div>
					</div>
				</div>

				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Weight</label>
			    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient weight" name="patient_weight" required/>	
						</div>
					</div>
				</div>

				<div class="form-group">
				 	<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">BMI</label>
				    		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="bmi" name="bmi" required/>
						</div>
					</div>
				</div>
			  	<div class="form-group">
					<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Respiratory Rate</label>
					    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient address" name="respiratory_rate" required/>
						</div>
					</div>
				</div>

				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Hearth Rate</label>
			    			<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="heart_rate" required/>	
						</div>
					</div>
				</div>

				<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Temperature</label>
				    		<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient telephone/cellphone number" name="temperature" required/>
						</div>
				</div>
				<hr>

				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Medical History</label>
							<textarea class="form form-control" rows="3" name="medical_history"></textarea>
						</div>
					</div>
				</div><div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Past Illness</label>
							<textarea class="form form-control" rows="3" name="medical_history"></textarea>
						</div>
					</div>
				</div><div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Hospitalization History</label>
							<textarea class="form form-control" rows="3" name="medical_history"></textarea>
						</div>
					</div>
				</div><div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Medicines</label>
							<textarea class="form form-control" rows="3" name="medical_history"></textarea>
						</div>
					</div>
				</div><div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Allergies</label>
							<textarea class="form form-control" rows="3" name="medical_history"></textarea>
						</div>
					</div>
				</div><div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Diagnosis</label>
							<textarea class="form form-control" rows="3" name="medical_history"></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Doctor/Nurse who checkup: </label>
			    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient weight" name="nurse_doctor" required/>	
						</div>
					</div>
				</div>

				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Date Checkup</label>
			    			<input type="date" class="form-control" id="exampleInputEmail1" value="<?php echo date("Y-m-d"); ?>" aria-describedby="emailHelp" name="date_checkup" readonly />	
						</div>
					</div>
				</div>

				<div class="row">
		  			<div class="col-md-8">
		  				<button type="submit" class="btn btn-primary" name="add_patient">Add Consultation</button>
		  		</div>
			</form>
		</div>
