<?php 
include 'includes/header-img.php';
include 'includes/header.php';
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
	    	<li class="nav-item active">
	        <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="add_account.php"><i class="fas fa-user-plus"></i> Add User</a>
	      </li>
	    </ul>
	</div>
</nav>
<div style="margin-bottom: 15px;"></div>

<?php 

include 'includes/db.php';

$id = $_SESSION['id'];

if (!isset($_SESSION['id']) ) {
	header("Location: login_account.php");
	exit();
}

$result = $conn->query("SELECT * FROM admin_tbl WHERE id = $id");

$row = mysqli_fetch_assoc($result);
?>

<div class="container">

 	<div class="row">
 		<div class="col-md-3">		 		
		 	<div class="card">
			  <div class="card-body">
			    <p style="text-align: center;"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p>
			    <p style="text-align: center"><?php echo $_SESSION['user_type']; ?></p>
			    <a style="text-align: center" href="modules/edit_user_account.php?id=<?php echo $row['id']; ?>" class="nav-link card-link"><i class="fas fa-user-edit"></i> Edit Profile</a>
			  </div>
			</div>

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

			<div class="accordion" id="reports_accordion" aria-expanded="false">
			  <div class="card">
			    <div class="card-header card-header-side-panel" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
			          User
			        </button>
			      </h5>
			    </div>

			    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#reports_accordion">
			      <div style="text-align: center;" class="card-body">
			        <ul class="list-group list-group-flush">
				    	<li class="list-group-item"><a style="text-align: center" href="modules/changepassword.php?id=<?php echo $row['id']; ?>" class="nav-link card-link"><i class="fas fa-key"></i> Change Password</a>
				    	</li>
				    	<li class="list-group-item"><a class="nav-link" href="process/logout_account_process.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
			  		</ul>
			      </div>
			    </div>
			  </div>
			</div>
 		</div>
		<!-- Dashboard -->
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
						<div class="card">
				<div class="card-body card-body-header">
					<h5>Clinic Visits</h5>
				</div>
			</div>
				</div>
			</div>
		<?php 

		$query = "SELECT pt.id, pt.firstname, pt.lastname, vt.patient_id, vt.visit_reason, vt.date_recorded, vt.assesed_by FROM patient_pd_tbl as pt, visit_tbl as vt WHERE pt.id=vt.patient_id ORDER BY vt.id DESC";
		$result = mysqli_query($conn, $query);?>
			<!-- Table -->
			<div>
				<div class="card card-body-margins">
					<div class="card-body card-body-header">
							<div class="col-md-12">
						<table id="logs_data" class="table table-hover">
							<thead>	
								<tr>
									<td>Name</td>
									<td>Reason of Visit</td>
									<td>Assesed by</td>
									<td>Date Visited</td>
								</tr>
							</thead>
					<?php while($row = mysqli_fetch_array($result)) { ?>
							<tr>
								<td><?php echo $row["firstname"]. " " . $row["lastname"]; ?></td>
								<td><?php echo $row["visit_reason"]; ?></td>
								<td><?php echo $row["assesed_by"]; ?></td>
								<td><?php echo $row["date_recorded"]; ?></td>
							</tr>		
					<?php 
					}
					 ?>
						</table>
					</div>
					</div>
				</div>
				<div class="row">
				</div>
			</div>
		</div>

		<script>
		$(document).ready( function() {
		    $('#logs_data').DataTable();
		});

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

		<?php 
		include 'includes/footer.php';
		 ?>