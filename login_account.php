<?php 
include 'includes/header.php';
include 'process/login_account_process.php';
?>
<div style="margin-top: 20px; "></div>
<div class="container">
	<div class="row">
		<div class="col-md-5 offset-4">
			<form method="post" action="login_account.php" class="form-wrapper">
				<?php include 'process/errors.php'; ?>
				<h2><i class="fas fa-lock"></i> Login</h2>
				<hr>
				<div class="container">
					<div class="card">
						<div class="card-body">
							<div class="form-group">
					 		<div class="row">
								<div class="col-md-12">
									<label>Username: </label>
									<div class="input-group mb-3">
	  						<div class="input-group-prepend">
	    					<span class="input-group-text" id="basic-addon1">@</span>
	  						</div>
  							 <input type="email" class="form-control" placeholder="Enter your username" name="username" value="<?php echo $username; ?>" required />
							</div>
						</div>
					  </div>
					  <div class="form-group">
					 		<div class="row">
								<div class="col-md-12">
									<label>Password: </label>
					    <input type="password" class="form-control" placeholder="Enter your password" name="password" required/>
								</div>
							</div>
					  </div>

					  <div class="row">
					  	<div class="col-md-12">
					  		<button style="width: 100%;" type="submit" class="btn btn-success" name="login">Login</button>
					  	</div>
					  </div>

					  <div class="row">
					  	<div style="text-align: center;" class="col-md-12">
					  		<br>
					  		<a href="send_email.php">Forgot password?</a>
					  	</div>
					  </div>
				</div>	
						</div>
					</div>
			</form>
		</div>
	</div>	
</div>
<div style="margin-top: 50px; "></div>

<div class="container">
		<div class="row">
		<div style="text-align: center; font-size: 16px;" class="col-md-10 offset-2">
			<hr>
			<small>Copyright &copy; 2019 Health Services and Wellness Office Lorma Colleges Information System.</small>
 				<br>
 			<small>Lorma Colleges | IT Services <a href="gmail:itservices@lorma.edu">< itservices@lorma.edu ></a></small>
		</div>
	</div>
</div>
