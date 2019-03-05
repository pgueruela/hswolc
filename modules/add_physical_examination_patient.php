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
						    		<input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient temperature number" name="visit_reason" value="Physical Examination" required/>
								</div>
						</div>

						<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Temperature</label>
						    		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient temperature number" name="temperature" required/>
								</div>
						</div>
						<div class="form-group">
				 			<div class="row">
								<div class="col-md-8">
									<label for="blood-pressure">Blood Pressure</label>
					   				 <input type="text" class="form-control" id="blood_pressure" aria-describedby="emailHelp" placeholder="Enter patient blood pressure" name="blood_pressure"  >
								</div>
							</div>
				  		</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Hearth Rate</label>
					    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient heart rate" name="heart_rate"  required/>	
								</div>
							</div>
						</div>

					  	<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Respiratory Rate</label>
							    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter respiratory rate" name="respiratory_rate" required/>
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
		  							<input type="text" class="form-control" placeholder="E.G.183" aria-label="height" aria-describedby="basic-addon1" name="patient_height" required/ >
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
		  							<input type="text" class="form-control" placeholder="E.G.63" aria-label="height" aria-describedby="basic-addon1" name="patient_weight" required/ >
									</div>
								</div>	
							</div>
						</div>

					  	<div class="form-group">
							<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">BMI</label>
							    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="bmi" required/>
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
						      <input type="text" class="form-control" id="inputPassword" name="os_no_glasses" required/>
						    </div>
						    <label for="inputPassword" class="col-sm-2 col-form-label">with Glasses</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword" name="os_with_glasses" required/>
						    </div>
						</div>
						<div class="form-group row">
						    <label for="inputPassword" class="col-sm-2 col-form-label">OD No Glasses</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword" name="od_no_glasses" required/>
						    </div>
						    <label for="inputPassword" class="col-sm-2 col-form-label">with Glasses</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword" name="od_with_glasses" required/>
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
						      <input type="text" class="form-control" id="inputPassword" name="ears_right"  required/ >
						    </div>
						    <label for="inputPassword" class="col-sm-2 col-form-label">Left</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control" id="inputPassword" name="ears_left" required/  >
						    </div>
						</div>
						<hr>
						<p>Choose N if Normal, NA if not assesed, A if with abnormally and indicate if any</p>

						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-6">	
										<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Skin</label>
										<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="input_one" name="skin"  value="Normal" checked/>
										 	  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="input_two" name="skin" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="input_three" name="skin" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="skin_abnormal"  id="input_four" disabled="disabled" required/>

											<script>
												$('#input_three').click(function()
													{
													  $('#input_four').removeAttr("disabled");
													});

													$('#input_one').click(function()
													{
													  $('#input_four').attr("disabled","disabled");
													});

													$('#input_two').click(function()
													{
													  $('#input_four').attr("disabled","disabled");
													});
											</script>
										
											
											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Nose</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="input_five" name="nose"  value="Normal"  id="input_disabled" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="input_six" name="nose" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="input_seven" name="nose" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="nose_abnormal"  id="input_eight" disabled="disabled" required/>

											<script>
												$('#input_seven').click(function()
													{
													  $('#input_eight').removeAttr("disabled");
													});

													$('#input_five').click(function()
													{
													  $('#input_eight').attr("disabled","disabled");
													});

													$('#input_six').click(function()
													{
													  $('#input_eight').attr("disabled","disabled");
													});
											</script>
										

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Mouth</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="9" name="mouth"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="10" name="mouth" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="11" name="mouth" value="
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="mouth_abnormal"  id="12" disabled="disabled" required/ >

											<script>
												$('#11').click(function()
													{
													  $('#12').removeAttr("disabled");
													});

													$('#9').click(function()
													{
													  $('#12').attr("disabled","disabled");
													});

													$('#10').click(function()
													{
													  $('#12').attr("disabled","disabled");
													});
											</script>


											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Pharynx</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="13" name="pharynx"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="14" name="pharynx" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="15" name="pharynx" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="pharynx_abnormal" id="16" disabled="disabled" required/>

											<script>
												$('#15').click(function()
													{
													  $('#16').removeAttr("disabled");
													});

													$('#9').click(function()
													{
													  $('#13').attr("disabled","disabled");
													});

													$('#14').click(function()
													{
													  $('#16').attr("disabled","disabled");
													});
											</script>

										
											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Tonsils</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="17" name="tonsils"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="18" name="tonsils" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="19" name="tonsils" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="tonsil_abnormal" id="20" disabled="disabled" required/>

											<script>
												$('#19').click(function()
													{
													  $('#20').removeAttr("disabled");
													});

													$('#17').click(function()
													{
													  $('#20').attr("disabled","disabled");
													});

													$('#18').click(function()
													{
													  $('#20').attr("disabled","disabled");
													});
											</script>

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Gums</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="21" name="gums"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="22" name="gums" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="23" name="gums" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="gums_abnormal" id="24" disabled="disabled" required/>

											<script>
												$('#23').click(function()
													{
													  $('#24').removeAttr("disabled");
													});

													$('#21').click(function()
													{
													  $('#24').attr("disabled","disabled");
													});

													$('#22').click(function()
													{
													  $('#24').attr("disabled","disabled");
													});
											</script>

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Lymph</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="25" name="lymph_nodes"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="26" name="lymph_nodes" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="27" name="lymph_nodes" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="lymph_nodes_abnormal" id="28" disabled="disabled" required/>

											<script>
												$('#27').click(function()
													{
													  $('#28').removeAttr("disabled");
													});

													$('#25').click(function()
													{
													  $('#28').attr("disabled","disabled");
													});

													$('#26').click(function()
													{
													  $('#28').attr("disabled","disabled");
													});
											</script>

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Neck</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="29" name="neck"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="30" name="neck" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="31" name="neck" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="neck_abnormal" id="32" disabled="disabled" required/>

												<script>
												$('#31').click(function()
													{
													  $('#32').removeAttr("disabled");
													});

													$('#29').click(function()
													{
													  $('#32').attr("disabled","disabled");
													});

													$('#30').click(function()
													{
													  $('#32').attr("disabled","disabled");
													});
											</script>


											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Chest</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="33" name="chest"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="34" name="chest" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="35" name="chest" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="chest_abnormal" id="36" disabled="disabled" required/>

											<script>
												$('#35').click(function()
													{
													  $('#36').removeAttr("disabled");
													});

													$('#33').click(function()
													{
													  $('#36').attr("disabled","disabled");
													});

													$('#34').click(function()
													{
													  $('#36').attr("disabled","disabled");
													});
											</script>
									</div>

										<div class="col-md-6">	
										<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Lungs</label>
										<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="37" name="lungs"  value="Normal"   checked/>
										 	  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="38" name="lungs" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="39" name="lungs" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="lungs_abnormal" id="40" disabled="disabled" required/>

											<script>
												$('#39').click(function()
													{
													  $('#40').removeAttr("disabled");
													});

													$('#37').click(function()
													{
													  $('#40').attr("disabled","disabled");
													});

													$('#38').click(function()
													{
													  $('#40').attr("disabled","disabled");
													});
											</script>

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Heart</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="41" name="heart"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="42" name="heart" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="43" name="heart" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="heart_abnormal" id="44" disabled="disabled" required/>

											<script>
												$('#43').click(function()
													{
													  $('#44').removeAttr("disabled");
													});

													$('#41').click(function()
													{
													  $('#44').attr("disabled","disabled");
													});

													$('#42').click(function()
													{
													  $('#44').attr("disabled","disabled");
													});
											</script>

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Abdomen</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="45" name="abdomen"  value="Normal" checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="46" name="abdomen" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="47" name="abdomen" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="abdomen_abnormal" id="48" disabled="disabled" required/>

											<script>
												$('#47').click(function()
													{
													  $('#48').removeAttr("disabled");
													});

													$('#45').click(function()
													{
													  $('#48').attr("disabled","disabled");
													});

													$('#46').click(function()
													{
													  $('#48').attr("disabled","disabled");
													});
											</script>

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Rectum</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="49" name="rectum"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="50" name="rectum" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="51" name="rectum" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="rectum_abnormal" id="52" disabled="disabled" required/ >

											<script>
												$('#51').click(function()
													{
													  $('#52').removeAttr("disabled");
													});

													$('#50').click(function()
													{
													  $('#52').attr("disabled","disabled");
													});

													$('#49').click(function()
													{
													  $('#52').attr("disabled","disabled");
													});
											</script>
										
											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Genitalia</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="53" name="genitalia"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="54" name="genitalia" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="55" name="genitalia" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="genitalia_abnormal" id="56" disabled="disabled" required/>


											<script>
												$('#55').click(function()
													{
													  $('#56').removeAttr("disabled");
													});

													$('#53').click(function()
													{
													  $('#56').attr("disabled","disabled");
													});

													$('#54').click(function()
													{
													  $('#56').attr("disabled","disabled");
													});
											</script>

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Spine</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="57" name="spine"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="58" name="spine" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="59" name="spine" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="spine_abnormal" id="60" disabled="disabled" required/>

											<script>
												$('#59').click(function()
													{
													  $('#60').removeAttr("disabled");
													});

													$('#57').click(function()
													{
													  $('#60').attr("disabled","disabled");
													});

													$('#58').click(function()
													{
													  $('#60').attr("disabled","disabled");
													});
											</script>

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Arms</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="61" name="arms"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="62" name="arms" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="63" name="arms" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="arms_abnormal"  id="64" disabled="disabled" required/>

											<script>
												$('#63').click(function()
													{
													  $('#64').removeAttr("disabled");
													});

													$('#61').click(function()
													{
													  $('#64').attr("disabled","disabled");
													});

													$('#62').click(function()
													{
													  $('#64').attr("disabled","disabled");
													});
											</script>

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Legs</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="65" name="legs"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="66" name="legs" value="Not Assesed"  >
											  <label class="form-check-label" for="inlineradio2">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="67" name="legs" value="Abnormal"  >
											  <label class="form-check-label" for="inlineradio3">A</label>
											</div>
											<input class="form control col-sm-4" type="" name="legs_abnormal"  id="68" disabled="disabled" required/>

											<script>
												$('#67').click(function()
													{
													  $('#68').removeAttr("disabled");
													});

													$('#65').click(function()
													{
													  $('#68').attr("disabled","disabled");
													});

													$('#66').click(function()
													{
													  $('#68').attr("disabled","disabled");
													});
											</script>

											<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Feet</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="69" name="feet"  value="Normal"   checked/>
											  <label class="form-check-label" for="inlineradio1">N</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" id="70" type="radio" name="feet" value="Not Assesed"  >
											  <label class="form-check-label" for="input_enabled">NA</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="71" name="feet" value="Abnormal"  >
											  <label class="form-check-label" for="input_disabled">A</label>
											</div>
											<input class="form control col-sm-4" type="text" name="feet_abnormal" id="72" disabled="disabled" required/>

												<script>
												$('#71').click(function()
													{
													  $('#72').removeAttr("disabled");
													});

													$('#69').click(function()
													{
													  $('#72').attr("disabled","disabled");
													});

													$('#70').click(function()
													{
													  $('#72').attr("disabled","disabled");
													});
											</script>
									</div>
								</div>
							</div>
						</div>	
						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Remarks</label>
									<textarea class="form form-control" rows="3" name="remarks" required/  ></textarea>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<div class="container">
								<div class="row">
									<div class="col-md-12">	
										<div>
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Essentially Normal Physical Examination Findings</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="essentially"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="essentially" value="No">
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
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">With Limitation of activities</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="limitation"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="limitation" value="No">
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
											<label for="colFormLabelSm" class="col-m-7 col-form-label col-form-label-m">Requires special attention</label>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio1" name="special_attention"  value="Yes" checked/>
											  <label class="form-check-label" for="inlineradio1">YES</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="inlineradio2" name="special_attention" value="No">
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
									<label for="exampleInputEmail1">Reccomendation</label>
									<textarea class="form form-control" rows="3" name="reccomendation"  required/ ></textarea>
								</div>
							</div>
						</div>

						<div class="form-group">
					 		<div class="row">
								<div class="col-md-8">
									<label for="exampleInputEmail1">Physician</label>
					    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="physician" required/ >	
								</div>
							</div>
						</div>

						<div class="row">
				  			<div class="col-md-8">
				  				<button type="submit" class="btn btn-primary" name="add_physical_examination" required/> Add</button>
				  			</div>
				  		</div>
					</form>
				</div>
			</div>
		</div>

	</div>

</div>






