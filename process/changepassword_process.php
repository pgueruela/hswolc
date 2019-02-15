<?php

include '../includes/db.php';

$id = $_GET['id'];

$errors = array();
if (isset($_POST['change_pass'])) {

	$new_pass = $_POST['new_pass'];
	$confirm_pass = $_POST['confirm_pass'];
	$current_pass = $_POST['current_pass'];

	if ($new_pass != $confirm_pass) {
		array_push($errors, "*New Password and confirm password doesnt match! ");
		header("Location: ../modules/changepassword.php?id=$id");
	}else{

		$result = mysqli_query($conn, "SELECT *from admin_tbl WHERE id=$id");
		$row = mysqli_fetch_array($result);
		$hashPassword = password_verify($current_password, $row['password']);

		if ($current_pass == $hashPassword) {
		$sql = "UPDATE admin_tbl SET password = '$new_pass' WHERE id=$id ";
		header("Location: ../modules/changepassword.php?id=$id");
		exit();
		}else {
			array_push($errors, "*Password incorrect!");
			header("Location: ../modules/changepassword.php?id=$id");
		}
	}

}
?>