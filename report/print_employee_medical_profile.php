<?php 

include '../header-include.php';
include '../includes/db.php';
$id = $_GET['id'];

$result = $conn->query("SELECT emp.*, pt.* FROM employee_medical_profile as emp
						LEFT JOIN patient_pd_tbl AS pt
						ON emp.patient_id = pt.id
						WHERE emp.id = $id ");

$row = mysqli_fetch_assoc($result);
?>

<div class="container">
	<?php 
	if ($row['gender'] =='M') { ?>
		<div style="line-height: 1.5px;margin-top: 50px;text-align: center;" class="emp-title">
			<div class="row">
				<div class="col-md-4 offset-4">
					<p><b>Lorma Colleges</b></p>
					<p><b>San Fernando City, La Union</b></p>
				</div>
			</div>
		</div>

		<div style="text-align: center;" class="emp-second-title">
			<div class="row">
				<div class="col-md-4 offset-4">
					<p><b>College Clinic</b></p>
					<p><b>EMPLOYEE'S MEDICAL PROFILE</b></p>
				</div>
			</div>
		</div>

		<div class="">
			<div class="row">
				<div class="col-md-4 offset-2">
					<p>NAME: <b><?php echo $row['firstname']. " " . $row['lastname']; ?></b> </p>
					<p>ADDRESS:  <b><?php echo $row['patient_address']; ?></b> </p>
					<p>CONTACT #:  <b><?php echo $row['patient_number']; ?></b></p>
					<p>POSITION: <b><?php echo $row['position']; ?></b> </p>
					<p>PERSON/S TO CONTACT IN CASE/S OF EMERGENCY: <b><?php echo $row['contact_person']; ?></b> </p>
					<p>CONTACT #: <b><?php echo $row['person_contact_emergency_number']; ?></b></p>
				</div>
				<div class="col-md-4 offset-2">
					<p>SEX: <b><?php echo $row['gender']; ?></b></p>
					<p>AGE: <b><?php echo $row['age']; ?></b> </p>
					<p>STATUS: <b><?php echo $row['civil_status']; ?></b></p>
				</div>
			</div>
			<hr>
			<div class="vital-signs">
				<div class="row">
					<div class="col-md-4 offset-2">
					<p>BLOOD TYPE: <b><?php echo $row['blood_type']; ?></b> </p>
					<p>BLOOD PRESSURE: <b><?php echo $row['blood_pressure']; ?></b></p>
					<p>BODY MASS INDEX (BMI) <b><?php echo $row['bmi']; ?></b></p>
				</div>
				<div class="col-md-4 offset-2">
					<p>WEIGHT: <b><?php echo $row['patient_weight']; ?></b> </p>
					<p>HEIGHT:  <b><?php echo $row['patient_height']; ?></b></p>
				</div>
				</div>
			</div>
			<hr>

			<div>
				<div class="row">
					<div class="col-md-10 offset-2">
						<p>MEDICAL HISTORY:<b><?php echo $row['medical_history']; ?></b></p>
 						<p>PAST ILLNESS:<b><?php echo $row['past_illness']; ?></b></p>
 						<p>HOSPITALIZATION HISTORY:<b><?php echo $row['hospitalization_history']; ?></b></p>
 						<p>ARE YOU CURRENTLT TAKING-IN ANY DRUG/S:<b><?php echo $row['currently_taking_drugs']; ?></b></p>
 						<p>IF YES, STATE THE DRUG'S NAME: <b><?php echo $row['drug_name']; ?></b></p>
 						<p>WHY ARE YOU TAKING THE DRUG/S?: <b><?php echo $row['why_taking_drugs']; ?></b></p>
 						<p>DO YOU HAVE ANY ALLERGIES TO DRUG/S: <b><?php echo $row['allergies_to_drugs']; ?></b></p>
 						<p>IF YES, STATE THE NAME OF THE DRUG/S: <b><?php echo $row['name_drug']; ?></b></p>
 						<p>NAME OF DOCTOR:  <b><?php echo $row['doctor_name']; ?></b></p>
 						<p>ADDRESS:  <b><?php echo $row['doctor_add']; ?></b></p>
 						<p>TEL#:  <b><?php echo $row['doctor_num']; ?></b></p>
 						<p>WOULD YOU LIKE TO BE A BLOOD DONOR? <b><?php echo $row['blood_donor']; ?></b></p>
					</div>
				</div>
			</div>
 				<div class="">
 					<div class="row">
 						<div class="col-md-4 offset-2">
 							<p>Date Recorded: <b><?php echo $row['date_recorded']; ?></b></p>
 						</div>
 						<div class="col-md-4 offset-2">
 							<p>Assesed by: <b><?php echo $row['assesed_by']; ?></b></p>
 						</div>
 					</div>
 				</div>
			</div>
	<?php
	}  else { ?>
				<div style="line-height: 1.5px;margin-top: 50px;text-align: center;" class="emp-title">
			<div class="row">
				<div class="col-md-4 offset-4">
					<p><b>Lorma Colleges</b></p>
					<p><b>San Fernando City, La Union</b></p>
				</div>
			</div>
		</div>

		<div style="text-align: center; line-height: 1.5px;" class="emp-second-title">
			<div class="row">
				<div class="col-md-4 offset-4">
					<p><b>College Clinic</b></p>
					<p><b>EMPLOYEE'S MEDICAL PROFILE</b></p>
				</div>
			</div>
		</div>

		<div class="">
			<div class="row">
				<div class="col-md-4 offset-2">
					<p>NAME: <b><?php echo $row['firstname']. " " . $row['lastname']; ?></b> </p>
					<p>ADDRESS:  <b><?php echo $row['patient_address']; ?></b> </p>
					<p>CONTACT #:  <b><?php echo $row['patient_number']; ?></b></p>
					<p>POSITION: <b><?php echo $row['position']; ?></b> </p>
					<p>PERSON/S TO CONTACT IN CASE/S OF EMERGENCY: <b><?php echo $row['contact_person']; ?></b> </p>
					<p>CONTACT #: <b><?php echo $row['person_contact_emergency_number']; ?></b></p>
				</div>
				<div class="col-md-4 offset-2">
					<p>SEX: <b><?php echo $row['gender']; ?></b></p>
					<p>AGE: <b><?php echo $row['birthdate']; ?></b> </p>
					<p>STATUS: <b><?php echo $row['civil_status']; ?></b></p>
				</div>
			</div>
			<hr>
			<div class="vital-signs">
				<div class="row">
					<div class="col-md-4 offset-2">
					<p>BLOOD TYPE: <b><?php echo $row['blood_type']; ?></b> </p>
					<p>BLOOD PRESSURE: <b><?php echo $row['blood_pressure']; ?></b></p>
					<p>BODY MASS INDEX (BMI) <b><?php echo $row['bmi']; ?></b></p>
				</div>
				<div class="col-md-4 offset-2">
					<p>WEIGHT: <b><?php echo $row['patient_weight']; ?></b> </p>
					<p>HEIGHT:  <b><?php echo $row['patient_height']; ?></b></p>
				</div>
				</div>
			</div>
			<hr>
			<div>
				<div class="row">
					<div class="col-md-10 offset-2">
						<p>MEDICAL HISTORY:<b><?php echo $row['medical_history']; ?></b></p>
 						<p>PAST ILLNESS:<b><?php echo $row['past_illness']; ?></b></p>
 						<p>HOSPITALIZATION HISTORY:<b><?php echo $row['hospitalization_history']; ?></b></p>
 						<p>ARE YOU CURRENTLT TAKING-IN ANY DRUG/S:<b><?php echo $row['currently_taking_drugs']; ?></b></p>
 						<p>IF YES, STATE THE DRUG'S NAME: <b><?php echo $row['drug_name']; ?></b></p>
 						<p>WHY ARE YOU TAKING THE DRUG/S?: <b><?php echo $row['why_taking_drugs']; ?></b></p>
 						<p>DO YOU HAVE ANY ALLERGIES TO DRUG/S: <b><?php echo $row['allergies_to_drugs']; ?></b></p>
 						<p>IF YES, STATE THE NAME OF THE DRUG/S: <b><?php echo $row['name_drug']; ?></b></p>
 						<p>NAME OF DOCTOR:  <b><?php echo $row['doctor_name']; ?></b></p>
 						<p>ADDRESS:  <b><?php echo $row['doctor_add']; ?></b></p>
 						<p>TEL#:  <b><?php echo $row['doctor_num']; ?></b></p>
 						<p>WOULD YOU LIKE TO BE A BLOOD DONOR? <b><?php echo $row['blood_donor']; ?></b></p>
					</div>
				</div>
				<hr>
			</div>

			<div class="">
 				<div class="row">
 					<div class="col-md-10 offset-2">
 						<p>DO YOU PRACTICE SELF-BREAST EXAM?<b><?php echo $row['self_breast_exam']; ?></b></p>
 						<p>HOW OFTEN?<b><?php echo $row['how_often']; ?></b></p>
 						<p>HAD YOU HAD MAMMOGRAPHY<b><?php echo $row['mammography']; ?></b></p>
 						<p>ARE YOU PREGNANT<b><?php echo $row['pregnant']; ?></b></p>
 						<p>(if YES, how many month?)<b><?php echo $row['month_pregnant']; ?></b></p>
 						<p>(if NO, are you using any contraceptive/s)<b><?php echo $row['contraceptives']; ?></b></p>
 						<p>WHAT METHOD DO YOU USE? <b><?php echo $row['method']; ?></b></p>
 						<p>NUMBER OF PREGNANCIES <b><?php echo $row['number_pregnancies']; ?></b></p>
 						<p>HAVE YOU HAD ANY ABORTED PREGNANICES? <b><?php echo $row['number_pregnancies']; ?></b></p>
 						<p>REASON/S: <b><?php echo $row['reasons']; ?></b></p>
 					</div>
 				</div>
 				<div class="">
 					<div class="row">
 						<div class="col-md-4 offset-2">
 							<p>Date Recorded: <b><?php echo $row['date_recorded']; ?></b></p>
 						</div>
 						<div class="col-md-4 offset-2">
 							<p>Assesed by: <b><?php echo $row['assesed_by']; ?></b></p>
 						</div>
 					</div>
 				</div>
			</div>
	<?php
	}
	?>
</div>
