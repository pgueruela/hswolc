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
					    <input type="text" class="form-control" placeholder="Enter your username" name="username" required/>
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
					  		<button type="submit" class="btn btn-success" name="login">Login</button>
					  	</div>
					  </div>
				</div>	
						</div>
					</div>
			</form>
		</div>
	</div>
</div>
