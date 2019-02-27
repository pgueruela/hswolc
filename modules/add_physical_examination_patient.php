<?php 
include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
include '../process/add_consultation_process.php';

if (!isset($_SESSION['id'])) {
	header("Location: login_account.php");
	exit();
}

?>
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
						<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Temperature</label>
						    		<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient temperature number" name="temperature" required/>
								</div>
						</div>
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
									<label for="exampleInputEmail1">Hearth Rate</label>
					    			<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient heart rate" name="heart_rate" required/>	
								</div>
							</div>
						</div>

					  	<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Respiratory Rate</label>
							    	<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter respiratory rate" name="respiratory_rate" required/>
								</div>
							</div>
						</div>
						<div class="form-group">
				 			<div class="row">
								<div class="col-md-8">
									<label for="blood-pressure">Height</label>
					   				 <input type="number" class="form-control" id="blood_pressure" aria-describedby="emailHelp" placeholder="Enter patient heigt" name="patient_height" required/>
								</div>
							</div>
				  		</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Weight</label>
					    			<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient weight" name="patient_weight" required/>	
								</div>
							</div>
						</div>

					  	<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">BMI</label>
							    	<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bmi" readonly />
								</div>
							</div>
						</div>
						<hr>

					  	<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Eyes</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
						    <label for="inputPassword" class="col-sm-2 col-form-label">OS No Glasses</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword">
						    </div>
						    <label for="inputPassword" class="col-sm-2 col-form-label">with Glasses</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="inputPassword" class="col-sm-2 col-form-label">OD No Glasses</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword">
						    </div>
						    <label for="inputPassword" class="col-sm-2 col-form-label">with Glasses</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword">
						    </div>
						</div>
						<hr>	
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Ears</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
						    <label for="inputPassword" class="col-sm-2 col-form-label">Right</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword">
						    </div>
						    <label for="inputPassword" class="col-sm-2 col-form-label">Left</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword">
						    </div>
						</div>
						<hr>
						<div class="form-group">
							<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1"  name="name" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="name" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="name" id="inlineCheckbox3" value="option3" >
  <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
</div>
						</div>
						<div class="row">
				  			<div class="col-md-8">
				  				<button type="submit" class="btn btn-primary" name="add_consultation_patient">Add Consultation</button>
				  			</div>
				  		</div>
					</form>
				</div>
			</div>
		</div>


