<?php 

include '../includes/db.php';
include '../header-include.php';

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
          <a class="nav-link" href="edit_user_account.php"><i class="fas fa-edit"></i> Edit Profile</a>
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
			          Patient
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#patient_accordion">
			      <div style="text-align: center;" class="card-body">
			         <ul class="list-group list-group-flush">
				    							<li class="list-group-item">
							<a class="nav-link" href="view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>
										    	<li class="list-group-item">
				    		<a class="nav-link" href="add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
				    	</li>
			 		 </ul>
			      </div>
			    </div>
			  </div>
			</div>
 		</div>
		<?php
		$id= $_SESSION['id'];

		$result = $conn->query("SELECT firstname, lastname, username FROM admin_tbl WHERE id=$id");

		$row = mysqli_fetch_assoc($result);


		if (isset($_POST['save_changes'])) {
				 	$firstname = $_POST['firstname'];
				 	$lastname = $_POST['lastname'];
				 	$username = $_POST['username'];

					$sql = "UPDATE admin_tbl SET firstname = '$firstname', lastname = '$lastname', username = '$username' WHERE id=$id ";
					if ($conn->query($sql) === TRUE) {
							echo "<script>alert('Updated Successfully!');</script>";
			}
		}
		?>
		<div class="col-md-9">

				<div class="row">
					<div class="col-md-12">
						<div class="card card-body-margins">
							<div class="card-body card-body-header">
								<h4><i class="fas fa-user-edit"></i> Edit profile</h4>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">		
						<form method="post">
							<div class="container">
								 <div class="form-group">
								 		<div class="row">
											<div class="col-md-8">
												<label for="exampleInputEmail1">Firstname</label>
								    <input type="text" class="form-control" placeholder="Enter email" name="firstname" value="<?php echo $row['firstname']; ?>" required/>
									
											</div>
								  		</div>
								 </div>
								  <div class="form-group">
								 		<div class="row">
											<div class="col-md-8">
												<label for="exampleInputEmail1">Lastname</label>
								    <input type="text" class="form-control" placeholder="Enter email" name="lastname" value="<?php echo $row['lastname']; ?>" required/>
											</div>
										</div>
								  </div> 
								  <div class="form-group">
								 		<div class="row">
											<div class="col-md-8">
												<label for="exampleInputEmail1">Username</label>
								    <input type="text" class="form-control" placeholder="Enter email" name="username" value="<?php echo $row['username']; ?>" required/>
											</div>
										</div>
								  </div>

								  <div class="row">
								  	<div class="col-md-8">
								  		<button type="submit" class="btn btn-success" name="save_changes">Save Changes</button>
								  	</div>
								  </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
