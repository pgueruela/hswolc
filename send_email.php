<?php 
include 'includes/header.php';
include 'process/send_email_process.php';
?>
<div style="margin-top: 20px; "></div>
<div class="container">
	<div class="row">
		<div class="col-md-5 offset-4">
			<form method="post" action="send_email.php" class="form-wrapper">
				<?php include 'process/errors.php'; ?>
				<h2><i class="fas fa-lock"></i> Reset Password</h2>
				<hr>
				<div class="container">
					<div class="card">
						<div class="card-body">
							<div class="form-group">
					 		<div class="row">
								<div class="col-md-12">
									<div><small style="font-style: italic; color: red;">Enter your email/username to reset your password</small></div>
									<div class="input-group mb-3">
			  						<div class="input-group-prepend">
			    					<span class="input-group-text" id="basic-addon1">@</span>
			  						</div>
		  							 <input type="email" class="form-control" placeholder="Enter your email/username" name="email" required/>					
									</div>
								</div>
					  		</div>

							<div class="row">
							  	<div class="col-md-12">
							  		<button style="width: 100%;" type="submit" class="btn btn-success" name="send_email">Send</button>
							  	</div>
							  </div>
							</div>	
						</div>
					</div>
			</form>
		</div>
	</div>	
</div>
<div style="margin-top: 80px; "></div>

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
