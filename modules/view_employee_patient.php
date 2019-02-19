<?php 
include '../includes/header.php';
include '../includes/admin_navigationbar.php';
include '../includes/admin_sidebar.php';
include '../modules/delete_patient_modal.php';
?>

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
							<td>Gender</td>
							<td>Contact Number</td>
							<td>Department</td>
							<td>View</td>
							<td>Edit</td>
							<td>Add</td>
						</tr>
					</thead>
			<?php while($row = mysqli_fetch_array($result)) { ?>
					<tr>
						<td><?php echo $row["firstname"]. " " . $row["lastname"]; ?></td>
						<td><?php echo $row["gender"]; ?></td>
						<td><?php echo $row["patient_number"]; ?></td>
						<td><?php echo $row["department"]; ?></td>
						<th><a href="../modules/sidebar_view_patient_profile.php?id=<?php echo $row['id']; ?>"><i class="fas fa-eye"></i> View Full Profile</a></th>
						<th><a href="../process/edit_personal_student_data.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit"></i> Edit Personal Data</a></th>
						<th><a href="../modules/add_consultation_patient.php?id=<?php echo $row['id']; ?>"><i class="fas fa-plus"></i> Add consultation</a></th>
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

<script>
$(document).ready( function() {
    $('#employee_data').DataTable();
});
</script>

 <?php 
//includes footer
 include '../includes/footer.php';

  ?>
 