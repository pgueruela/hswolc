<nav class="navbar navbar-expand-lg navbar-style">
        <div class="container">
          <a class="navbar-brand" href="#" style="color: #fff;">HSWOLCIS</a>
          <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                 <li class="nav-item">
          <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
        </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="add_account.php"><i class="fas fa-user-plus"></i> Add user</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="process/logout_account_process.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </div>
        </div>
</nav>
<?php 
include 'includes/header.php';
include 'process/add_account_process.php';

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
				    		<a class="nav-link" href="modules/add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
				    	</li>
						<li class="list-group-item">
							<a class="nav-link" href="modules/view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="modules/view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
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
					<div class="card">
					<div class="card-body card-body-header">
						<div class="col-md-12">
													<h4>Add User for this system</h4>
						<small style="color: red;"><i>Adding user in this system can access everything from this system</i></small>
						</div>
					</div>
					</div>
				</div>
			</div>

			<div class="card card-body-margins">
				<div class="card-body card-body-header">
						<form method="post" action="add_account.php">
			<div class="container">
					<?php include 'process/errors.php'; ?>
				 <div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Firstname</label>
				    <input type="text" class="form-control" placeholder="Enter firstname" name="firstname" value="<?php echo $firstname; ?>" required/>
					
							</div>
				  		</div>
				  <div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Lastname</label>
				    <input type="text" class="form-control" placeholder="Enter lastname" name="lastname" value="<?php echo $lastname; ?>" required/>
							</div>
						</div>
				  </div>
				  <div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								 <label for="exampleFormControlSelect1">Usertype</label>
								    <select class="form-control" id="exampleFormControlSelect1" name="usertype">
								      <option>Nurse</option>
								      <option>Doctor</option>
								    </select>
							</div>
						</div>
				  </div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-8">
							<label for="exampleFormControlSelect1">Username</label>
				    		<input type="text" class="form-control" placeholder="Enter username" name="username" value="<?php echo $username ?>" required/>
						</div>
					</div>
				</div>

				  <div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Password</label>
				    <input type="password" class="form-control" placeholder="Enter password" name="password" required/>	
							</div>
						</div>
				 </div>
				  <div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Confirm Password</label>
				    <input type="password" class="form-control" placeholder="Confirm password" name="confirm_password" required/>

							</div>
						</div>
				  </div>

				  <div class="row">
				  	<div class="col-md-8">
				  		<button type="submit" class="btn btn-success" name="register">Add</button>
				  	</div>
				  </div>
			</div>
		 
		</form>		
				</div>
			</div>
				
		</div>




