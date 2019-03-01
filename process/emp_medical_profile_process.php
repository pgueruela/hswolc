<?php 

include_once '../includes/db.php';

$id = $_GET['id'];

 if (isset($_POST['add_physical_examination'])) {

 	$visit_reason = $_POST['visit_reason'];
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
	$skin_abnormal  = $_POST['skin_abnormal'];
	$nose = $_POST['nose'];
	$nose_abnormal  = $_POST['nose_abnormal'];
	$pharynx = $_POST['pharynx'];
	$pharynx_abnormal = $_POST['pharynx_abnormal'];
	$tonsils = $_POST['tonsils'];
	$tonsils_abnormal = $_POST['tonsil_abnormal'];
	$gums = $_POST['gums'];
	$gums_abnormal = $_POST['gums_abnormal'];
	$lymph_nodes = $_POST['lymph_nodes'];
	$lymph_nodes_abnormal = $_POST['lymph_nodes_abnormal'];
	$neck = $_POST['neck'];
	$neck_abnormal = $_POST['neck_abnormal'];
	$chest = $_POST['chest'];
	$chest_abnormal = $_POST['chest_abnormal'];
	$lungs = $_POST['lungs'];
	$lungs_abnormal = $_POST['lungs_abnormal'];
	$heart = $_POST['heart'];
	$heart_abnormal = $_POST['heart_abnormal'];
	$abdomen = $_POST['abdomen'];
	$abdomen_abnormal = $_POST['abdomen_abnormal'];
	$rectum = $_POST['rectum'];
	$rectum_abnormal = $_POST['rectum_abnormal'];
	$genitalia = $_POST['genitalia'];
	$genitalia_abnormal = $_POST['genitalia_abnormal'];
	$spine = $_POST['spine'];
	$spine_abnormal = $_POST['spine_abnormal'];
	$arms = $_POST['arms'];
	$arms_abnormal = $_POST['arms_abnormal'];
	$legs = $_POST['legs'];
	$legs_abnormal = $_POST['legs_abnormal'];
	$feet_abnormal = $_POST['feet_abnormal'];
	$feet = $_POST['feet'];
	$remarks = $_POST['remarks'];
	$essentially = $_POST['essentially'];
	$limitation = $_POST['limitation'];
	$special_attention = $_POST['special_attention'];
	$reccomendation = $_POST['reccomendation'];
	$physician = $_POST['physician'];

	$sql = "INSERT INTO physical_examination_tbl (patient_id, visit_reason,blood_pressure, respiratory_rate, heart_rate, temperature, patient_height, patient_weight, bmi, os_no_glasses, os_with_glasses, od_with_glasses, od_no_glasses, ears_right, ears_left, skin, skin_abnormal, nose, nose_abnormal,pharynx, pharynx_abnormal, tonsils, tonsils_abnormal,gums, gums_abnormal, lymph_nodes,  lymph_nodes_abnormal,neck, neck_abnormal, chest, chest_abnormal,lungs, lungs_abnormal, heart, heart_abnormal ,abdomen, abdomen_abnormal, rectum, rectum_abnormal, genitalia, genitalia_abnormal,spine,  spine_abnormal,arms,arms_abnormal, legs, legs_abnormal, feet, feet_abnormal,remarks, essentially, limitation, special_attention, reccomendation, physician, date_exam )
		VALUES($id, '$visit_reason','$blood_pressure', $respiratory_rate, $heart_rate, '$temperature',$patient_height, $patient_weight, $bmi, '$os_no_glasses', '$os_with_glasses', '$od_with_glasses', '$od_no_glasses','$ears_right', '$ears_left', '$skin', '$skin_abnormal','$nose', '$nose_abnormal','$pharynx', '$pharynx_abnormal', '$tonsils', '$tonsils_abnormal','$gums', '$gums_abnormal', '$lymph_nodes' , '$lymph_nodes_abnormal', '$neck' ,  '$neck_abnormal','$chest' , '$chest_abnormal' , '$lungs' , '$lungs_abnormal','$heart', '$heart_abnormal', '$abdomen' ,'$abdomen_abnormal' ,'$rectum', '$rectum_abnormal','$genitalia', '$genitalia_abnormal','$spine', '$spine_abnormal','$arms', '$arms_abnormal','$legs', '$legs_abnormal', '$feet', '$feet_abnormal', '$remarks', '$essentially', '$limitation', '$special_attention', '$reccomendation', '$physician', now());";

	if ($conn->query($sql) === TRUE) {
			 echo "<script> alert('Successfully recorded! '); </script>";
	} else {
	    	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

 ?>