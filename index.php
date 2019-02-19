<?php 

include 'includes/header.php';
include 'includes/admin_navigationbar.php';
include 'includes/admin_sidebar.php';
 
if (!isset($_SESSION['id'])) {
	header("Location: login_account.php");
	exit();
}

 ?>
<!-- Dashboard -->
<div class="col-md-9">
	<div class="row">
		<div class="col-md-12">
				<div class="card">
		<div class="card-body card-body-header">
			<h5>Logs</h5>
		</div>
	</div>
		</div>
	</div>
<?php 

$query = "SELECT pt.id, pt.firstname, pt.lastname, ct.id, ct.patient_id , ct.date_checkup, ct.nurse_doctor FROM patient_pd_tbl as pt, consultation_tbl as ct WHERE pt.id=ct.patient_id ORDER BY ct.id DESC";
$result = mysqli_query($conn, $query);?>

	<!-- Table -->
	<div>
		<div class="card card-body-margins">
			<div class="card-body card-body-header">
					<div class="col-md-12">
				<table id="logs_data" class="table table-hover">
					<thead>
						<tr>
							<td>Fullname</td>
							<td>Date Checkup</td>
							<td>Doctor/Nurse</td>
						</tr>
					</thead>
			<?php while($row = mysqli_fetch_array($result)) { ?>
					<tr>
						<td><?php echo $row["firstname"]. " " . $row["lastname"]; ?></td>
						<td><?php echo $row["date_checkup"]; ?></td>
						<td><?php echo $row["nurse_doctor"]; ?></td>
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
include 'includes/footer.php';
 ?>