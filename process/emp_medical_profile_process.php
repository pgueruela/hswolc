<?php 

include_once '../includes/db.php';

$id = $_REQUEST['id'];

if (isset($_POST['add_employee_medical_profile'])) {

 	$visit_reason = $_POST['visit_reason'];
	$blood_pressure = $_POST['blood_pressure'];
	$patient_height = $_POST['patient_height'];
	$patient_weight = $_POST['patient_weight'];
	
	//Calculation of BMI 
	$height = $_POST['patient_height']/100;
	$height = $height*$height;
	$bmi = $_POST['patient_weight']/ $height;
	$bmi = round($bmi, 2);

	$medical_history = $_POST['medical_history'];
	$past_illness = $_POST['past_illness'];
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

	$sql = "INSERT INTO employee_medical_profile (patient_id, blood_pressure, patient_height, patient_weight, bmi, medical_history , past_illness, hospitalization_history, currently_taking_drugs, drug_name, why_taking_drugs, allergies_to_drugs, name_drug, family_doctor, doctor_name,doctor_add, doctor_num, blood_donor, self_breast_exam, how_often, mammography, pregnant, month_pregnant, contraceptives, method, number_pregnancies, reasons, aborted_pregnancies, assesed_by )

		VALUES($id, '$blood_pressure', $patient_height, $patient_weight, $bmi, '$medical_history',  '$past_illness','$hospitalization_history', '$currently_taking_drugs','$drug_name', '$why_taking_drugs', '$allergies_to_drugs', '$name_drug','$family_doctor', '$doctor_name','$doctor_add', '$doctor_num', '$blood_donor', '$self_breast_exam','$how_often', '$mammography', '$pregnant', '$month_pregnant', '$contraceptives' , '$method', '$number_pregnancies', '$reasons', '$aborted_pregnancies', '$assesed_by' );";

	$result = $conn->query($sql);

	if (!$result) {

		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		return;
	}

	$sql = "INSERT INTO visit_tbl (patient_id, visit_reason,assesed_by, date_recorded) VALUES ($id, '$visit_reason', '$assesed_by', now())";

	$result = $conn->query($sql);
	echo "<script>alert('Medical Profile successfully recorded! ');</script>";

	if (!$result) {
		// Roll back previous query
		// ------------

		// Inform user about failed visitation
		echo 'Failed to record visitation.';
		return;
	}

	/*
	if ($conn->multi_query($sql) === TRUE) {
			 // echo "<script> alert('Successfully recorded! '); </script>";
			 
	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	*/
}


