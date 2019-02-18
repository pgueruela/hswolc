<?php 

include '../includes/header.php';

include '../includes/db.php';

include '../modules/sidebar_view_patient_profile.php';
?>

<div class="col-md-9">

<?php $id = $_GET['id']; ?>
<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Attach a file</label>
    <input type="file" class="form-control-file" id="image" name="medical_cert_img">
    <br>
    <input type="submit" class="btn btn-primary" id="insert" value="Upload" name="med_cert_submit">
  </div>
</form>
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
 }else{

 	$query = "SELECT * FROM medical_lab_tbl WHERE id=$id";
 	$result = mysqli_query($conn, $query);?>
  <h2>Medical Cert</h2>
 	<table>
  	<?php
  		while ($row = mysqli_fetch_array($result)) {?>
  			<tr>
  				<td><img src="<?php echo $row['image_path']; ?>" height = "300" width = "300"></td>
  			</tr>
 	</table>
 <?php  
 		}	
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
                     alert('Invalid Image File');  
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
