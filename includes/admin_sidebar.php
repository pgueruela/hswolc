<?php 

include 'db.php';

$id = $_SESSION['id'];

$result = $conn->query("SELECT * FROM admin_tbl WHERE id = $id");

$row = mysqli_fetch_assoc($result);
 ?>

 <div class="container">

 	<div class="row">
 		<div class="col-md-3 side-panel">		 		
		 	<div class="card">
			  <div class="card-body">
			    <img src="../includes/assets/img/profile_pic.png" width="50" height="50">
			    <p style="text-align: center;"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p>
			    <p style="text-align: center"><?php echo $_SESSION['user_type']; ?></p>
			    <a style="text-align: center" href="../modules/edit_user_account.php?id=<?php echo $row['id']; ?>" class="nav-link card-link">Edit Profile</a>
			    <a style="text-align: center" href="../modules/changepassword.php?id=<?php echo $row['id']; ?>" class="nav-link card-link">Change Password</a>
			  </div>
			</div>

		 	<div class="card">
			  <div class="card-header">Patient</div>
			  <ul class="list-group list-group-flush">
			    	<li class="list-group-item"><a class="nav-link" href="../modules/add_patient.php">Add Patient</a></li>
					<li class="list-group-item"><a class="nav-link" href="../display/view_studentpatient.php">View Student</a></li>
					<li class="list-group-item"><a class="nav-link" href="../display/view_employeepatient.php">View Employee</a></li>
			  </ul>
			</div>

			<div class="card">
			  <div class="card-header">Reports</div>
			  <ul class="list-group list-group-flush">
			    	<li class="list-group-item"><a class="nav-link" href="../display/view_monthly_report.php">View Monthly Report</a></li>
					<li class="list-group-item"><a class="nav-link" href="../display/view_daily_report.php">View Daily Report</a></li>
					<li class="list-group-item"><a class="nav-link" href="../display/view_visits_report.php">View Visits Report</a></li>
			  </ul>
			</div>
 		</div>
