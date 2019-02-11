<?php 

include '../includes/header.php';

include '../includes/db.php';

include '../includes/admin_navigationbar.php';
 ?>

 <div class="container">
 	<?php 

 	$id = $_GET['id'];	
 	 ?>
 	<div class="row">
 		<div class="col-md-2 side-panel">
		 	<ul>
		 		<li><a href="">Home</a></li>
		        <li class="active">
					<a class="nav-link" href="../modules/add_patient.php">Personal Data</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../modules/view_student_patient.php">View Student</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../modules/view_employee_patient.php">View Employee</a>
				</li>
			</ul>
 		</div>

 		<div class="col-md-10 offset-2">
 		</div>
