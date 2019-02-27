<?php 
include '../header-include.php';
include '../includes/admin_navigationbar.php';
include '../includes/db.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="accordion" id="patient_accordion">
			  <div class="card card-side-panel">
			    <div class="card-header card-header-side-panel" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
			          Patient
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#patient_accordion">
			      <div class="card-body">
			         <ul class="list-group list-group-flush">
				    	<li class="list-group-item">
				    		<a class="nav-link" href="add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
				    	</li>
						<li class="list-group-item">
							<a class="nav-link" href="view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
						</li>
			 		 </ul>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="accordion" id="reports_accordion" aria-expanded="false">
			  <div class="card">
			    <div class="card-header card-header-side-panel" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
			          Reports
			        </button>
			      </h5>
			    </div>

			    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#reports_accordion">
			      <div class="card-body">
			        <ul class="list-group list-group-flush">
				    	<li class="list-group-item"><a class="nav-link" href="../display/view_monthly_report.php">View Monthly Report</a>
				    	</li>
						<li class="list-group-item"><a class="nav-link" href="../display/view_daily_report.php">View Daily Report</a>
						</li>
						<li class="list-group-item"><a class="nav-link" href="../display/view_visits_report.php">View Visits Report</a>
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
						<h4>Employees</h4>
					</div>
				</div>
			</div>
		</div>

		<?php 
		$query = "SELECT * FROM patient_pd_tbl WHERE position ='Employee' ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		?>
		<!-- Table -->
		<div>
			<div class="card card-body-header">
				<div class="card-body">
					<div class="row">
				<div class="col-md-12">
					<table id="employee_data" class="table table-hover">
						<thead>
							<tr>
								<td>Name</td>
								<td>Consultation</td>
								<td>Physical Examination</td>
							</tr>
						</thead>
				<?php while($row = mysqli_fetch_array($result)) { ?>
						<tr>
							<td><a href="../modules/sidebar_view_patient_profile.php?id=<?php echo $row['id']; ?>"><?php echo $row["firstname"]. " " . $row["lastname"]; ?></a></td>
							<th><a href="../modules/add_consultation_patient.php?id=<?php echo $row['id']; ?>"><i class="fas fa-plus"></i> Add consultation</a></th>
							<th><a href=""><i class="fas fa-plus"></i> Add Physical Examination</a></th>
						</tr>		
				<?php 
				}
				 ?>
					</table>
				</div>
			</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<script>
$(document).ready( function() {
    $('#employee_data').DataTable();
});
</script>

 <?php 
//includes footer
 include '../includes/footer.php';

  ?>
 