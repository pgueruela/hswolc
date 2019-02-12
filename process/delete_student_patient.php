<?php 	
include_once '../includes/db.php';

$id = $_POST['id'];	

if (isset($_POST['del-student'])) {

	$conn->query("DELETE FROM patient_pd_tbl WHERE id = $id");
	header('Location: ../modules/view_student_patient.php');
}
 ?>