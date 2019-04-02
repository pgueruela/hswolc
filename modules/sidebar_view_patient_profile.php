<!DOCTYPE html>
<html>
<head>
	<title>Health Services and Wealth Office Lorma Colleges Carlatan Campus</title>
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

	<!-- CUSTOM CSS -->
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
	<!-- Data tables -->
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>

<!-- JQUERY -->
<script src="../assets/js/jquery-3.3.1.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="../assets/js/bootstrap.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<?php 

include '../includes/db.php';
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

<?php 

 	$id = $_GET['id'];	

 	$result = $conn->query("SELECT * FROM patient_pd_tbl WHERE id=$id");

	$row = mysqli_fetch_assoc($result); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-style fixed-top">
  <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> Home</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="../modules/sidebar_view_patient_profile.php?id=<?php echo $id ?>"> Personal Data</a>
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

	<?php 
	if ($row['position']== 'Employee') { ?>

		<div class="col-md-3 side-panel">
			<div class="accordion" id="patient_accordion" aria-expanded="true">
			  <div class="card card-side-panel">
			    <div class="card-header card-header-side-panel" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          Records
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#patient_accordion">
			      <div class="card-body">
			         <ul class="list-group list-group-flush">
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/consultation.php?id=<?php echo $id ?>"><i class="fas fa-stethoscope"></i> Consultation Records</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/annual_physical_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i> Physical Records</a>	
						</li>

							<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/imaging.php?id=<?php echo $id ?>"><i class="fas fa-x-ray"></i> Imaging</a>	
						</li>

						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/attach_medical_records.php?id=<?php echo $id ?>"><i class="fas fa-file-upload"></i> Medical Records</a>	
						</li>

						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/medical_profile_records.php?id=<?php echo $id ?>"><i class="far fa-user"></i> Medical Profile</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/medical_laboratories.php?id=<?php echo $id ?>"><i class="fas fa-vials"></i> Medical Laboratories</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/medical_certificate.php?id=<?php echo $id ?>"><i class="fas fa-certificate"></i> Medical Certificate</a>	
						</li>
			 		 </ul>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="accordion" id="dashboard_accordion">
			  <div class="card card-side-panel">
			    <div class="card-header card-header-side-panel" id="headingOne">
		 	      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="" aria-controls="collapseTwo">
			          Dashboard
			        </button>
			      </h5>
			    </div>

			    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#dashboard_accordion">
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
	}else{ ?>
				<div class="col-md-3 side-panel">
			<div class="accordion" id="patient_accordion" aria-expanded="true">
			  <div class="card card-side-panel">
			    <div class="card-header card-header-side-panel" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          Records
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#patient_accordion">
			      <div class="card-body">
			         <ul class="list-group list-group-flush">
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/consultation.php?id=<?php echo $id ?>"><i class="fas fa-stethoscope"></i> Consultation Records</a>
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/annual_physical_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i> Physical Records</a>	
						</li>

						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/imaging.php?id=<?php echo $id ?>"><i class="fas fa-x-ray"></i> Imaging</a>	
						</li>

						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/attach_medical_records.php?id=<?php echo $id ?>"><i class="fas fa-file-upload"></i> Medical Records</a>	
						</li>


						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/medical_laboratories.php?id=<?php echo $id ?>"><i class="fas fa-vials"></i> Medical Laboratories</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="../view_patient_profile/medical_certificate.php?id=<?php echo $id ?>"><i class="fas fa-certificate"></i> Medical Certificate</a>	
						</li>
			 		 </ul>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="accordion" id="dashboard_accordion"  aria-expanded="true">
			  <div class="card card-side-panel">
			    <div class="card-header card-header-side-panel" id="headingOne">
		 	      <h5 class="mb-0">
			        <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
			          Dashboard
			        </button>
			      </h5>
			    </div>

			    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#dashboard_accordion">
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
	}
 	?>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-body-margins">
						<div class="card-body card-body-header">
							<div class="row">
								<div class="col-md-6">
									<h5><i class="fas fa-user"></i> Personal Data</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
			 	<div class="card-body">
 					<div class="row">
 						<div class="col-md-6">
 							<p>Status: <?php echo $row['status']; ?></p>
 							<hr>
 							<p>Name: <?php echo $row['firstname'] . " ". $row['lastname']; ?></p>
 							<hr>
 							<p>Gender: <?php echo $row['gender']; ?></p>
 							<hr>
						  	<p>Patient Address: <?php echo $row['patient_address']; ?></p>
						  	<hr>
						  	<p>Patient Number : <?php echo $row['patient_number']; ?></p>
						  	<hr>
 						</div>
 						<div class="col-md-6">
 							<p>Age: <?php echo $row['age']; ?></p>
 							<hr>
 							<p>Department : <?php echo $row['department']; ?></p>
 							<hr>
						  	<p>Position: <?php echo $row['position']; ?></p>
						  	<hr>
						  	<p>Civil Status: <?php echo $row['civil_status']; ?></p>
						  	<hr>
						  	<p>Blood Type: <?php echo $row['blood_type']; ?></p>
						  	<hr>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-12">
 							<p><b>Contact Person in Case of Emergency</b></p>
 							<p>Name: <?php echo $row['contact_person']; ?> </p>
 							<hr>
 							<p>Contact #: <?php echo $row['person_contact_emergency_number']; ?></p>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-2 offset-10">
							<a href="edit_personal_data.php?id=<?php echo $id ?>"><i class="fas fa-edit"></i> Edit</a>
						</div>
 					</div>
 				</div>
			</div>
 		</div>
	</div>
</div>