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
			          Dashboard
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#patient_accordion">
			      <div style="text-align: center; " class="card-body">
			         <ul class="list-group list-group-flush">
				    	
						<li class="list-group-item">
							<a class="nav-link" href="../modules/view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
						</li>

						<li class="list-group-item">
							<a class="nav-link" href="../modules/view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>

						<li class="list-group-item">
				    		<a class="nav-link" href="../modules/add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
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
		  							<input type="text" class="form-control" placeholder="(in Centimeter, e.g 175)" aria-label="height" aria-describedby="basic-addon1" name="patient_height" required/ >
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
		  							<input type="text" class="form-control" placeholder="(in Kilogram, e.g 85)" aria-label="height" aria-describedby="basic-addon1" name="patient_weight" required/ >
									</div>
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
							<div class="container">
								<div class="row">
									<div class="col-md-6">	
										<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">OS No GLasses</label>
										<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="input_one" name="os_no_glasses"  value="Yes" checked/>
										 	  <label class="form-check-label" for="inlineradio1">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="input_two" name="os_no_glasses" value="No"  >
											  <label class="form-check-label" for="inlineradio2">No</label>
											</div>
											<input class="form control col-sm-5" type="text" name="os_with_glasses" placeholder="with Glasses" id="input_four">
										</div>

										<div class="col-md-6">	
										<label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">OD No GLasses</label>
										<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="input_one" name="od_no_glasses"  value="Yes" checked/>
										 	  <label class="form-check-label" for="inlineradio1">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" id="input_two" name="od_no_glasses" value="No"  >
											  <label class="form-check-label" for="inlineradio2">No</label>
											</div>
											<input class="form control col-sm-5" type="text" name="od_with_glasses" placeholder="with Glasses" id="input_four">
										</div>
									</div>
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
											<input class="form control col-sm-4" type="text" name="skin_abnormal"  id="input_four">

								
										
											
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
											<input class="form control col-sm-4" type="" name="nose_abnormal"  id="input_eight">

											

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
											<input class="form control col-sm-4" type="text" name="mouth_abnormal"  id="12" >

											
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
											<input class="form control col-sm-4" type="text" name="pharynx_abnormal" id="16">

										

										
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
											<input class="form control col-sm-4" type="text" name="tonsil_abnormal" id="20">

									
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
											<input class="form control col-sm-4" type="text" name="gums_abnormal" id="24">

									

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
											<input class="form control col-sm-4" type="text" name="lymph_nodes_abnormal" id="28">

										
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
											<input class="form control col-sm-4" type="text" name="neck_abnormal" id="32">

											

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
											<input class="form control col-sm-4" type="text" name="chest_abnormal" id="36">

										
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
											<input class="form control col-sm-4" type="text" name="lungs_abnormal" id="40">


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
											<input class="form control col-sm-4" type="text" name="heart_abnormal" id="44">


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
											<input class="form control col-sm-4" type="text" name="abdomen_abnormal" id="48">

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
											<input class="form control col-sm-4" type="" name="rectum_abnormal" id="52" >

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
											<input class="form control col-sm-4" type="" name="genitalia_abnormal" id="56">


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
											<input class="form control col-sm-4" type="" name="spine_abnormal" id="60">

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
											<input class="form control col-sm-4" type="" name="arms_abnormal"  id="64">


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
											<input class="form control col-sm-4" type="" name="legs_abnormal"  id="68">


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
											<input class="form control col-sm-4" type="text" name="feet_abnormal" id="72">
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
									<div class="col-md-8">	
									 	<label for="exampleFormControlSelect1">Observation</label>
									    <select class="form-control" id="exampleFormControlSelect1" name="observation">
									      <option>Essentially Normal Physical Examination Findings</option>
									      <option>With Limitation of Activities</option>
									      <option>Requires Special Attention</option>
									    </select>
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
				  				<button type="submit" class="btn btn-success" name="add_physical_examination" required/> Add</button>
				  			</div>
				  		</div>
					</form>
				</div>
			</div>
		</div>

	</div>

</div>






