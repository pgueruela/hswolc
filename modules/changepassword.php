<?php 
include '../header-include.php';
include '../includes/admin_navigationbar.php';
include '../includes/db.php';
?>
<div class="container">
	<div class="row">
 		<div class="col-md-3">		 		
			<div class="accordion" id="patient_accordion">
			  <div class="card card-side-panel">
			    <div class="card-header card-header-side-panel" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
			          Dashboard
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#patient_accordion">
			      <div style="text-align: center;" class="card-body">
			         <ul class="list-group list-group-flush">
				    	<li class="list-group-item">
							<a class="nav-link" href="view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>
						<li class="list-group-item">
				    		<a class="nav-link" href="add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
				    	</li>
			 		 </ul>
			      </div>
			    </div>
			  </div>
			</div>
 		</div>
 		<?php 
 		$id= $_SESSION['id'];
 		 ?>
 		<div class="col-md-9">
		<div class="row">
				<div class="col-md-12">
					<div class="card card-body-margins">
						<div class="card-body card-body-header">
							<div class="col-md-12">
								<h4><i class="fas fa-lock"></i> Change Password</h4>
								<small style="color: red;"><i>Strong passwords include numbers, letters, and punctuation marks</i></small>
							</div>
						</div>
					</div>
				</div>
		</div>
		<div class="card">
			<div class="card-body">
				<form method="post">
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
					  		<button type="submit" class="btn btn-success" name="change_pass">Change password</button>
					  	</div>
					  </div>
				</div>

			</form>

			</div>
		</div>
	</div>
	<?php 
		if (isset($_POST['change_pass'])) {

			$new_pass = $_POST['new_pass'];
			$confirm_pass = $_POST['confirm_pass'];
			$current_pass = $_POST['current_pass'];

			if ($new_pass != $confirm_pass) {
				echo "<script> alert('New password and confirm is not the same!');</script>";
			}else{

				$result = mysqli_query($conn, "SELECT password FROM admin_tbl WHERE id=$id");
				$row = mysqli_fetch_array($result);
				$hashPassword = password_verify($current_pass, $row['password']);

				if ($current_pass == $hashPassword) {
				$new_hash_pass = password_hash($new_pass, PASSWORD_DEFAULT);
				$sql = "UPDATE admin_tbl SET password = '$new_hash_pass' WHERE id=$id ";
					if ($conn->query($sql) === TRUE) {
						echo "<script> alert('Password has been reset!');</script>";
					}
					else{
						echo "<script> alert('Wrong password!');</script>";
					}
				}else {
					echo "<script> alert('Wrong password!');</script>";
				}

		}
	}

	 ?>
</div>
</div>
