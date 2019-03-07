<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hswolc";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  ?>

<form method="post" action="test.php">
	<label>height</label>
	<input type="text" name="height">
	<br>
	<label>weight</label>
	<input type="text" name="weight">
	<br>
	<input type="submit" name="submit" value="submit">
</form>
<?php  

if (isset($_POST['submit'])) {

	$height = $_POST['height'];
	$weight = $_POST['weight'];

	$age = $weight/($height*$height);

	$rounded_bmi = round($age);
	
	$sql = "INSERT INTO test (age)
	VALUES ($rounded_bmi)";

	if ($conn->query($sql) === TRUE) {
	    echo "BMI inserted!";
	    echo round($age);
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

}


?>
