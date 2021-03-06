<?php 
include 'includes/header.php';
include 'process/add_account_process.php';

?>

<style>
#magic-line {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100px;
  height: 4px;
  background: #fff;
}

.navbar-style {
  background-color: #005533 !important;
}

.navbar-style a {
  color: #fff !important;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-style">
	<div class="container">
	    <ul class="navbar-nav">
	    	<li class="nav-item">
	        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="add_account.php"><i class="fas fa-user-plus"></i> Add User</a>

	      </li>
	    </ul>
	</div>
</nav>
<div style="margin-bottom: 15px;"></div>

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
							<a class="nav-link" href="modules/view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
						</li>
				    	
						<li class="list-group-item">
							<a class="nav-link" href="modules/view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>

						<li class="list-group-item">
				    		<a class="nav-link" href="modules/add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
				    	</li>
			 		 </ul>
			      </div>
			    </div>
			  </div>
			</div>
 		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
					<div class="card-body card-body-header">
						<div class="col-md-12">
							<h4><i class="fas fa-user-plus"></i> Add User for this system</h4>
							<small style="color: red;"><i>Adding user in this system can access everything from this system</i></small>
						</div>
					</div>
					</div>
				</div>
			</div>

			<div class="card card-body-margins">
				<div class="card-body card-body-header">
						<form method="post" action="add_account.php">
			<div class="container">
					<?php include 'process/errors.php'; ?>
				 <div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Firstname</label>
				    <input type="text" class="form-control" placeholder="Enter firstname" name="firstname" value="<?php echo $firstname; ?>" required/>
					
							</div>
				  		</div>
				  <div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Lastname</label>
				    <input type="text" class="form-control" placeholder="Enter lastname" name="lastname" value="<?php echo $lastname; ?>" required/>
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

				<div class="row">
					<div class="col-md-8">
							<label for="exampleInputEmail1">Username</label>
						<div class="input-group mb-3">
	  						<div class="input-group-prepend">
	    					<span class="input-group-text" id="basic-addon1">@</span>
	  						</div>
  							<input type="email" class="form-control" placeholder="Enter email address" name="username" required/>
						</div>
					</div>
				</div>

				  <div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Password</label>
				    <input type="password" class="form-control" placeholder="Enter password" name="password" required/>	
							</div>
						</div>
				 </div>
				  <div class="form-group">
				 		<div class="row">
							<div class="col-md-8">
								<label for="exampleInputEmail1">Confirm Password</label>
				    <input type="password" class="form-control" placeholder="Confirm password" name="confirm_password" required/>

							</div>
						</div>
				  </div>

				  <div class="row">
				  	<div class="col-md-8">
				  		<button type="submit" class="btn btn-success" name="register">Add</button>
				  	</div>
				  </div>
			</div>
		 
		</form>		
				</div>
			</div>
				
		</div>


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




