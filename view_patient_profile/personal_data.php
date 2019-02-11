<?php 

include '../includes/header.php';

include '../modules/sidebar_view_patient_profile.php';
?>

<div class="col-md-10">

<?php $id = $_GET['id']; 

$result = $conn->query("SELECT firstname, lastname, gender, patient_address, patient_number, birthdate, department, position, civil_status, blood_type FROM patient_pd_tbl WHERE id=$id");

$row = mysqli_fetch_assoc($result);
?>

	<div class="card">
	  <div class="card-header">
	    Personal Data
	  </div>
	  <div class="card-body">
	  	<p>Firstname: <?php echo $row['firstname']; ?></p>
	  	<p>Lastname: <?php echo $row['lastname']; ?></p>
	  	<p>Gender: <?php echo $row['gender']; ?></p>
	  	<p>Patient Address: <?php echo $row['patient_address']; ?></p>
	  	<p>Patient Number : <?php echo $row['patient_number']; ?></p>
	  	<p>Birthdate: <?php echo $row['birthdate']; ?></p>
	  	<p>Department : <?php echo $row['department']; ?></p>
	  	<p>Position: <?php echo $row['position']; ?></p>
	  	<p>Civil Status: <?php echo $row['civil_status']; ?></p>
	  	<p>Blood Type: <?php echo $row['blood_type']; ?></p>
	  </div>
	</div>
</div>