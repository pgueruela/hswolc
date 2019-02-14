<?php 

include '../includes/header.php';

include '../includes/db.php';

include '../includes/admin_navigationbar.php';
 ?>

 <div class="container">
 	<?php 

 	$id = $_GET['id'];	
 	 ?>
 	<div class="row">
 		<div class="col-md-3 side-panel">
		 	<ul>
		 		<li><a href="../index.php">Home</a></li>
		        <li class="active">
					<a class="nav-link" href="../view_patient_profile/personal_data.php?id=<?php echo $id ?>">Personal Data</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../view_patient_profile/vital_signs.php?id=<?php echo $id ?>">Vital Signs</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../view_patient_profile/medical_history.php?id=<?php echo $id ?>">Medical History</a>	
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../view_patient_profile/medicines.php?id=<?php echo $id ?>">Medicines</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../view_patient_profile/allergies.php?id=<?php echo $id ?>">Allergies</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../view_patient_profile/diagnosis.php?id=<?php echo $id ?>">Diagnosis</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../view_patient_profile/medical_laboratories.php?id=<?php echo $id ?>">Medical Laboratories</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../view_patient_profile/medical_certificate.php?id=<?php echo $id ?>">Medical Certificate</a>
				</li>
			</ul>
 		</div>
