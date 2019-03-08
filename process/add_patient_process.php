<?php 

include_once '../includes/db.php';

 if (isset($_POST['add_patient'])) {
	$status = $_POST['status']; 
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$address = $_POST['patient_address'];

	//birthdate to age calculation
	$dateOfBirth = $_POST['birthdate'];
	$today = date("Y-m-d");
	$diff = date_diff(date_create($dateOfBirth), date_create($today));
	$age = $diff->format('%y');

	$patient_number = $_POST['patient_number'];
	$position = $_POST['position'];
	$contact_person = $_POST['contact_person'];
	$person_contact_emergency_number = $_POST['person_contact_emergency_number'];
	$department = $_POST['department'];
	$civil_status = $_POST['civil_status'];
	$blood_type = $_POST['blood_type'];
	
	$sql = "INSERT INTO patient_pd_tbl (status,firstname, lastname, gender, patient_address, age, patient_number, contact_person, person_contact_emergency_number, position, department, civil_status,blood_type) VALUES($status,'$firstname', '$lastname', '$gender', '$address', $age, $patient_number,  '$contact_person', '$person_contact_emergency_number','$position', '$department','$civil_status','$blood_type');";


	if ($conn->query($sql) === TRUE) {
			 echo "<script> alert('New record created!'); </script>";
	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

 ?>