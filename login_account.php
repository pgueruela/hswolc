<?php 
include 'includes/header.php';
include 'process/login_account_process.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-4 offset-4">
			<form method="post" action="login_account.php">
				<?php include 'process/errors.php'; ?>
				<h2>Login</h2>
				<hr>
				<div class="container">
					 <div class="form-group">
					 		<div class="row">
								<div class="col-md-12">
									<label>Username</label>
					    <input type="text" class="form-control" placeholder="Enter email" name="username" required/>
						
							</div>
					  </div>
					  <div class="form-group">
					 		<div class="row">
								<div class="col-md-12">
									<label>Password</label>
					    <input type="password" class="form-control" placeholder="Enter email" name="password" required/>
								</div>
							</div>
					  </div>

					  <div class="row">
					  	<div class="col-md-12">
					  		<button type="submit" class="btn btn-primary" name="login">Login</button>
					  	</div>
					  </div>
				</div>
			</form>
		</div>
	</div>
</div>
