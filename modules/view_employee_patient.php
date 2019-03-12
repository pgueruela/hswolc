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
          <a class="nav-link" href="view_employee_patient"><i class="fas fa-eye"></i> View Employees</a>
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

		<div class="col-md-9">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-body-margins">
					<div class="card-body card-body-header">
						<h4>Employees</h4>
					</div>
				</div>
			</div>
		</div>

		<?php 
		$query = "SELECT * FROM patient_pd_tbl WHERE position ='Employee' ORDER BY id DESC";
		$result = mysqli_query($conn, $query);
		?>
		<!-- Table -->
		<div>
			<div class="card card-body-header">
				<div class="card-body">
					<div class="row">
				<div class="col-md-12">
					<table id="employee_data" class="table table-hover">
						<thead>
							<tr>
								<td>View</td>
								<td>Consultation</td>
								<td>Physical Examination</td>
								<td>Medical Profile</td>
							</tr>
						</thead>
				<?php while($row = mysqli_fetch_array($result)) { ?>
						<tr>
							<td><a href="../modules/sidebar_view_patient_profile.php?id=<?php echo $row['id']; ?>"><?php echo $row["firstname"]. " " . $row["lastname"]; ?></a></td>
							<th><a href="../modules/add_consultation_patient.php?id=<?php echo $row['id']; ?>"><i class="fas fa-plus"></i> Add</a></th>
							<th><a href="../modules/add_physical_examination_patient.php?id=<?php echo $row['id']; ?>"><i class="fas fa-plus"></i> Add</a></th>
							<th><a href="../modules/emp_medical_profile.php?id=<?php echo $row['id']; ?>"><i class="fas fa-plus"></i> Add</a></th>
						</tr>		
				<?php 
				}
				 ?>
					</table>
				</div>
			</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<script>
$(document).ready( function() {
    $('#employee_data').DataTable();
});
</script>

 <?php 
//includes footer
 include '../includes/footer.php';

  ?>
 