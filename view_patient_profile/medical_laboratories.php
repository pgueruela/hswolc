<?php 

include '../includes/header.php';

include '../includes/db.php';

include '../modules/sidebar_view_patient_profile.php';
?>

<div class="col-md-9">

<?php $id = $_GET['id'];
echo $id;
die();
 ?>
<form method="post" action="medical_laboratories.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Attach a file</label>
    <input type="file" class="form-control-file" name="medical_lab_img">
    <br>
    <input type="submit" class="btn btn-primary" value="Upload" name="med_lab_submit">
  </div>
</form>
</div>

<?php 

if (isset($_POST["med_lab_submit"])) {
	$filetmp = $_FILES["medical_lab_img"] ["tmp_name"];
	$filename = $_FILES["medical_lab_img"] ["name"];
	$filetype = $_FILES["medical_lab_img"] ["type"];
	$filepath = "../photos/" . $filename;

	move_uploaded_file($filetmp, $filepath);

	$sql = "INSERT INTO medical_lab_tbl (patient_id, image_name, image_path, image_type) VALUES ($id,'$filename', '$filepath', '$filetype')";
	$result = mysql_query($conn, $sql);

}
 ?>

</div>

<?php 
include '../includes/footer.php';
 ?>
