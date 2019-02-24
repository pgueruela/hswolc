<div class="container-fluid header">
	<div class="row">
		<div class="col-md-12">
			<img src="../assets/img/lormacolleges_logo.png" width="215"
    height="60">
		</div>
	</div>
</div>
<?php 
include '../header-include.php';
include '../includes/admin_navigationbar.php';
include '../process/changepassword_process.php';
?>
<div class="container">

 	<div class="row">
 		<div class="col-md-3">		 		
		 	<div class="card">
			  <div class="card-body">
			    <img src="includes/assets/img/profile_pic.png" width="50" height="50">
			    <p style="text-align: center;"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p>
			    <p style="text-align: center"><?php echo $_SESSION['user_type']; ?></p>
			    <a style="text-align: center" href="modules/edit_user_account.php?id=<?php echo $row['id']; ?>" class="nav-link card-link"><i class="fas fa-user-edit"></i> Edit Profile</a>
			    <a style="text-align: center" href="modules/changepassword.php?id=<?php echo $row['id']; ?>" class="nav-link card-link"><i class="fas fa-key"></i> Change Password</a>
			  </div>
			</div>

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
						<div class="col-md-12">
							<h4>Change Password</h4>
							<small style="color: red;"><i>Strong passwords include numbers, letters, and punctuation marks</i></small>
						</div>
					</div>
				</div>
			</div>
	</div>
	<div class="card">
		<div class="card-body">
					<form method="post" action="changepassword.php">
			<?php include '../process/errors.php'; ?>
			<div class="container">
				  <div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">New Password</label>
				    <input type="password" class="form-control" placeholder="Enter your new password" name="new_pass" required/>
							</div>
						</div>
				  </div>
				  	<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Confirm New Password</label>
				    <input type="password" class="form-control" placeholder="Confirm your new password" name="confirm_pass" required/>
					
							</div>
				  		</div>
				  			 <div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Password</label>
				    <input type="password" class="form-control" placeholder="Enter your current password" name="current_pass" required/>
					
							</div>
				  		</div>
				 </div>

				  <div class="row">
				  	<div class="col-md-8">
				  		<button type="submit" class="btn btn-primary" name="change_pass">Change password</button>
				  	</div>
				  </div>
			</div>

		</form>

		</div>
	</div>