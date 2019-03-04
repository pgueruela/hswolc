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
				<!-- Dashboard -->
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
						<div class="card">
				<div class="card-body card-body-header">
					<h5>Annual Physical Records</h5>
				</div>
			</div>
				</div>
			</div>
		<?php 

		$query = "SELECT * FROM physical_examination_tbl WHERE patient_id=$id;";
		$result = mysqli_query($conn, $query);?>
			<!-- Table -->
			<div>
				<div class="card card-body-margins">
					<div class="card-body card-body-header">
							<div class="col-md-12">
						<table id="logs_data" class="table table-hover">
							<thead>	
								<tr>
									<td>Records</td>
								</tr>
							</thead>
					<?php while($row = mysqli_fetch_array($result)) { ?>
							<tr>
								<td><a href="view_full_annual_physical_record.php?id=<?php echo $row['id']; ?>"><?php echo $row["date_recorded"]; ?></a></td>
							</tr>		
					<?php 
					}
					 ?>
						</table>
					</div>
					</div>
				</div>
				<div class="row">
				</div>
			</div>
		</div>

		<script>
		$(document).ready( function() {
		    $('#logs_data').DataTable();
		});
		</script>

<?php 
include '../includes/footer.php';
 ?>
