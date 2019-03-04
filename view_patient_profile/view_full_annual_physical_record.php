<?php 

include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
?>
 <div class="container">
 	<?php 

 	$id = $_GET['id'];	

 	$result = $conn->query("SELECT * FROM physical_examination_tbl WHERE id=$id");

	$row = mysqli_fetch_assoc($result);

 	?>
 	<div class="row">
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
				    		<a class="nav-link" href="sidebar_view_patient_profile.php?id=<?php echo $id ?>"><i class="far fa-user"></i> Personal Data</a>
				    	</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/consultation.php?id=<?php echo $id ?>"><i class="fas fa-stethoscope"></i> Consultation Records</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/annual_physical_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i> Annual Physical Records</a>	
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

		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-body-margins">
						<div class="card-body card-body-header">
							<div class="row">
								<div class="col-md-6">
									<h4>Physical Annual Record</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
			 	<div class="card-body">
 					<!-- VS -->
 					<div class="row">
 						<div class="col-md-4">
 							<p>Temperature: <b><?php echo $row['temperature']; ?></b> </p>
 						</div>
 						<div class="col-md-4">
 							<p>Blood Pressure: <b><?php echo $row['blood_pressure']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p>Heart Rate: <b><?php echo $row['heart_rate']; ?></b></p>
 						</div>
 					</div>

 					<!-- Measure -->
 					<div class="row">
 						<div class="col-md-4">
 							<p>Respiratory Rate: <b><?php echo $row['respiratory_rate']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p>Height: <b><?php echo $row['patient_height']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p>Weight: <b><?php echo $row['patient_height']; ?></b></p>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-4">
 							<p>BMI: <b><?php echo $row['bmi']; ?></b></p>
 						</div>
 					</div>
 					<hr>
 					<p>Eyes</p>
 					<div class="row">
 						<div class="col-md-4">
 							<p>OS No Glasses: <b><?php echo $row['os_no_glasses']; ?></b></p>
 						</div>

 						<div class="col-md-4">
 							<p>OS with Glasses: <b><?php echo $row['os_with_glasses']; ?></b></p>
 						</div>
 					</div>

 					 <div class="row">
 						<div class="col-md-4">
 							<p>OD No Glasses: <b><?php echo $row['os_no_glasses']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p>OD with Glasses: <b><?php echo $row['os_with_glasses']; ?></b></p>
 						</div>
 					</div>
 					 <hr>
 					<p>Ears</p>
 					<div class="row">
 						<div class="col-md-4">
 							<p>Right: <b><?php echo $row['ears_right']; ?></b></p>
 						</div>

 						<div class="col-md-4">
 							<p>Left: <b><?php echo $row['ears_left']; ?></b></p>
 						</div>
 					</div>
 					<hr>

 					<div class="row">
 						<div class="col-md-2">
 							<p>Skin: <b><?php echo $row['skin']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div>
 						<div class="col-md-2">
 							<p>Nose: <b><?php echo $row['nose']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div><div class="col-md-2">
 							<p>Pharynx: <b><?php echo $row['pharynx']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div>
 						<div class="col-md-2">
 							<p>Tonsils: <b><?php echo $row['tonsils']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div><div class="col-md-2">
 							<p>Gums: <b><?php echo $row['gums']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div>
 						<div class="col-md-2">
 							<p>Lymph Nodes: <b><?php echo $row['lymph_nodes']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div><div class="col-md-2">
 							<p>Neck: <b><?php echo $row['neck']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div>
 						<div class="col-md-2">
 							<p>Chest: <b><?php echo $row['chest']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div><div class="col-md-2">
 							<p>Lungs: <b><?php echo $row['lungs']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div>
 						<div class="col-md-2">
 							<p>Heart: <b><?php echo $row['heart']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div><div class="col-md-2">
 							<p>Abdomen: <b><?php echo $row['abdomen']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div>
 						<div class="col-md-2">
 							<p>Rectum: <b><?php echo $row['rectum']; ?></b> </p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div><div class="col-md-2">
 							<p>Genitalia:<b><?php echo $row['genitalia']; ?></b> </p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div>
 						<div class="col-md-2">
 							<p>Spine: <b><?php echo $row['spine']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div><div class="col-md-2">
 							<p>Arms:<b><?php echo $row['arms']; ?></b> </p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div>
 						<div class="col-md-2">
 							<p>Legs: <b><?php echo $row['legs']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div>	<div class="col-md-2">
 							<p>Feet: <b><?php echo $row['feet']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p></p>
 						</div>
 						<hr>
					</div>
					<hr>
					 <div class="row">
 						<div class="col-md-12">
 							<p>Remarks: <b><?php echo $row['remarks']; ?></b> </p>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-12">
 							<p>Essentially Normal Physical Examination Findings: <b><?php echo $row['essentially']; ?></b> </p>
 						</div>
 					</div><div class="row">
 						<div class="col-md-12">
 							<p>With Limitation of activities: <b><?php echo $row['limitation']; ?></b> </p>
 						</div>
 					</div><div class="row">
 						<div class="col-md-12">
 							<p>Requires special attention: <b><?php echo $row['special_attention']; ?></b> </p>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-md-12">
 							<p>Reccomendation: <b><?php echo $row['reccomendation']; ?></b></p>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-md-12">
 							<p>Assesed by: <b><?php echo $row['assesed_by']; ?></b> </p>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-6">
 							<small style="color: red;"><i>This annual physical record was recorded on <?php echo $row['date_recorded']; ?></i></small>
 						</div>

 						
 					</div>
 				</div>
			</div>
 		</div>
	</div>
</div>