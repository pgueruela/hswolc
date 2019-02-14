<?php 
include 'db.php';

session_start();
 ?>

 <div class="container">

 	<div class="row">
 		<div class="col-md-3 side-panel">		 		
		 	<div class="card">
			  <div class="card-body">
			    <img src="includes/assets/img/profile_pic.png" width="50" height="50" style="margin: 0 auto;">
			    <p><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p>
			    <p><?php echo $_SESSION['user_type']; ?></p>
			    <a href="#" class="card-link">Edit Profile</a>
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
			  <div class="card-header">Users</div>
			  <ul class="list-group list-group-flush">
			    	<li class="list-group-item"><a class="nav-link" href="../modules/add_patient.php">View Users</a></li>
					<li class="list-group-item"><a class="nav-link" href="../display/view_studentpatient.php">My Account</a></li>
			  </ul>
			</div>
 		</div>
