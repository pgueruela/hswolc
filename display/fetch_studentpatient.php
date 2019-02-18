<?php 
include '../includes/db.php';
//Search and display and table 
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM patient_pd_tbl
  WHERE firstname LIKE '%".$search."%' 
  OR lastname LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM patient_pd_tbl WHERE position ='Student' ORDER BY id";
}

$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{ ?>

<div class="col-md-12">
	<table class="table table-bordered">
		    <tr>
		     <th>View</th>
		     <th>Name</th>
		     <th>Contact Number</th>
		     <th>Department</th>
		     <th>Data</th>
		     <th>Consultation</th>
		    </tr>
		 <?php while($row = mysqli_fetch_array($result))
		 {?>
		   <tr>
		    <th><a href="../modules/sidebar_view_patient_profile.php?id=<?php echo $row['id']; ?>">View Profile</a></th>
			<th><?php echo $row['firstname'] . " " . $row['lastname']; ?></th>
			<th><?php echo $row['patient_number']; ?></th>
			<th><?php echo $row['department']; ?></th>
			<th><a href="../process/edit_personal_student_data.php?id=<?php echo $row['id']; ?>">Edit Personal Data</a></th>
			<th><a href="../modules/add_consultation_patient.php?id=<?php echo $row['id']; ?>">Add Consultation</a></th>
		   </tr>
		 <?php
		 }
		 echo $output;
		}
		else
		{
		 echo 'Data Not Found';
		}
		?>
		</table>		
	</div>		
</div>


