<!DOCTYPE html>
<html>
<head>
	<title>Health Services and Wealth Office Lorma Colleges Carlatan Campus</title>
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
	<!-- Data tables -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>

<!-- JQUERY -->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="../assets/js/bootstrap.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<?php 

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
				    		<a class="nav-link" href="sidebar_view_patient_profile.php?id=<?php echo $id ?>"><i class="far fa-user"></i> Personal Data</a>
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

		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-body-margins">
						<div class="card-body card-body-header">
							<div class="row">
								<div class="col-md-6">
									<h4>Personal Data</h4>
								</div>
								<div class="col-md-6">
									<a href="edit_personal_data.php?id=<?php echo $id ?>"><i class="fas fa-user"></i> Edit</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
			 	<div class="card-body">
 					<div class="row">
 						<div class="col-md-6">
 							<p>Gender: <?php echo $row['gender']; ?></p>
 							<hr>
						  	<p>Patient Address: <?php echo $row['patient_address']; ?></p>
						  	<hr>
						  	<p>Patient Number : <?php echo $row['patient_number']; ?></p>
						  	<hr>
						  	<p>Birthdate: <?php echo $row['birthdate']; ?></p>
 						</div>
 						<div class="col-md-6">
 							<p>Department : <?php echo $row['department']; ?></p>
 							<hr>
						  	<p>Position: <?php echo $row['position']; ?></p>
						  	<hr>
						  	<p>Civil Status: <?php echo $row['civil_status']; ?></p>
						  	<hr>
						  	<p>Blood Type: <?php echo $row['blood_type']; ?></p>
 						</div>
 					</div>
 				</div>
			</div>
 		</div>
	</div>
</div>