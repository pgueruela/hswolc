<?php 

include '../includes/header.php';

include '../modules/sidebar_view_patient_profile.php';
?>

<div class="col-md-10">

<?php $id = $_GET['id']; 

$result = $conn->query("SELECT medicines FROM consultation_tbl WHERE patient_id=$id");

if ($result->num_rows > 0) {?>
?>
	<div class="card">
	  <div class="card-header">
	    Medicines
	  </div>
	  <div class="card-body">
	  	<p><?php echo $row['medicines']; ?></p>
	  </div>
	</div>
<?php 
}else{ ?>
	<div class="card">
	  <div class="card-header">
	    Medicines
	  </div>
	  <div class="card-body">
	  	<p>Nothing has to display here</p>
	  </div>
	</div>
<?php
  }
?>