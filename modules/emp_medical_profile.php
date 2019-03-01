<?php 
include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
include '../process/add_physical_examination_process.php';

if (!isset($_SESSION['id'])) {
	header("Location: login_account.php");
	exit();
}

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM patient_pd_tbl WHERE id = $id");

$row = mysqli_fetch_assoc($result);

if ($row['gender'] == 'M') {?>
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
				    		<a class="nav-link" href="../modules/add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
				    	</li>
						<li class="list-group-item">
							<a class="nav-link" href="../modules/view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../modules/view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
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

		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
						<div class="card card-body-margins">
				<div class="card-body card-body-header">
					<h5>Medical Profile</h5>
				</div>
			</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<form method="post">
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
									<label for="blood-pressure">Height</label>
									<div class="input-group mb-3">
			  						<div class="input-group-prepend">
			    					<span class="input-group-text" id="basic-addon1">cm</span>
			  						</div>
		  							<input type="number" class="form-control" placeholder="E.G.183" aria-label="height" aria-describedby="basic-addon1" name="patient_height" required/>
									</div>
								</div>	
							</div>
				  		</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="blood-pressure">Weight</label>
									<div class="input-group mb-3">
			  						<div class="input-group-prepend">
			    					<span class="input-group-text" id="basic-addon1">kg</span>
			  						</div>
		  							<input type="number" class="form-control" placeholder="E.G.63" aria-label="height" aria-describedby="basic-addon1" name="patient_weight" required/>
									</div>
								</div>	
							</div>
						</div>

					  	<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">BMI</label>
							    	<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bmi">
								</div>
							</div>
						</div>
						<hr>	
						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Medical History</label>
									<textarea class="form form-control" rows="3" name="medical_history" required></textarea>
								</div>
							</div>
						</div>						
						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Past Illness</label>
									<textarea class="form form-control" rows="3" name="past_illness" required></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Hospitalization History (Please state the year and reason why you are hospitalized)</label>
									<textarea class="form form-control" rows="3" name="hospitalization_history" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Are you currently taking any drug/s</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="currently_taking_drugs"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="currently_taking_drugs" value="No">
											  <label class="form-check-label" for="inlineradio2">NO</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">If yes, state the name of the drug/s</label>
									<textarea class="form form-control" rows="3" name="drug_name" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Why are you taking the drug/s?</label>
									<textarea class="form form-control" rows="3" name="why_taking_drugs" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Do you have any allergies to drug/s</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="allergies_to_drugs"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="allergies_to_drugs" value="None">
											  <label class="form-check-label" for="inlineradio2">NONE</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">If yes, state the name of the drug/s</label>
									<textarea class="form form-control" rows="3" name="name_drug" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Do you have your own/family Doctor?</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="family_doctor"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="family_doctor" value="None">
											  <label class="form-check-label" for="inlineradio2">NONE</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="firstname">Name of Doctor</label>
						   			<input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter patient firstname" name="doctor_name" required/>
								</div>
							</div>
				  		</div>

				  		<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="firstname">Address</label>
						   			<input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter doctors address" name="doctor_add" required/>
								</div>
							</div>
				  		</div>

				  		<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="firstname">Contact Number</label>
						   			<input type="number" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter doctors address" name="doctor_num" required/>
								</div>
							</div>
				  		</div>

				  		<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Would you like to be a blood donor?</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="blood_donor"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="blood_donor" value="No">
											  <label class="form-check-label" for="inlineradio2">NO</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<div class="row">
				  			<div class="col-md-8">
				  				<button type="submit" class="btn btn-primary" name="add_physical_examination">Add</button>
				  			</div>
				  		</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
	

<?php  
}else{ ?>
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
				    		<a class="nav-link" href="../modules/add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
				    	</li>
						<li class="list-group-item">
							<a class="nav-link" href="../modules/view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../modules/view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
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

		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
						<div class="card card-body-margins">
				<div class="card-body card-body-header">
					<h5>Annual Physical Examination</h5>
				</div>
			</div>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<form method="post">
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
									<label for="blood-pressure">Height</label>
									<div class="input-group mb-3">
			  						<div class="input-group-prepend">
			    					<span class="input-group-text" id="basic-addon1">cm</span>
			  						</div>
		  							<input type="number" class="form-control" placeholder="E.G.183" aria-label="height" aria-describedby="basic-addon1" name="patient_height" required/>
									</div>
								</div>	
							</div>
				  		</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="blood-pressure">Weight</label>
									<div class="input-group mb-3">
			  						<div class="input-group-prepend">
			    					<span class="input-group-text" id="basic-addon1">kg</span>
			  						</div>
		  							<input type="number" class="form-control" placeholder="E.G.63" aria-label="height" aria-describedby="basic-addon1" name="patient_weight" required/>
									</div>
								</div>	
							</div>
						</div>

					  	<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">BMI</label>
							    	<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bmi">
								</div>
							</div>
						</div>
						<hr>	
						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Medical History</label>
									<textarea class="form form-control" rows="3" name="medical_history" required></textarea>
								</div>
							</div>
						</div>						
						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Past Illness</label>
									<textarea class="form form-control" rows="3" name="past_illness" required></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Hospitalization History (Please state the year and reason why you are hospitalized)</label>
									<textarea class="form form-control" rows="3" name="hospitalization_history" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Are you currently taking any drug/s</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="currently_taking_drugs"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="currently_taking_drugs" value="No">
											  <label class="form-check-label" for="inlineradio2">NO</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">If yes, state the name of the drug/s</label>
									<textarea class="form form-control" rows="3" name="drug_name" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Why are you taking the drug/s?</label>
									<textarea class="form form-control" rows="3" name="why_taking_drugs" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Do you have any allergies to drug/s</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="allergies_to_drugs"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="allergies_to_drugs" value="None">
											  <label class="form-check-label" for="inlineradio2">NONE</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">If yes, state the name of the drug/s</label>
									<textarea class="form form-control" rows="3" name="name_drug" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Do you have your own/family Doctor?</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="family_doctor"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="family_doctor" value="None">
											  <label class="form-check-label" for="inlineradio2">NONE</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="firstname">Name of Doctor</label>
						   			<input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter patient firstname" name="doctor_name" required/>
								</div>
							</div>
				  		</div>

				  		<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="firstname">Address</label>
						   			<input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter doctors address" name="doctor_add" required/>
								</div>
							</div>
				  		</div>

				  		<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="firstname">Contact Number</label>
						   			<input type="number" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter doctors address" name="doctor_num" required/>
								</div>
							</div>
				  		</div>

				  		<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Would you like to be a blood donor?</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="blood_donor"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="blood_donor" value="No">
											  <label class="form-check-label" for="inlineradio2">NO</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
						<hr>

						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Do you practice self-breast exam?</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="self-breast_exam"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="self-breast_exam" value="None">
											  <label class="form-check-label" for="inlineradio2">NO</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">How often?</label>
									<textarea class="form form-control" rows="3" name="how_often" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Have you had mammography</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="mammography"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="mammography" value="No">
											  <label class="form-check-label" for="inlineradio2">NO</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>


						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Are you pregnant?</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="pregnant"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="pregnant" value="No">
											  <label class="form-check-label" for="inlineradio2">NO</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">If yes how many month?</label>
									<textarea class="form form-control" rows="3" name="month_pregnant" required></textarea>
								</div>
							</div>
						</div>

						
						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">If no are you using any contraceptive/s? <label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="contraceptives"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="contraceptives" value="No">
											  <label class="form-check-label" for="inlineradio2">NO</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>


						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">What method do you use?</label>
									<textarea class="form form-control" rows="3" name="method" required></textarea>
								</div>
							</div>
						</div>

						<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Number of pregnancies?</label>
						    		<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient temperature number" name="number_pregnancies" required/>
								</div>
						</div>


						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Have you had any aborted pregnancies?</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="aborted_pregnancies"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="aborted_pregnancies" value="No">
											  <label class="form-check-label" for="inlineradio2">NO</label>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Reason/s</label>
									<textarea class="form form-control" rows="3" name="reasons" required></textarea>
								</div>
							</div>
						</div>

						<div class="row">
				  			<div class="col-md-8">
				  				<button type="submit" class="btn btn-primary" name="add_physical_examination">Add</button>
				  			</div>
				  		</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
}
?>




