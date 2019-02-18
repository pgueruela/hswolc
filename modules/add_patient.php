<?php 
include '../includes/header.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
?>
 
 		<?php include '../includes/admin_sidebar.php'; ?>
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
					<h4>Enter personal data for patient</h4>
				 </div>
			</div>

			<div class="card">
				<div class="card-body">
					<form method="post">
				<div class="form-group">
			 		<div class="row">
						<div class="col-md-8">
							<label for="firstname">Firstname</label>
				   			<input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter patient firstname" name="firstname" required/>
						</div>
					</div>
			  	</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-8">
							<label for="exampleInputEmail1">Lastname</label>
					    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient lastname" name="lastname" required/>
						</div>
					</div>
				</div>
				<fieldset class="form-group">
					    <div class="row">
					      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
					      <div class="col-sm-10">
					        <div class="form-check">
					          <input class="form-check-input" type="radio" name="gender" value="M">
					          <label class="form-check-label" for="gridRadios1">
					            Male
					          </label>	
					        </div>
					        <div class="form-check">
					          <input class="form-check-input" type="radio" name="gender" value="F">
					          <label class="form-check-label" for="gridRadios2">
					            Female
					          </label>
					        </div>
					      </div>
					    </div>
				</fieldset>
				<div class="form-group">
						<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Address</label>
						    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient address" name="patient_address" required/>
							</div>
						</div>
				</div>

				<div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Birthdate</label>
				    			<input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="birthdate" required/>	
							</div>
						</div>
				</div>

				<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Telephone/Cellphone #</label>
					    		<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient telephone/cellphone number" name="patient_number" required/>
							</div>
				</div>
				<br>

				<fieldset class="form-group">
					<div class="row">
					<legend class="col-form-label col-sm-2 pt-0">Position</legend>
					<div class="col-sm-10">
					    <div class="form-check">
					        <input class="form-check-input" type="radio" name="position" value="Student" checked>
					        <label class="form-check-label" for="gridRadios1">
					            Student
					        </label>
					    </div>
					        <div class="form-check">
					          <input class="form-check-input" type="radio" name="position" value="Employee">
					          <label class="form-check-label" for="gridRadios2">
					            Employee
					          </label>
					        </div>
					      </div>
					    </div>
					</fieldset>

					<div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Department</label>
				    			<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter patient deparment" name="department" required/>	
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

			  		<hr>

					<div class="form-group">
			 			<div class="row">
							<div class="col-md-8">
								 <label for="exampleFormControlSelect1">Blood Type</label>
								    <select class="form-control" id="exampleFormControlSelect1" name="blood_type">
								      <option>A</option>
								      <option>B</option>
								      <option>AB</option>
								      <option>O</option>
								    </select>
							</div>
						</div>
			  		</div>
					<div class="row">
			  			<div class="col-md-8">
			  				<button type="submit" class="btn btn-primary" name="add_patient">Register</button>
			  			</div>
			  		</div>
						</div>
					</div>

			</form>
				</div>
			</div>
			
		</div>

<?php 
include '../process/add_patient_process.php';
 ?>



