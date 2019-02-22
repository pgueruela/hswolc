<?php 

include 'includes/db.php';


$errors = array();
	
	if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']); 
		//Error Handlers
		//Check inputs if empty
			//Check if there is email that has been registered
			$sql = "SELECT * FROM admin_tbl WHERE username='$username'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck < 1) {
				array_push($errors, "*Username not found!");
			}else {
				if ($row = mysqli_fetch_assoc($result)) {
					$hashPassword = password_verify($password, $row['password']);
					if ($hashPassword == false) {
						array_push($errors, "*Password incorrect!");
					}elseif($hashPassword == true){

						//Login the user; get the information of user from database and stored into session
						$_SESSION['id'] = $row['id'];
						$_SESSION['firstname'] = $row['firstname'];
						$_SESSION['lastname'] = $row['lastname'];
						$_SESSION['user_type'] = $row['usertype'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['password'] = $row['password'];
						header("Location: ../hswolc/index.php");
					}
				}
			}
		}
 ?>