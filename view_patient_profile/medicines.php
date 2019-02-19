<?php 

include '../includes/header.php';
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

							<a class="nav-link" href="../view_patient_profile/medical_history.php?id=<?php echo $id ?>"><i class="fas fa-h-square"></i> Medical History</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/medicines.php?id=<?php echo $id ?>"><i class="fas fa-prescription-bottle-alt"></i> Medicines</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/diagnosis.php?id=<?php echo $id ?>"><i class="fas fa-comment-medical"></i> Diagnosis</a>	
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
		$medicines = $conn->query("SELECT medicines, date_checkup FROM consultation_tbl WHERE patient_id=$id");

		$med = mysqli_fetch_array($medicines);

		if ($medicines->num_rows > 0) { ?>
		<div class="col-md-9">
			<div class="card">
				<h5>Medicines</h5>
				<hr>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<p>Medicines: <?php echo $med['medicines']; ?></p>
							<hr>
						</div>
					</div>
					<div class="row">
							<div class="col-md-12">
								<p><small style="color: red;"><i>*This medical history was recorded on <?php echo $med['date_checkup']; ?></i></small></p>					
							</div>
					</div>
				</div>
			</div>
		</div>
		<?php
		}else{ ?>
		<div class="col-md-9">
			<div class="card">
				<h5>Medicines</h5>
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