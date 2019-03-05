<?php 

include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
?>
 <div class="container">
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
				    		<a class="nav-link" href="../modules/sidebar_view_patient_profile.php?id=<?php echo $id ?>"><i class="far fa-user"></i> Personal Data</a>
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
	</div>
</div>
<?php 
$id = $_GET['id'];

$result = $conn->query("SELECT gender
						FROM patient_pd_tbl WHERE id = $id");

$row = mysqli_fetch_assoc($result);
echo $row['gender'];
?>