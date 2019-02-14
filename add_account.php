<?php 
include 'includes/header.php';
include 'includes/admin_navigationbar.php';
include 'includes/admin_sidebar.php';

include 'process/add_account_process.php';

?>
<div class="col-md-10">
<form method="post" action="add_account.php">
	<?php include 'process/errors.php'; ?>
	<h2>Register User for this system</h2>
	<hr>
	<div class="container">
		 <div class="form-group">
		 		<div class="row">
					<div class="col-md-8">
						<label for="exampleInputEmail1">Firstname</label>
		    <input type="text" class="form-control" placeholder="Enter email" name="firstname" value="<?php echo $firstname; ?>" required/>
			
					</div>
		  		</div>
		  <div class="form-group">
		 		<div class="row">
					<div class="col-md-8">
						<label for="exampleInputEmail1">Lastname</label>
		    <input type="text" class="form-control" placeholder="Enter email" name="lastname" value="<?php echo $lastname; ?>" required/>
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
		    		<input type="text" class="form-control" placeholder="Enter email" name="username" value="<?php echo $username ?>" required/>
				</div>
			</div>
		</div>

		  <div class="form-group">
		 		<div class="row">
					<div class="col-md-8">
						<label for="exampleInputEmail1">Password</label>
		    <input type="password" class="form-control" placeholder="Enter email" name="password" required/>	
					</div>
				</div>
		 </div>
		  <div class="form-group">
		 		<div class="row">
					<div class="col-md-8">
						<label for="exampleInputEmail1">Confirm Password</label>
		    <input type="password" class="form-control" placeholder="Enter email" name="confirm_password" required/>

					</div>
				</div>
		  </div>

		  <div class="row">
		  	<div class="col-md-8">
		  		<button type="submit" class="btn btn-primary" name="register">Register</button>
		  	</div>
		  </div>
	</div>
 
</form>


