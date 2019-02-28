<?php 

include_once '../includes/db.php';

$id = $_GET['id'];

 if (isset($_POST['add_physical_examination'])) {
 
	$blood_pressure = $_POST['blood_pressure'];
	$heart_rate = $_POST['heart_rate'];
	$temperature = $_POST['temperature'];
	$respiratory_rate = $_POST['respiratory_rate'];
	$patient_height = $_POST['patient_height'];
	$patient_weight = $_POST['patient_weight'];
	$bmi = $_POST['bmi'];
	$os_no_glasses = $_POST['os_no_glasses'];
	$os_with_glasses = $_POST['os_with_glasses'];
	$od_no_glasses = $_POST['od_no_glasses'];
	$od_with_glasses = $_POST['od_with_glasses'];
	$ears_right = $_POST['ears_right'];
	$ears_left = $_POST['ears_left'];
	$skin  = $_POST['skin'];
	$nose = $_POST['nose'];
	$pharynx = $_POST['pharynx'];
	$tonsils = $_POST['tonsils'];
	$gums = $_POST['gums'];
	$lymph_nodes = $_POST['lymph_nodes'];
	$neck = $_POST['neck'];
	$chest = $_POST['chest'];
	$lungs = $_POST['lungs'];
	$heart = $_POST['heart'];
	$abdomen = $_POST['abdomen'];
	$rectum = $_POST['rectum'];
	$genitalia = $_POST['genitalia'];
	$spine = $_POST['spine'];
	$arms = $_POST['arms'];
	$legs = $_POST['legs'];
	$feet = $_POST['feet'];
	$remarks = $_POST['remarks'];
	$essentially = $_POST['essentially'];
	$limitation = $_POST['limitation'];
	$special_attention = $_POST['special_attention'];
	$reccomendation = $_POST['reccomendation'];
	$physician = $_POST['physician'];

	$sql = "INSERT INTO physical_examination_tbl (patient_id, blood_pressure, respiratory_rate, heart_rate, temperature, patient_height, patient_weight, bmi, os_no_glasses, os_with_glasses, od_with_glasses, od_no_glasses, ears_right, ears_left, skin, nose, pharynx, tonsils, gums, lymph_nodes, neck, chest, lungs, heart, abdomen, rectum, genitalia, spine, arms, legs, feet, remarks, essentially, limitation, special_attention, reccomendation, physician, date_checkup )
		VALUES($id, '$blood_pressure', $respiratory_rate, $heart_rate, '$temperature',$patient_height, $patient_weight, $bmi, '$os_no_glasses', '$os_with_glasses', '$od_with_glasses', '$od_no_glasses','$ears_right', '$ears_left', '$skin', '$nose','$pharynx', '$tonsils', '$gums' , '$lymph_nodes' , '$neck' , '$chest' , '$lungs' ,'$heart', '$abdomen' ,'$rectum','$genitalia','$spine','$arms','$legs','$feet', '$remarks', '$essentially', '$limitation', '$special_attention', '$reccomendation', '$physician', now());";

	if ($conn->query($sql) === TRUE) {
			 echo "<script> alert('Successfully recorded! '); </script>";
	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

 ?>