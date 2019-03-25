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
          <a class="nav-link" href="visits_report.php"> Visits Report</a>
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
  			<div class="card card-body-margins">
  				<div class="card-body card-body-header">
  					<h4><i class="fas fa-chart-bar"></i> Visit Report</h4>
  				 </div>
  			</div>

  			<div class="card">
  				
  				<div class="card-body">
                <!-- Daily Visit Query -->
                <?php  
                
                $query = "SELECT COUNT(*) FROM visit_tbl WHERE date_recorded >= curdate()";
                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result)) { ?>
                  <p><a href="../report/daily_visit_report.php">Daily Visit for this month: <b> <?php printf("%s\n",$row[0]); ?> </b></p></a> 
                <?php 
                }
                ?> 

                <!-- Weekly visit query -->
                <?php  
                
                $query = "SELECT COUNT(*) FROM visit_tbl WHERE YEARWEEK(date_recorded) = yearweek(curdate())";
                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result)) { ?>
                  <p><a href="../report/weekly_visit_report.php">Weekly Visit for this month: <b> <?php printf("%s\n",$row[0]); ?> </b></a></p>
                <?php 
                }
                ?> 

                <!-- Monthly visit query -->
                <?php  
                
                $query = "SELECT COUNT(*) FROM visit_tbl WHERE YEAR(date_recorded) and MONTH(date_recorded) = month(curdate())";
                $result = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result)) { ?>
                  <p><a href="../report/monthly_visit_report.php">Monthly Visit: <b> <?php printf("%s\n",$row[0]); ?></b></a></p>
                <?php 
                }
                ?> 
          </div>
        </div>
      </div>
    </div>
    
    <?php 
      //includes footer
      include '../includes/footer.php';
    ?>
  </div>


       

