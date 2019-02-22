<?php 
include '../header-include.php';
include '../includes/admin_navigationbar.php';
include '../process/changepassword_process.php';

?>
<div class="col-md-9">
<form method="post" action="changepassword.php">
	<?php include '../process/errors.php'; ?>
	<h2>Change Password</h2>
	<hr>
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
