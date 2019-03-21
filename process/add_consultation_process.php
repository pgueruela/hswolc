<?php 

include_once '../includes/db.php';

$id = $_GET['id'];

 if (isset($_POST['add_consultation_patient'])) {
 	
 	$visit_reason = $_POST['visit_reason'];
	$temperature = $_POST['temperature'];
	$blood_pressure = $_POST['blood_pressure'];
	$heart_rate = $_POST['heart_rate'];
	$respiratory_rate = $_POST['respiratory_rate'];
	$chief_complain= $_POST['chief_complain'];
	$physical_examination = $_POST['physical_examination'];
	$treatment = $_POST['treatment'];
	$diagnosis = $_POST['diagnosis'];
	$medicines = $_POST['medicines'];
	$quantity = $_POST['quantity'];
	$remarks = $_POST['remarks'];
	$nurse_doctor = $_POST['nurse_doctor'];

	$sql = "INSERT INTO consultation_tbl (patient_id, temperature, blood_pressure, heart_rate, respiratory_rate, chief_complain, physical_examination, treatment, diagnosis , medicines, quantity, remarks, assesed_by , date_recorded) VALUES($id, '$temperature', '$blood_pressure',  '$heart_rate','$respiratory_rate', '$chief_complain' , '$physical_examination', '$treatment','$diagnosis', '$medicines', '$quantity', '$remarks', '$nurse_doctor', now()); ";
	$sql .= "INSERT INTO visit_tbl (patient_id, visit_reason, assesed_by , date_recorded) VALUES ($id, '$visit_reason', '$nurse_doctor', now())";

	if ($conn->multi_query($sql) === TRUE) {
			 echo "<script> alert('Consultation added! '); </script>";
	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

 ?>