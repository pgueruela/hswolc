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
	$medicines = $_POST['medicines'];
	$quantity = $_POST['quantity'];
	$diagnosis = $_POST['diagnosis'];
	$remarks = $_POST['remarks'];
	$nurse_doctor = $_POST['nurse_doctor'];

	$sql = "INSERT INTO consultation_tbl (patient_id, blood_pressure, respiratory_rate, heart_rate, temperature, chief_complain, remarks, physical_examination , medicines, quantity,diagnosis, nurse_doctor) VALUES($id, '$blood_pressure', '$respiratory_rate', '$heart_rate', '$temperature' , '$chief_complain', '$remarks','$diagnosis', '$physical_examination', '$medicines', '$quantity', '$nurse_doctor'); ";
	$sql .= "INSERT INTO visit_tbl (patient_id, visit_reason, date_recorded) VALUES ($id, '$visit_reason', now())";

	if ($conn->multi_query($sql) === TRUE) {
			 echo "<script> alert('Consultation added! '); </script>";
	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

 ?>