<?php 

session_start();

include '../includes/header.php';

include '../modules/sidebar_view_patient_profile.php';
?>

<div class="col-md-9">

<!-- <?php $id = $_GET['id']; 

$result = $conn->query("SELECT allergies FROM consultation_tbl WHERE patient_id=$id");

$row = mysqli_fetch_assoc($result);
?> -->
<form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Attach a file</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
</div>


</div>

<?php 
include '../includes/footer.php';
 ?>
