<?php 
include '../header-include.php';
include '../includes/db.php';

$id = $_GET['id'];

$result = $conn->query("SELECT pt.*, ct.* FROM patient_pd_tbl as pt
						LEFT JOIN consultation_tbl AS ct
						ON pt.id = ct.patient_id
						WHERE pt.id = $id ");

$row = mysqli_fetch_assoc($result);
?>

<div class="container-fluid">

	<div class="row">
		<div class="col-md-4 offset-4">
			<div style="line-height: 1.5px; margin-top: 60px; text-align: center;">
				<p><b>School Health Consultation Records</b></p>
				<p><b>Lorma Colleges</b></p>
				<p><b>Carlatan, San Fernando City, La Union</b></p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 offset-2">
			<p>NAME: <b><?php echo $row['firstname']. " " . $row['lastname']; ?></b> </p>
			<p>ADDRESS:  <b><?php echo $row['patient_address']; ?></b> </p>
			<p>CONTACT #:  <b><?php echo $row['patient_number']; ?></b></p>
			<p>POSITION: <b><?php echo $row['position']; ?></b> </p>
		</div>
		<div class="col-md-4 offset-2">
			<p>SEX: <b><?php echo $row['gender']; ?></b></p>
			<p>AGE: <b><?php echo $row['age']; ?></b> </p>
			<p>STATUS: <b><?php echo $row['civil_status']; ?></b></p>
		</div>
	</div>

	<div class="row">
		<?php 

		$query = "SELECT * FROM consultation_tbl WHERE patient_id=$id;";
		$result = mysqli_query($conn, $query);?>
		<div class="col-md-9 offset-2">
			<p><b>Summary of Consultation Records</b></p>
			<table id="logs_data" class="table table-hover">
								<thead>	
									<tr>
										<td>Date and Time</td>
										<td>Chief Complain</td>
										<td>Temp</td>
										<td>BP</td>
										<td>PR</td>
										<td>RR</td>
										<td>Medicine</td>
										<td>QTY</td>
										<td>Remarks</td>
									</tr>
								</thead>
						<?php while($row = mysqli_fetch_array($result)) { ?>
								<tr>
									<td><?php echo $row["date_recorded"]; ?></td>
									<td><?php echo $row["chief_complain"]; ?></td>
									<td><?php echo $row["temperature"]; ?></td>
									<td><?php echo $row["blood_pressure"]; ?></td>
									<td><?php echo $row["heart_rate"]; ?></td>
									<td><?php echo $row["respiratory_rate"]; ?></td>
									<td><?php echo $row["medicines"]; ?></td>
									<td><?php echo $row["quantity"]; ?></td>
									<td><?php echo $row["remarks"]; ?></td>
								</tr>		
						<?php 
						}
						 ?>
							</table>
			</div>
		</div>
	</div>
</div>
