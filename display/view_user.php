<?php 
include '../includes/header.php';
include '../includes/admin_navigationbar.php';
include '../includes/admin_sidebar.php';

session_start();

if (!isset($_SESSION['id'])) {
  header("Location: ../login_account.php");
  exit();
}

?>
<div class="col-md-9">
	<?php $result = $conn->query("SELECT * FROM admin_tbl");

	if ($result->num_rows > 0) {?>
	<!-- Table -->
	<div class="table-container">
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Usertype</th>
							<th>Username</th>
						</tr>
					</thead>
			<?php while($row = mysqli_fetch_assoc($result)) { ?>
					<tbody>
						<tr>
							<th><?php echo $row['firstname']; ?></th>
							<th><?php echo $row['lastname']; ?></th>
							<th><?php echo $row['usertype']; ?></th>
							<th><?php echo $row['username']; ?></th>
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
