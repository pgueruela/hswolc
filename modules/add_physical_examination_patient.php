<?php 
include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
include '../process/add_physical_examination_process.php';

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
						    		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient temperature number" name="temperature" required>
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
									<label for="exampleInputEmail1">Eyes</label>
								</div>
							</div>
						</div>
						<div class="form-group row">
						    <label for="inputPassword" class="col-sm-2 col-form-label">OS No Glasses</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword" name="os_no_glasses">
						    </div>
						    <label for="inputPassword" class="col-sm-2 col-form-label">with Glasses</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword" name="os_with_glasses">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="inputPassword" class="col-sm-2 col-form-label">OD No Glasses</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword" name="od_no_glasses">
						    </div>
						    <label for="inputPassword" class="col-sm-2 col-form-label">with Glasses</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword" name="od_with_glasses">
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
						      <input type="text" class="form-control" id="inputPassword" name="ears_right" required>
						    </div>
						    <label for="inputPassword" class="col-sm-2 col-form-label">Left</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword" name="ears_left" required>
						    </div>
						</div>
						<hr>
						<p>Choose N if Normal, NA if not assesed, A if with abnormally and indicate with any</p>

						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-6">	
										<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Skin</label>
										<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="skin"  value="N" checked/>
										 	  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="skin" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="skin" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="skin_abnormal">

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Nose</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="nose"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="nose" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="nose" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="nose_abnormal">

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Mouth</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="mouth"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="mouth" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="mouth" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="mouth_abnormal">


											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Pharynx</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="pharynx"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="pharynx" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="pharynx" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="pharynx_abnormal">
										
											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Tonsils</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="tonsils"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="tonsils" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="tonsils" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="tonsil_abnormal">

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Gums</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="gums"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="gums" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="gums" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="gums_abnormal">

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Lymph</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="lymph_nodes"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="lymph_nodes" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="lymph_nodes" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="lymph_nodes_abnormal">

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Neck</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="neck"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="neck" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="neck" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="neck_abnormal">


											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Chest</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="chest"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="chest" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="chest" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="chest_abnormal">
									</div>

										<div class="col-md-6">	
										<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Lungs</label>
										<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="lungs"  value="N" checked/>
										 	  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="lungs" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="lungs" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="lungs_abnormal">

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Heart</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="heart"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="heart" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="heart" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="heart_abnormal">

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Abdomen</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="abdomen"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="abdomen" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="abdomen" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="abdomen_abnormal">


											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Rectum</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="rectum"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="rectum" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="rectum" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="nose_abnormal">
										
											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Genitalia</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="genitalia"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="genitalia" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="genitalia" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="genitalia_abnormal">

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Spine</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="spine"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="spine" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="spine" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="spine_abnormal">

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Arms</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="arms"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="arms" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="arms" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="arms_abnormal">

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Legs</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="legs"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="legs" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio3" name="legs" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="legs_abnormal">

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Feet</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="feet"  value="N" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="feet" value="NA">
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="feetinlineradio3" name="feet" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="feet_abnormal">
									</div>
								</div>
							</div>
						</div>	
						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Remarks</label>
									<textarea class="form form-control" rows="3" name="remarks" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<div class="form-check">
									  <input class="form-check-input" type="checkbox" name="essentially" value="yes">
									  <label class="form-check-label" for="exampleRadios1">
									    Essentially Normal Physical Examination Findings
									  </label>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<div class="form-check">
									<input class="form-check-input" type="checkbox" name="limitation" value="yes">
									<label class="form-check-label" for="exampleRadios2">
									    With Limitation of activities
									 </label>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<div class="form-check">
									  <input class="form-check-input" type="checkbox" name="special_attention" value="yes">
									  <label class="form-check-label" for="exampleRadios3">
									    Requires special attention
									  </label>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Reccomendation</label>
									<textarea class="form form-control" rows="3" name="reccomendation" required></textarea>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Physician</label>
					    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="physician" required/>	
								</div>
							</div>
						</div>

						<div class="row">
				  			<div class="col-md-8">
				  				<button type="submit" class="btn btn-primary" name="add_physical_examination">Add Consultation</button>
				  			</div>
				  		</div>
					</form>
				</div>
			</div>
		</div>


