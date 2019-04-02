<?php 
include '../header-include.php';
include '../includes/db.php';
include '../process/delete_imaging_process.php';
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
          <a class="nav-link" href="../view_patient_profile/medical_laboratories.php?id=<?php echo $id ?>">Imaging</a>
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
              <a class="nav-link" href="attach_medical_records.php?id=<?php echo $id ?>"><i class="fas fa-file-upload"></i> Medical Records</a> 
            </li>


            <li class="list-group-item">
              <a class="nav-link" href="annual_physical_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i> Physical Records</a>
            </li>

            <li class="list-group-item">
              <a class="nav-link" href="medical_profile_records.php?id=<?php echo $id ?>"><i class="far fa-user"></i> Medical Profile</a>  
            </li>
            <li class="list-group-item">
              <a class="nav-link" href="medical_certificate.php?id=<?php echo $id ?>"><i class="fas fa-vials"></i> Medical Certificate</a>  
            </li>

            <li class="list-group-item">
              <a class="nav-link" href="medical_laboratories.php?id=<?php echo $id ?>"><i class="fas fa-vials"></i> Medical Laboratories</a>  
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
              <a class="nav-link" href="attach_medical_records.php?id=<?php echo $id ?>"><i class="fas fa-file-upload"></i> Medical Records</a> 
            </li>

            <li class="list-group-item">
              <a class="nav-link" href="annual_physical_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i> Physical Records</a>
            </li>
            <li class="list-group-item">
              <a class="nav-link" href="medical_certificate.php?id=<?php echo $id ?>"><i class="fas fa-vials"></i> Medical Certificate</a>  
            </li>

            <li class="list-group-item">
              <a class="nav-link" href="medical_laboratories.php?id=<?php echo $id ?>"><i class="fas fa-vials"></i> Medical Laboratories</a>  
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
    <div class="col-md-9">
      <?php  
      if (isset($_POST["imaging"])) {
        $filetmp = $_FILES["imaging_img"] ["tmp_name"];
        $filename = $_FILES["imaging_img"] ["name"];
        $filetype = $_FILES["imaging_img"] ["type"];
        $filepath = "../photos/" . $filename;

        move_uploaded_file($filetmp, $filepath);

        $sql = "INSERT INTO imaging_tbl (patient_id, image_name, image_path, image_type) VALUES ($id,'$filename', '$filepath', '$filetype')";
        if ($conn->query($sql) === TRUE) {
          echo "<script>alert('Image successfully uploaded! ');</script>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;  
        } 
       }
      ?> 
      <?php

      $mysql_query = "SELECT * FROM imaging_tbl WHERE patient_id = $id";

      $img = mysqli_query($conn, $mysql_query); ?>

      <div class="card">
        <div class="card-body card-body-header">
          <h5><i class="fas fa-x-ray"></i> Imaging</h5>
           <small style="color: red;"><i>You can upload the X-RAY and ECG results here </i></small>
        </div>
      </div>

      <div class="gallery">
      <?php
      while($image_result = mysqli_fetch_array($img)) { ?>
        <hr>
          <a>
            <img src="../photos/<?php echo $image_result['image_path']; ?>" height="300" width="250">
          </a>
                 <div>
            <button class="btn btn-danger" data-toggle="modal" data-target="#delete_imaging" data-i_id="<?php echo $image_result['id']; ?>"><i class="fas fa-trash"></i></button>
        </div>
      <?php  
      }
      ?>
    </div>
      <div class="row">
        <div class="col-md-8 offset-6">
            <form class="form-inline" method="post" enctype="multipart/form-data">
              <div class="form-group mx-sm-1 mb-1">
                <input type="file" class="form-control-file" id="image" name="imaging_img">
                <br>  
              </div>
              <input type="submit" class="btn btn-primary mb-2" id="insert" value="Upload" name="imaging">
            </form>
        </div>
        </div>
      </div>


 <script>  
//Insert Image
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File! It only accept .gif , .png, .jpg, .jpeg');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 }); 

//View image 
$('img').zoomify();
 </script> 

<?php 
include '../includes/footer.php';
 ?>
