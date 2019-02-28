<?php 

include_once '../includes/db.php';

 if (isset($_POST['add_patient'])) {
	 
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$address = $_POST['patient_address'];
	$birthdate = $_POST['birthdate'];
	$patient_number = $_POST['patient_number'];
	$position = $_POST['position'];
	$contact_person = $_POST['contact_person'];
	$person_contact_emergency_number = $_POST['person_contact_emergency_number'];
	$department = $_POST['department'];
	$civil_status = $_POST['civil_status'];
	$blood_type = $_POST['blood_type'];
	
	$sql = "INSERT INTO patient_pd_tbl (firstname, lastname, gender, patient_address, birthdate, patient_number, contact_person, person_contact_emergency_number, position, department, civil_status,blood_type) VALUES('$firstname', '$lastname', '$gender', '$address', '$birthdate', $patient_number,  '$contact_person', '$person_contact_emergency_number','$position', '$department','$civil_status','$blood_type');";


	if ($conn->query($sql) === TRUE) {
			 echo "<script> alert('New record created!'); </script>";
	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

 ?>