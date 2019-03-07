<?php 
include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
?>
<div class="container">
<?php 

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM patient_pd_tbl WHERE id=$id");

  $row = mysqli_fetch_assoc($result); ?>
  <div class="row">

  <?php 
  if ($row['position']== 'Employee') { ?>

    <div class="col-md-3 side-panel">
      <div class="accordion" id="patient_accordion" aria-expanded="true">
        <div class="card card-side-panel">
          <div class="card-header card-header-side-panel" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Patient Informations
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
              <a class="nav-link" href="../view_patient_profile/consultation.php?id=<?php echo $id ?>"><i class="fas fa-stethoscope"></i> Consultation Records</a>
            </li>
            <li class="list-group-item">
              <a class="nav-link" href="../view_patient_profile/annual_physical_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i> Physical Records</a> 
            </li>
            <li class="list-group-item">
              <a class="nav-link" href="../view_patient_profile/medical_profile_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i> Medical Profile</a> 
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
    </div>
  <?php
  }else{ ?>
    <div class="col-md-3 side-panel">
      <div class="accordion" id="patient_accordion" aria-expanded="true">
        <div class="card card-side-panel">
          <div class="card-header card-header-side-panel" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link dropdown-toggle" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Patient Informations
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
              <a class="nav-link" href="../view_patient_profile/consultation.php?id=<?php echo $id ?>"><i class="fas fa-stethoscope"></i> Consultation Records</a>
            </li>
            <li class="list-group-item">
              <a class="nav-link" href="../view_patient_profile/annual_physical_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i> Physical Records</a> 
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
    </div>
  <?php   
  }
  ?>
    <div class="col-md-9">
      <?php  
      if (isset($_POST["med_cert_submit"])) {
        $filetmp = $_FILES["medical_cert_img"] ["tmp_name"];
        $filename = $_FILES["medical_cert_img"] ["name"];
        $filetype = $_FILES["medical_cert_img"] ["type"];
        $filepath = "../photos/" . $filename;

        move_uploaded_file($filetmp, $filepath);

        $sql = "INSERT INTO medical_cert_tbl (patient_id, image_name, image_path, image_type) VALUES ($id,'$filename', '$filepath', '$filetype')";
        if ($conn->query($sql) === TRUE) {
          echo "<script>alert('Image successfully uploaded! ');</script>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;  
        } 
       }
      ?> 
      <?php

      $mysql_query = "SELECT * FROM medical_cert_tbl WHERE patient_id = $id";

      $img = mysqli_query($conn, $mysql_query); ?>

      <div class="card">
        <div class="card-body card-body-header">
          <h5><i class="fas fa-certificate"></i> Medical Certificate</h5>
        </div>
      </div>

      <div>
        <?php
        while($image_result = mysqli_fetch_array($img)) { ?>
            <ul class="nav">
              <li class="nav-item"><img src="../photos/<?php echo $image_result['image_path']; ?>" height= "200" width="200"></li>
            </ul>
            <br>
        <?php  
        }
        ?>

        <form class="form-inline" method="post" enctype="multipart/form-data">
        <div class="form-group mx-sm-1 mb-1">
          <input type="file" class="form-control-file" id="image" name="medical_cert_img">
          <br>  
        </div>
        <input type="submit" class="btn btn-primary mb-2" id="insert" value="Upload" name="med_cert_submit">
        </form>
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
 </script> 

<?php 
include '../includes/footer.php';
 ?>
