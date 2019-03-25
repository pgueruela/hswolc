<?php 
include '../header-include.php';
include '../includes/db.php';


$id = $_SESSION['id'];

if (!isset($_SESSION['id']) ) {
	header("Location: ../login_account.php");
	exit();
}

?>


<style>
#magic-line {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100px;
  height: 4px;
  background: #fff !important;
}

.navbar-style {
  background-color: #005533 !important;
}

.navbar-style a {
  color: #fff !important;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-style fixed-top">
  <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> Home</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="add_patient.php"><i class="fas fa-user-plus"></i> Add Patient</a>
        </li>
      </ul>
  </div>
</nav>

<div style="margin-bottom: 60px;"></div>

<script>
    //magin-underline
    $(function() {
      var $el,
        leftPos,
        newWidth,
        $mainNav = $(".navbar-nav");

      $mainNav.append("<li id='magic-line'></li>");
      var $magicLine = $("#magic-line");

      $magicLine
        .width($(".active").width())
        .css("left", $(".active a").position().left)
        .data("origLeft", $magicLine.position().left)
        .data("origWidth", $magicLine.width());

      $(".navbar-nav li a").hover(
        function() {
          $el = $(this);
          leftPos = $el.position().left;
          newWidth = $el.parent().width();
          $magicLine.stop().animate({
            left: leftPos,
            width: newWidth
          });
        },
        function() {
          $magicLine.stop().animate({
            left: $magicLine.data("origLeft"),
            width: $magicLine.data("origWidth")
          });
        }
      );
    });

    </script>

 
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

			    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#patient_accordion">
			      <div style="text-align: center;" class="card-body">
			         <ul class="list-group list-group-flush">
							<li class="list-group-item">
							<a class="nav-link" href="view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>
			 		 </ul>
			      </div>
			    </div>
			  </div>
			</div>
 		</div>
		<div class="col-md-9">
			<div class="card card-body-margins">
				<div class="card-body card-body-header">
					<h4>Enter personal data for patient</h4>
				 </div>
			</div>

			<div class="card">
				
				<div class="card-body">
					<form method="post">
					<input type="hidden" name="status" value="Active" required/>
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
							<label for="exampleInputEmail1">Contact Number</label>
						<div class="input-group mb-3">
	  						<div class="input-group-prepend">
	    					<span class="input-group-text" id="basic-addon1">+63</span>
	  						</div>
  							<input type="number" class="form-control" placeholder="Enter patient contact number" aria-label="Username" aria-describedby="basic-addon1" name="patient_number">
						</div>
					</div>
				</div>
				<hr>
				<div class="form-group">
						<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Contact person in case of emergency</label>
						    	<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter contact persons name" name="contact_person" required/>
							</div>
						</div>
				</div>
				
				<div class="row">
					<div class="col-md-8">
					<label for="exampleInputEmail1">Contact Number</label>
						<div class="input-group mb-3">
	  						<div class="input-group-prepend">
	    					<span class="input-group-text" id="basic-addon1">+63</span>
	  						</div>
  							<input type="number" class="form-control" placeholder="Contact persons emergency number" aria-label="Username" aria-describedby="basic-addon1" name="person_contact_emergency_number">
						</div>
					</div>
				</div>
				<hr>
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
			  				<button type="submit" class="btn btn-success" name="add_patient">Add</button>
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



 