<?php 
include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
?>
<div class="container">
<?php 

$id = $_GET['id'];

$result = $conn->query("SELECT firstname, lastname, gender, patient_address, patient_number, birthdate, department, position, civil_status, blood_type FROM patient_pd_tbl WHERE id=$id");

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
              <a class="nav-link" href="../view_patient_profile/medical_profile_records.php?id=<?php echo $id ?>"><i class="fas fa-notes-medical"></i>Medical Profile</a> 
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
    <div class="row">
      <div class="col-md-12">
        <form method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleFormControlFile1">Attach a file</label>
        <input type="file" class="form-control-file" id="image" name="medical_cert_img">
        <br>
        <input type="submit" class="btn btn-primary" id="insert" value="Upload" name="med_cert_submit">
      </div>
    </form>
      </div>
    </div>
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

    $image_result = $conn->query("SELECT * FROM medical_cert_tbl WHERE patient_id = $id");

    $img = mysqli_fetch_assoc($image_result);

    if ($image_result->num_rows > 0 ) { ?>
        <tr>
          <td><img src="../photos/<?php echo $img['image_path']; ?>" height= "700" width="700"></td>
        </tr>
    <?php  
    }
    ?>
</div>

 <script>  
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
 </script> 

<?php 
include '../includes/footer.php';
 ?>
