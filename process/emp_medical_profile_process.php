<?php 

include_once '../includes/db.php';

$id = $_GET['id'];

 if (isset($_POST['add_employee_medical_profile'])) {

 	$visit_reason = $_POST['visit_reason'];
	$blood_pressure = $_POST['blood_pressure'];
	$patient_height = $_POST['patient_height'];
	$patient_weight = $_POST['patient_weight'];
	$bmi = $_POST['bmi'];
	$medical_history = $_POST['medical_history'];
	$hospitalization_history = $_POST['hospitalization_history'];
	$currently_taking_drugs = $_POST['currently_taking_drugs'];
	$drug_name = $_POST['drug_name'];
	$why_taking_drugs = $_POST['why_taking_drugs'];
	$allergies_to_drugs  = $_POST['allergies_to_drugs'];
	$name_drug  = $_POST['name_drug'];
	$family_doctor = $_POST['family_doctor'];
	$doctor_name  = $_POST['doctor_name'];
	$doctor_add = $_POST['doctor_add'];
	$doctor_num = $_POST['doctor_num'];
	$blood_donor = $_POST['blood_donor'];
	$self_breast_exam = $_POST['self_breast_exam'];
	$how_often = $_POST['how_often'];
	$mammography = $_POST['mammography'];
	$pregnant = $_POST['pregnant'];
	$month_pregnant = $_POST['month_pregnant'];
	$contraceptives = $_POST['contraceptives'];
	$method = $_POST['method'];
	$number_pregnancies = $_POST['number_pregnancies'];
	$reasons = $_POST['reasons'];
	$aborted_pregnancies = $_POST['aborted_pregnancies'];
	$assesed_by = $_POST['assesed_by'];

	$sql = "INSERT INTO employee_medical_profile (patient_id, blood_pressure, patient_height, patient_weight, bmi, currently_taking_drugs, hospitalization_history, drug_name, why_taking_drugs, allergies_to_drugs, name_drug, family_doctor, doctor_name,doctor_add, doctor_num, blood_donor, self_breast_exam, how_often, mammography, pregnant, month_pregnant, contraceptives, method, number_pregnancies, reasons, aborted_pregnancies)

		VALUES($id, '$blood_pressure', $patient_height, $patient_weight, $bmi, '$currently_taking_drugs', '$hospitalization_history','$drug_name', '$why_taking_drugs', '$allergies_to_drugs', '$name_drug','$family_doctor', '$doctor_name','$doctor_add', '$doctor_num', '$blood_donor', '$self_breast_exam','$how_often', '$mammography', '$pregnant', '$month_pregnant', '$contraceptives' , '$method', '$number_pregnancies', '$reasons', '$aborted_pregnancies');";
	$sql .= "INSERT INTO visit_tbl (patient_id, visit_reason,assesed_by, date_recorded) VALUES ($id, '$visit_reason', '$assesed_by', now())";

	if ($conn->multi_query($sql) === TRUE) {
			 echo "<script> alert('Successfully recorded! '); </script>";
	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

 ?>