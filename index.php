<?php 
include 'includes/header-img.php';
include 'includes/header.php';
include 'includes/db.php';

$id = $_SESSION['id'];


 if (!isset($_SESSION['id'])) {
	header("Location: login_account.php");
	exit();
}

$result = $conn->query("SELECT * FROM admin_tbl WHERE id = $id");

$row = mysqli_fetch_assoc($result);
?>

 <nav class="navbar navbar-toggleable-md navbar-style">
    <div class="container">

      <a class="navbar-brand" href="#" style="color: #fff;">HSWOLCIS</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="process/logout_account_process.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </li>
      </ul>
    </div>
  </nav>

<div class="container">

 	<div class="row">
 		<div class="col-md-3">		 		
		 	<div class="card">
			  <div class="card-body">
			    <img src="includes/assets/img/profile_pic.png" width="50" height="50">
			    <p style="text-align: center;"><?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?></p>
			    <p style="text-align: center"><?php echo $_SESSION['user_type']; ?></p>
			    <a style="text-align: center" href="modules/edit_user_account.php?id=<?php echo $row['id']; ?>" class="nav-link card-link"><i class="fas fa-user-edit"></i> Edit Profile</a>
			    <a style="text-align: center" href="modules/changepassword.php?id=<?php echo $row['id']; ?>" class="nav-link card-link"><i class="fas fa-key"></i> Change Password</a>
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
			      <div class="card-body">
			         <ul class="list-group list-group-flush">
				    	<li class="list-group-item">
				    		<a class="nav-link" href="modules/add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
				    	</li>
						<li class="list-group-item">
							<a class="nav-link" href="modules/view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="modules/view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
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
			          Reports
			        </button>
			      </h5>
			    </div>

			    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#reports_accordion">
			      <div class="card-body">
			        <ul class="list-group list-group-flush">
				    	<li class="list-group-item"><a class="nav-link" href="../display/view_monthly_report.php">View Monthly Report</a>
				    	</li>
						<li class="list-group-item"><a class="nav-link" href="../display/view_daily_report.php">View Daily Report</a>
						</li>
						<li class="list-group-item"><a class="nav-link" href="../display/view_visits_report.php">View Visits Report</a>
						</li>
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
			<h5>Logs</h5>
		</div>
	</div>
		</div>
	</div>
<?php 

$query = "SELECT pt.id, pt.firstname, pt.lastname, ct.id, ct.patient_id , ct.date_checkup, ct.nurse_doctor FROM patient_pd_tbl as pt, consultation_tbl as ct WHERE pt.id=ct.patient_id ORDER BY ct.id DESC";
$result = mysqli_query($conn, $query);?>

	<!-- Table -->
	<div>
		<div class="card card-body-margins">
			<div class="card-body card-body-header">
					<div class="col-md-12">
				<table id="logs_data" class="table table-hover">
					<thead>
						<tr>
							<td>Fullname</td>
							<td>Date Checkup</td>
							<td>Doctor/Nurse</td>
						</tr>
					</thead>
			<?php while($row = mysqli_fetch_array($result)) { ?>
					<tr>
						<td><?php echo $row["firstname"]. " " . $row["lastname"]; ?></td>
						<td><?php echo $row["date_checkup"]; ?></td>
						<td><?php echo $row["nurse_doctor"]; ?></td>
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
</script>

<?php 
include 'includes/footer.php';
 ?>