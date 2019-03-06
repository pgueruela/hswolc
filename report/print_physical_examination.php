<?php 
include '../header-include.php';
include '../includes/db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT phy.*, pt.* FROM physical_examination_tbl as phy
LEFT JOIN patient_pd_tbl AS pt
ON phy.patient_id = pt.id
WHERE phy.id = $id ");

$row = mysqli_fetch_assoc($result);
?>

<div class="container">

	<div class="row">
		<div class="col-md-4 offset-4">
			<div style="line-height: 1.5px; margin-top: 50px; text-align: center;">
				<p><b>School Health Record</b></p>
				<p><b>Annnual Physical Examination</b></p>
				<p><b>Lorma Colleges</b></p>
				<p><b>Carlatan, San Fernando City, La Union</b></p>
			</div>
		</div>
	</div>

	<div style="margin-top: 20px;" class="personal-data">
		<div class="row">
			<div class="col-md-4 offset-2">
				<p>Name: <b> <?php echo $row['firstname'] . " " . $row['lastname']; ?></b></p>
			</div>
			<div class="col-md-2">
				<p>Age: <b> <?php echo $row['birthdate']; ?></b></p>
			</div>
			<div class="col-md-2">
				<p>Sex: <b> <?php echo $row['gender']; ?></b></p>
			</div>
		</div>	
	</div>

	<div class="personal-data">
		<div class="row">
			<div class="col-md-4 offset-2">
				<p>Address: <b><?php echo $row['patient_address']; ?></b></p>
			</div>
			<div class="col-md-3">
				<p>Contact # : <b><?php echo $row['patient_number']; ?></b></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 offset-2">
				<p>Contact Person in Case of Emergency: <b><?php echo $row['contact_person']; ?></b></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 offset-2">
				<p>Contact# : <b><?php echo $row['person_contact_emergency_number']; ?></b></p>
			</div>
		</div>	
	</div>
	<hr>

	<div class="vital-sign">
			<div class="row">
			<div class="col-md-2 offset-2">
				<p>BP: <b><?php echo $row['blood_pressure']; ?></b></p>
			</div>
			<div class="col-md-2">
				<p>Temp: <b><?php echo $row['temperature']; ?></b></p>
			</div>
			<div class="col-md-2">
				<p>Heart Rate: <b><?php echo $row['heart_rate']; ?></b></p>
			</div>
			<div class="col-md-2">
				<p>RR: <b><?php echo $row['respiratory_rate']; ?></b></p>
			</div>
		</div>
	</div>

	<div class="characteristics">
			<div class="row">
			<div class="col-md-2 offset-2">
				<p>Height: <b><?php echo $row['patient_height']; ?></b></p>
			</div>
			<div class="col-md-2">
				<p>Weight: <b><?php echo $row['patient_weight']; ?></b></p>
			</div>
			<div class="col-md-2">
				<p>BMI: <b><?php echo $row['bmi']; ?></b></p>
			</div>
			<div class="col-md-2">
				<p>Blood Type: <b><?php echo $row['blood_type']; ?></b></p>
			</div>
		</div>
	</div>

	<div class="ears-eyes">
		<div class="row">
 			<div class="col-md-3 offset-2">
 				<p>Ears: OS No Glasses: <b><?php echo $row['os_no_glasses']; ?></b></p>
 			</div>

 			<div class="col-md-3">
 				<p>OS with Glasses: <b><?php echo $row['os_with_glasses']; ?></b></p>
 			</div>
 		</div>

 		 <div class="row">
 			<div class="col-md-3 offset-2">
 				<p>OD No Glasses: <b><?php echo $row['os_no_glasses']; ?></b></p>
 			</div>
 			<div class="col-md-3">
 				<p>OD with Glasses: <b><?php echo $row['os_with_glasses']; ?></b></p>
 			</div>
 		</div>

 		<div class="row">
 			<div class="col-md-3 offset-2">
 							<p>Eyes: Right: <b><?php echo $row['ears_right']; ?></b></p>
 			</div>

 			<div class="col-md-3">
 							<p>Left: <b><?php echo $row['ears_left']; ?></b></p>
 			</div>
 		</div>
	</div>
	<hr>
	<div class="">
		<div class="row">
			<div class="col-md-4 offset-2">
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
	<div class="row">
		<div class="col-md-10 offset-2">
			<div>
				<b><p>Remarks: </b> <?php echo $row['remarks']; ?></p>
			</div>
		</div>
	</div>
 	<hr>
 	<div class="row">
 		<div class="col-md-10 offset-2">
 		<p><b>Assesment</b></p>
 	</div>
 	</div>
 	<div class="row">
 		<div class="col-md-10 offset-2">
 		<p>Essentially Normal Physical Examination Findings: <b><?php echo $row['essentially']; ?></b> </p>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-md-10 offset-2">
 			<p>With Limitation of activities: <b><?php echo $row['limitation']; ?></b> </p>
 		</div>
 	</div>
 	<div class="row">
 		<div class="col-md-10 offset-2">
 			<p>Requires special attention: <b><?php echo $row['special_attention']; ?></b> </p>
 		</div>
 	</div>
 	<hr>
 	<div class="row">
 		<div class="col-md-10 offset-2">
 			<p>Reccomendation: <b><?php echo $row['reccomendation']; ?></b></p>
 		</div>
 	</div>

 	<div class="assesed_by">
 		 	<div class="row">
 		<div class="col-md-4 offset-2">
 			<p>Date Examined: <b><?php echo $row['date_recorded']; ?></b> </p>
 		</div>

 		<div class="col-md-4 offset-2">
 			<p>Physician: <b><?php echo $row['assesed_by']; ?></b></p>
 		</div>
 	</div>
 	</div>
</div>
