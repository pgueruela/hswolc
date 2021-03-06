<?php 

include '../header-include.php';
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
$row = mysqli_fetch_assoc($result); 
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-style fixed-top">
  <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> Home</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="../view_patient_profile/annual_physical_records.php?id=<?php echo $id ?>">Annual Physical Record</a>
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
			                <a class="nav-link" href="../modules/sidebar_view_patient_profile.php?id=<?php echo $id ?>"><i class="far fa-user"></i> Personal Data</a>
			             </li>
						<li class="list-group-item">
							<a class="nav-link" href="consultation.php?id=<?php echo $id ?>"><i class="fas fa-stethoscope"></i> Consultation Records</a>
						</li>

						<li class="list-group-item">
							<a class="nav-link" href="imaging.php?id=<?php echo $id ?>"><i class="fas fa-x-ray"></i> Imaging</a>	
						</li>

						<li class="list-group-item">
							<a class="nav-link" href="attach_medical_records.php?id=<?php echo $id ?>"><i class="fas fa-file-upload"></i> Medical Records</a>	
						</li>

						<li class="list-group-item">
							<a class="nav-link" href="medical_profile_records.php?id=<?php echo $id ?>"><i class="fas fa-user"></i> Medical Profile</a>	
						</li>

						<li class="list-group-item">
							<a class="nav-link" href="medical_laboratories.php?id=<?php echo $id ?>"><i class="fas fa-vials"></i> Medical Laboratories</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="medical_certificate.php?id=<?php echo $id ?>"><i class="fas fa-certificate"></i> Medical Certificate</a>	
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
							<a class="nav-link" href="../modules/view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
						</li>
				    	
						<li class="list-group-item">
							<a class="nav-link" href="../modules/view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>

						<li class="list-group-item">
				    		<a class="nav-link" href="../modules/add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
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
			                <a class="nav-link" href="../modules/sidebar_view_patient_profile.php?id=<?php echo $id ?>"><i class="far fa-user"></i> Personal Data</a>
			              </li>
						<li class="list-group-item">
							<a class="nav-link" href="consultation.php?id=<?php echo $id ?>"><i class="fas fa-stethoscope"></i> Consultation Records</a>
						</li>

						<li class="list-group-item">
							<a class="nav-link" href="imaging.php?id=<?php echo $id ?>"><i class="fas fa-x-ray"></i> Imaging</a>	
						</li>

						<li class="list-group-item">
							<a class="nav-link" href="attach_medical_records.php?id=<?php echo $id ?>"><i class="fas fa-file-upload"></i> Medical Records</a>	
						</li>


						<li class="list-group-item">
							<a class="nav-link" href="medical_laboratories.php?id=<?php echo $id ?>"><i class="fas fa-vials"></i> Medical Laboratories</a>	
						</li>
						<li class="list-group-item">
							<a class="nav-link" href="medical_certificate.php?id=<?php echo $id ?>"><i class="fas fa-certificate"></i> Medical Certificate</a>	
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
							<a class="nav-link" href="../modules/view_employee_patient.php"><i class="fas fa-user-tie"></i> View Employee</a>
						</li>
				    	
						<li class="list-group-item">
							<a class="nav-link" href="../modules/view_student_patient.php"><i class="fas fa-user"></i> View Student</a>
						</li>

						<li class="list-group-item">
				    		<a class="nav-link" href="../modules/add_patient.php"><i class="fas fa-plus" aria-hidden="true"></i>  Add Patient</a>
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
	<!-- Dashboard -->
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
						<div class="card">
				<div class="card-body card-body-header">
					<h5><i class="fas fa-notes-medical"></i> Annual Physical Records</h5>
				</div>
			</div>
				</div>
			</div>


			<div style="margin-top: 5px;">
				<p><a href="../modules/add_physical_examination_patient.php?id=<?php echo $row['id']; ?>"><i class="fas fa-plus"></i> Add Physical Examination</a></p>
			</div>
		<?php 

		$query = "SELECT * FROM physical_examination_tbl WHERE patient_id=$id;";
		$result = mysqli_query($conn, $query);?>
			<!-- Table -->
			<div>
				<div class="card card-body-margins">
					<div class="card-body card-body-header">
							<div class="col-md-12">
						<table id="logs_data" class="table table-hover">
							<thead>	
								<tr>
									<td>Records</td>
								</tr>
							</thead>
					<?php while($row = mysqli_fetch_array($result)) { ?>
							<tr>
								<td><a href="view_full_annual_physical_record.php?id=<?php echo $row['id']; ?>"><?php echo $row["date_recorded"]; ?></a></td>
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
		    $('#logs_data').DataTable({
		    	"order": [[ 0, "desc" ]]
		    });
		});
		</script>

<?php 
include '../includes/footer.php';
 ?>
