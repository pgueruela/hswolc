<?php 

include_once '../includes/db.php';

$id = $_GET['id'];

 if (isset($_POST['add_consultation_patient'])) {
 	
	$blood_pressure = $_POST['blood_pressure'];
	$patient_height = $_POST['patient_height'];
	$patient_weight = $_POST['patient_weight'];
	$bmi = $_POST['bmi'];
	$respiratory_rate = $_POST['respiratory_rate'];
	$heart_rate = $_POST['heart_rate'];
	$temperature = $_POST['temperature'];
	$medical_history = $_POST['medical_history'];
	$past_illness = $_POST['past_illness'];
	$hospitalization_history = $_POST['hospitalization_history'];
	$medicines = $_POST['medicines'];
	$allergies = $_POST['allergies'];
	$diagnosis = $_POST['diagnosis'];
	$nurse_doctor = $_POST['nurse_doctor'];
	$date_checkup = $_POST['date_checkup'];
	
	$sql = "INSERT INTO consultation_tbl (patient_id, blood_pressure, patient_height, patient_weight, bmi, respiratory_rate, heart_rate, temperature, medical_history, past_illness,hospitalization_history, medicines,  allergies, diagnosis, nurse_doctor, date_checkup) VALUES($id, '$blood_pressure', '$patient_height', '$patient_weight', '$bmi', '$respiratory_rate', '$heart_rate','$temperature','$medical_history', '$past_illness', '$hospitalization_history', '$medicines', '$allergies', '$diagnosis', '$nurse_doctor',  '$date_checkup');";

	if ($conn->query($sql) === TRUE) {
			 echo "<script> alert('Stored successfully'); </script>";
	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

 ?>