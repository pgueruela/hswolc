<?php 	
include_once '../includes/db.php';

$id = $_POST['id'];	

if (isset($_POST['del-employee'])) {

	$conn->query("DELETE FROM patient_pd_tbl WHERE id = $id");
	header('Location: ../modules/view_employee_patient.php');
}
 ?>	