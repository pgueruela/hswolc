<?php 

include '../includes/header.php';

include '../modules/sidebar_view_patient_profile.php';
?>

<div class="col-md-9">

<?php $id = $_GET['id']; 

$result = $conn->query("SELECT medical_history FROM consultation_tbl WHERE patient_id=$id");

$row = mysqli_fetch_assoc($result);

if ($result->num_rows > 0) {?>

	<div class="card">
	  <div class="card-header">
	    Medical History
	  </div>
	  <div class="card-body">
	  	<p><?php echo $row['medical_history']; ?></p>
	  </div>
	</div>
<?php 
}else{ ?>
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