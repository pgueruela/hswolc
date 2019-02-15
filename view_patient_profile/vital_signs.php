<?php 

include '../includes/header.php';

include '../modules/sidebar_view_patient_profile.php';
?>

<div class="col-md-9">

<?php $id = $_GET['id']; 

$result = $conn->query("SELECT blood_pressure, patient_height, patient_weight, bmi, respiratory_rate, heart_rate, temperature FROM consultation_tbl WHERE patient_id=$id");

$row = mysqli_fetch_assoc($result);

if ($result->num_rows > 0) {?>
	<div class="card">
	  <div class="card-header">
	    Vital Signs
	  </div>
	  <div class="card-body">
	  	<p>Blood Pressure: <?php echo $row['blood_pressure']; ?></p>
	  	<p>Patient Height: <?php echo $row['patient_height']; ?></p>
	  	<p>Patient Weight: <?php echo $row['patient_weight']; ?></p>
	  	<p>BMI: <?php echo $row['bmi']; ?></p>
	  	<p>Respiratory Rate : <?php echo $row['respiratory_rate']; ?></p>
	  	<p>Heart Rate: <?php echo $row['heart_rate']; ?></p>
	  	<p>Temperature : <?php echo $row['temperature']; ?></p>
	  </div>
	</div>
<?php 
}else{?>
	<div class="card">
	  <div class="card-header">
	    Medical History
	  </div>
	  <div class="card-body">
	  	<p>Nothing has to display here</p>
	  </div>
	</div>
<?php
  }
?>
</div>

</div>

<?php 
include '../includes/footer.php';
 ?>
