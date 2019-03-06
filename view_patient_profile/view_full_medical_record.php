<?php 

include '../header-include.php';
include '../includes/db.php';
include '../includes/admin_navigationbar.php';

$id = $_GET['id'];

$result = $conn->query("SELECT emp.*, pt.* FROM employee_medical_profile as emp
						LEFT JOIN patient_pd_tbl AS pt
						ON emp.patient_id = pt.id
						WHERE emp.id = $id ");

$row = mysqli_fetch_assoc($result);
?>
<div class="container">
	<?php if ($row['gender'] == 'M') { ?>
		<!-- male form -->
		<div class="row">
			<div class="col-md-9">
				<div class="card">
					<div class="card-body">
						<div class="row">
	 						<div class="col-md-12">
	 							<small style="color: red;"><i>This medical profile record was recorded on <?php echo $row['date_recorded']; ?></i></small>
	 						</div>
 						</div>
 						<hr>
 						<div class="vital-sign">
 							<div class="row">
 								<div class="col-md-6">
 									<p>BLOOD TYPE: <b><?php echo $row['blood_type']; ?></b></p>
 									<p>BLOOD PRESSURE: <b><?php echo $row['blood_pressure']; ?></b></p>
 									<p>BODY MASS INDEX: <b><?php echo $row['bmi']; ?></b></p>
 								</div>

 								<div class="col-md-6">
 									<p>WEIGHT: <b><?php echo $row['patient_weight']; ?></b></p>
 									<p>HEIGHT: <b><?php echo $row['patient_height']; ?></b></p>
 								</div>
 							</div>
 						</div>
 						<hr>

 						<div class="">
 							<div class="row">
 								<div class="col-md-12">
 									<p>MEDICAL HISTORY:<b><?php echo $row['medical_history']; ?></b></p>
 									<p>PAST ILLNESS:<b><?php echo $row['past_illness']; ?></b></p>
 									<p>HOSPITALIZATION HISTORY:<b><?php echo $row['hospitalization_history']; ?></b></p>
 									<p>ARE YOU CURRENTLT TAKING-IN ANY DRUG/S:<b><?php echo $row['currently_taking_drugs']; ?></b></p>
 									<p>IF YES, STATE THE DRUG'S NAME: <b><?php echo $row['drug_name']; ?></b></p>
 									<p>WHY ARE YOU TAKING THE DRUG/S?: <b><?php echo $row['why_taking_drugs']; ?></b></p>
 									<p>DO YOU HAVE ANY ALLERGIES TO DRUG/S: <b><?php echo $row['allergies_to_drugs']; ?></b></p>
 									<p>IF YES, STATE THE NAME OF THE DRUG/S: <b><?php echo $row['name_drug']; ?></b></p>
 									<p>DO YOU HAVE YOUR OWN/FAMILY DOCTOR?:  <b><?php echo $row['family_doctor']; ?></b></p>
 									<p>NAME OF DOCTOR:  <b><?php echo $row['doctor_name']; ?></b></p>
 									<p>ADDRESS:  <b><?php echo $row['doctor_add']; ?></b></p>
 									<p>TEL#:  <b><?php echo $row['doctor_num']; ?></b></p>
 									<p>WOULD YOU LIKE TO BE A BLOOD DONOR? <b><?php echo $row['blood_donor']; ?></b></p>
 								</div>
 							</div>
 						</div>


 						<div class="">
 							<div class="row">
 								<div class="col-md-6">
 									<p>Assesed by: <b><?php echo $row['assesed_by']; ?></b></p>
 								</div>
 							</div>
 						</div>

						<div class="row">
	 						<div class="col-md-1 offset-11">
	 							<a href="../report/print_employee_medical_profile.php?id=<?php echo $id; ?>"><i style="font-size: 25px;" class="fas fa-print"></i></a>
	 						</div>
 						</div>

					</div>
				</div>
			</div>
		</div>

	<?php } else { ?>
		<!-- feMale form -->
			<div class="row">
			<div class="col-md-9">
				<div class="card">
					<div class="card-body">
						<div class="row">
 						<div class="col-md-12">
 							<small style="color: red;"><i>This medical profile record was recorded on <?php echo $row['date_recorded']; ?></i></small>
 						</div>
 					</div>
 					<hr>
 					 <div class="vital-sign">
 							<div class="row">
 								<div class="col-md-6">
 									<p>BLOOD TYPE: <b><?php echo $row['blood_type']; ?></b></p>
 									<p>BLOOD PRESSURE: <b><?php echo $row['blood_pressure']; ?></b></p>
 									<p>BODY MASS INDEX: <b><?php echo $row['bmi']; ?></b></p>
 								</div>

 								<div class="col-md-6">
 									<p>WEIGHT: <b><?php echo $row['patient_weight']; ?></b></p>
 									<p>HEIGHT: <b><?php echo $row['patient_height']; ?></b></p>
 								</div>
 							</div>
 						</div>

 						<hr>
 						<div class="">
 							<div class="row">
 								<div class="col-md-12">
 									<p>MEDICAL HISTORY:<b><?php echo $row['medical_history']; ?></b></p>
 									<p>PAST ILLNESS:<b><?php echo $row['past_illness']; ?></b></p>
 									<p>HOSPITALIZATION HISTORY:<b><?php echo $row['hospitalization_history']; ?></b></p>
 									<p>ARE YOU CURRENTLT TAKING-IN ANY DRUG/S:<b><?php echo $row['currently_taking_drugs']; ?></b></p>
 									<p>IF YES, STATE THE DRUG'S NAME: <b><?php echo $row['drug_name']; ?></b></p>
 									<p>WHY ARE YOU TAKING THE DRUG/S?: <b><?php echo $row['why_taking_drugs']; ?></b></p>
 									<p>DO YOU HAVE ANY ALLERGIES TO DRUG/S: <b><?php echo $row['allergies_to_drugs']; ?></b></p>
 									<p>IF YES, STATE THE NAME OF THE DRUG/S: <b><?php echo $row['name_drug']; ?></b></p>
 									<p>DO YOU HAVE YOUR OWN/FAMILY DOCTOR?:  <b><?php echo $row['family_doctor']; ?></b></p>
 									<p>NAME OF DOCTOR:  <b><?php echo $row['doctor_name']; ?></b></p>
 									<p>ADDRESS:  <b><?php echo $row['doctor_add']; ?></b></p>
 									<p>TEL#:  <b><?php echo $row['doctor_num']; ?></b></p>
 									<p>WOULD YOU LIKE TO BE A BLOOD DONOR? <b><?php echo $row['blood_donor']; ?></b></p>
 								</div>
 							</div>
 						</div>
 						<hr>

 						<div class="">
 							<div class="row">
 								<div class="col-md-12">
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
 						</div>


 						<div class="">
 							<div class="row">
 								<div class="col-md-6">
 									<p>Assesed by: <b><?php echo $row['assesed_by']; ?></b></p>
 								</div>
 							</div>
 						</div>

 						<div class="row">
	 						<div class="col-md-1 offset-11">
	 							<a href="../report/print_employee_medical_profile.php?id=<?php echo $id; ?>"><i style="font-size: 25px;" class="fas fa-print"></i></a>
	 						</div>
 						</div>
					</div>
				</div>
			</div>
		</div>
	<?php
	} 
	?>
</div>


