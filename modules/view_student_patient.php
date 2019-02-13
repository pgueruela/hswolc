<?php 
include '../includes/header.php';
include '../includes/admin_navigationbar.php';
include '../includes/admin_sidebar.php';
include '../modules/delete_patient_modal.php';
?>


<div class="col-md-10">
	<h2 style="text-align: right;">Students</h2>
	<hr>

	<div class="search-bar">
		<form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search Employee" aria-label="Search" name="valueToSearch">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search-student">Search</button>
    	</form>
	</div>
	<br>
	<?php 
	$result = $conn->query("SELECT id, firstname, lastname, gender, patient_address, patient_number, department, position FROM patient_pd_tbl WHERE position='Student'");

	if ($result->num_rows > 0) {?>

	<!-- Table -->
	<div class="table-container">
		<div class="row">
			<div class="col-md-12">
				<table id="student_data" class="table table-hover">
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
							<th><a href="../process/edit_personal_student_data.php?id=<?php echo $row['id']; ?>">Edit Personal Data</a></th>
							<th><a href="add_consultation_patient.php?id=<?php echo $row['id']; ?>">Add Consultation</a></th>
							<th><button class="btn btn-danger" data-toggle="modal" data-target="#delete-student" data-id="<?php echo $row['id']; ?>">Delete</button></th>
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

<script>
	$(document).ready(function(){
		$('#search-student').keyup(function(){
			var input = $(this).val();
			if (input != '') 
			{
				$.ajax({
					url: "../process/fetch_student_data.php",
					method: "post",
					data: {search:input},
					dataType: "text",
					success: function(data)
					{
						$('#student-data').html(data);
					}
				});
			}else
			{
				$('#student-data').html('');
			}
		});
	});
</script>

 <?php 
//includes footer
 include '../includes/footer.php';

  ?>
 