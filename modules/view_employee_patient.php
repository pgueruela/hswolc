<?php 
include '../includes/header.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
include '../includes/admin_sidebar.php';
?>


<div class="col-md-10">
	<h2 style="text-align: right;">Employees</h2>
	<hr>

	<div class="search-bar">
		<form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search Employee" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    	</form>
	</div>
	<br>
	<?php 
	$result = $conn->query("SELECT id, firstname, lastname, gender, patient_address, patient_number, department, position FROM patient_pd_tbl WHERE position='Employee'");

	if ($result->num_rows > 0) {?>
	<!-- Table -->
	<div class="table-container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>View</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Gender</th>
							<th>Address</th>
							<th>Contact Number</th>
							<th>Department</th>
							<th>Data</th>
							<th>Consultation</th>
							<th>Delete</th>
						</tr>
					</thead>
			<?php while($row = mysqli_fetch_assoc($result)) { ?>
					<tbody>
						<tr>
							<th><a href="sidebar_view_patient_profile.php?id=<?php echo $row['id']; ?>">View Profile</a></th>
							<th><?php echo $row['firstname']; ?></th>
							<th><?php echo $row['lastname']; ?></th>
							<th><?php echo $row['gender']; ?></th>
							<th><?php echo $row['patient_address']; ?></th>
							<th><?php echo $row['patient_number']; ?></th>
							<th><?php echo $row['department']; ?></th>
							<th><a href="">Edit Personal Data</a></th>
							<th><a href="add_consultation_patient.php?id=<?php echo $row['id']; ?>">Add Consultation</a></th>
							<th><button class="btn btn-danger">Delete</button></th>
						</tr>
					</tbody>
			<?php } ?>
				</table>
			</div>
		</div>
	</div>
	<?php 
	}
	 ?>
</div>
 


 <?php 

 include '../includes/footer.php';

  ?>