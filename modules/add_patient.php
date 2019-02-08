<?php 
include '../includes/header.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
?>

 
 		<?php include '../includes/admin_sidebar.php'; ?>
		<div class="col-md-8">
				
			<form method="post">
				<div class="row">
					<div class="col-md-8">
						Personal Data
					</div>
				</div>
				
				<div class="form-group">
		 			<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Firstname</label>
			   				 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="firstname" required/>
						</div>
					</div>
		  		</div>
				<div class="form-group">
				 	<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Lastname</label>
				    		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="lastname" required/>
						</div>
					</div>
				</div>
			  	<div class="form-group">
					<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Address</label>
					    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="patient_address" required/>
						</div>
					</div>
				</div>
				<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Telephone/Cellphone #</label>
				    		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="patient_number" required/>
						</div>
				</div>
				<div class="row">
					<div class="col-md-8">

						<div class="form-check">
						  <input class="form-check-input" type="radio" name="position" id="exampleRadios1" value="option1" checked>
						  <label class="form-check-label" for="exampleRadios1">
						    Student
						  </label>
					</div>
					<div class="form-check">
						  <input class="form-check-input" type="radio" name="position" id="exampleRadios2" value="option2">
						  <label class="form-check-label" for="exampleRadios2">
						    Employee
						  </label>
					</div>
					</div>
				</div>

				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Department</label>
			    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="Department" required/>	
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8">
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="option1" checked>
						  <label class="form-check-label" for="exampleRadios1">
						    Male
						  </label>
					</div>
					<div class="form-check">
						  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="option2">
						  <label class="form-check-label" for="exampleRadios2">
						    Female
						  </label>
					</div>
					</div>
				</div>

				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Birthdate</label>
			    			<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="Birthdate" required/>	
						</div>
					</div>
				</div>

				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Civil Status</label>
			    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="patient_status" required/>	
						</div>
					</div>
				</div>

				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Years of Service</label>
			    			<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="service" required/>	
						</div>
					</div>
				</div>

				  <div class="form-group">
		 		<div class="row">
					<div class="col-md-8">
						 <label for="exampleFormControlSelect1">Civil Status</label>
						    <select class="form-control" id="exampleFormControlSelect1" name="civil_status">
						      <option>Married</option>
						      <option>Widowed</option>
						      <option>Separated</option>
						      <option>Divorced</option>
						      <option>Single</option>
						    </select>
					</div>
				</div>
		  		</div>

		  		<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Person to contact in case of emergency</label>
			    			<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="emergency_person" required/>	
						</div>
					</div>
				</div>

								<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Telephone/Cellphone #</label>
				    		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="emergency_number" required/>
						</div>
				</div>

				<div class="row">
		  			<div class="col-md-8">
		  				<button type="submit" class="btn btn-primary" name="register">Register</button>
		  			</div>
		  		</div>
			</form>
		</div>



