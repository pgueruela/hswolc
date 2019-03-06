<?php 

include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';
?>
 <div class="container">
 
  <?php   
  $id = $_GET['id'];
  $result = $conn->query("SELECT * FROM physical_examination_tbl WHERE id=$id");

  $row = mysqli_fetch_assoc($result);?>
		<div class="col-md-9">
			<div class="card">
			 	<div class="card-body">
 					<!-- VS -->
 						<div class="row">
 						<div class="col-md-12">
 							<small style="color: red;"><i>This annual physical record was recorded on <?php echo $row['date_recorded']; ?></i></small>
 						</div>
 					</div>
 					<hr>
 					<div class="row">
 						<div class="col-md-4">
 							<p>Temperature: <b><?php echo $row['temperature']; ?></b> </p>
 						</div>
 						<div class="col-md-4">
 							<p>Blood Pressure: <b><?php echo $row['blood_pressure']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p>Heart Rate: <b><?php echo $row['heart_rate']; ?></b></p>
 						</div>
 					</div>

 					<!-- Measure -->
 					<div class="row">
 						<div class="col-md-4">
 							<p>Respiratory Rate: <b><?php echo $row['respiratory_rate']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p>Height: <b><?php echo $row['patient_height']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p>Weight: <b><?php echo $row['patient_height']; ?></b></p>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-4">
 							<p>BMI: <b><?php echo $row['bmi']; ?></b></p>
 						</div>
 					</div>
 					<hr>
 					<p>Eyes</p>
 					<div class="row">
 						<div class="col-md-4">
 							<p>OS No Glasses: <b><?php echo $row['os_no_glasses']; ?></b></p>
 						</div>

 						<div class="col-md-4">
 							<p>OS with Glasses: <b><?php echo $row['os_with_glasses']; ?></b></p>
 						</div>
 					</div>

 					 <div class="row">
 						<div class="col-md-4">
 							<p>OD No Glasses: <b><?php echo $row['os_no_glasses']; ?></b></p>
 						</div>
 						<div class="col-md-4">
 							<p>OD with Glasses: <b><?php echo $row['os_with_glasses']; ?></b></p>
 						</div>
 					</div>
 					 <hr>
 					<p>Ears</p>
 					<div class="row">
 						<div class="col-md-4">
 							<p>Right: <b><?php echo $row['ears_right']; ?></b></p>
 						</div>

 						<div class="col-md-4">
 							<p>Left: <b><?php echo $row['ears_left']; ?></b></p>
 						</div>
 					</div>
 					<hr>

	 				<div class="">
						<div class="row">
							<div class="col-md-6">
								<p>Skin: <b><?php echo $row['skin']; ?></b></p>
								<p>Mouth: <b><?php echo $row['mouth']; ?></b></p>
								<p>Nose: <b><?php echo $row['nose']; ?></b></p>
								<p>Pharynx: <b><?php echo $row['pharynx']; ?></b></p>
								<p>Tonsils: <b><?php echo $row['tonsils']; ?></b></p>
								<p>Gums: <b><?php echo $row['gums']; ?></b></p>
								<p>Lymph: <b><?php echo $row['lymph_nodes']; ?></b></p>
								<p>Neck: <b><?php echo $row['neck']; ?></b></p>
								<p>Chest: <b><?php echo $row['chest']; ?></b></p>
				 			</div>

				 			<div class="col-md-6">
				 				<p>Lungs: <b><?php echo $row['lungs']; ?></b></p>
								<p>Heart: <b><?php echo $row['heart']; ?></b></p>
								<p>Abdomen: <b><?php echo $row['abdomen']; ?></b></p>
								<p>Rectum: <b><?php echo $row['rectum']; ?></b> </p>
								<p>Genitalia:<b><?php echo $row['genitalia']; ?></b> </p>
								<p>Spine: <b><?php echo $row['spine']; ?></b></p>
								<p>Arms:<b><?php echo $row['arms']; ?></b> </p>
								<p>Legs: <b><?php echo $row['legs']; ?></b></p>
								<p>Feet: <b><?php echo $row['feet']; ?></b></p>
				 			</div>
						</div>				
					</div>
					<hr>
					 <div class="row">
 						<div class="col-md-12">
 							<p>Remarks: <b><?php echo $row['remarks']; ?></b> </p>
 						</div>
 					</div>
 					<div class="row">
 						<div class="col-md-12">
 							<p>Essentially Normal Physical Examination Findings: <b><?php echo $row['essentially']; ?></b> </p>
 						</div>
 					</div><div class="row">
 						<div class="col-md-12">
 							<p>With Limitation of activities: <b><?php echo $row['limitation']; ?></b> </p>
 						</div>
 					</div><div class="row">
 						<div class="col-md-12">
 							<p>Requires special attention: <b><?php echo $row['special_attention']; ?></b> </p>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-md-12">
 							<p>Reccomendation: <b><?php echo $row['reccomendation']; ?></b></p>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-md-12">
 							<p>Assesed by: <b><?php echo $row['assesed_by']; ?></b> </p>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-md-1 offset-11">
 							<a href="../report/print_physical_examination.php?id=<?php echo $id; ?>"><i style="font-size: 25px;" class="fas fa-print"></i></a>
 						</div>
 					</div>
 				</div>
			</div>
 		</div>
	</div>
</div>