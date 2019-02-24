<?php 

include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
?>
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
		$consultation = $conn->query("SELECT * FROM consultation_tbl WHERE patient_id=$id");

		$cs = mysqli_fetch_assoc($consultation);

		if ($consultation->num_rows > 0) { ?>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-body-margins">
						<div class="card-body card-body-header">
							<div class="row">
								<div class="col-md-6">
									<h4>Consultation</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<p>Medical History: <?php echo $cs['medical_history']; ?></p>
							<hr>
							<p>Pass illness: <?php echo $cs['past_illness']; ?></p>
							<hr>
							<p>Hospitalization History: <?php echo $cs['hospitalization_history']; ?></p>
							<hr>
							<p>Medicines: <?php echo $cs['medicines']; ?></p>	
							<hr>
							<p>Allergies: <?php echo $cs['allergies']; ?></p>
							<hr>
							<p>Diagnosis: <?php echo $cs['diagnosis']; ?></p>
							<hr>
							<p>Physician: <?php echo $cs['nurse_doctor']; ?></p>
							<hr>
							<p>Date of consultation: <?php echo $cs['date_checkup']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		}else{ ?>
		<div class="col-md-9">
			<div class="card">
				<h5>Vital Signs</h5>
				<hr>
				<div class="card-body">
					<div class="row">
					<div class="col-md-12">
						<p>No data was recorded.</p>
					</div>
				</div>
			</div>
		</div>
		<?php 	 
		}
		?>
		<div>
		</div>
<?php 
include '../includes/footer.php';
 ?>
