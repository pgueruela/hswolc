<?php 
require_once '../dompdf/autoload.inc.php';
include '../includes/db.php';

use Dompdf\Dompdf;	

$document = new Dompdf();


$id = $_GET['id'];
$result = $conn->query("SELECT phy.*, pt.* FROM physical_examination_tbl as phy
						LEFT JOIN patient_pd_tbl AS pt
						ON phy.patient_id = pt.id
						WHERE phy.id = $id");
$output = "


<div style='text-align:center; line-height:1px important;'>
	<h4><b>SCHOOL HEALTH RECORD</b></h4>
	<h4><b>ANNUAL PHYSICAL EXAMINATION</b></h4>	
	<h4><b>LORMA COLLEGES</b></h4>
	<p>Carlatan, San Fernando City, La Union</p>
</div>";

$row = mysqli_fetch_assoc($result);

$output .= '
<style>
table.vital-sign-table {
	margin-top: 20px;
}
table.eyes {
	margin-top: 20px;
}

table.table-footer tr td {
	border:none;
}
table.table-footer tr th {
	border:none;
}
.char {
	margin-top: 20px;
	width: 40%;
}

table {
  font-size: 15px;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 3px;
  text-transform: uppercase;
}

</style>
</head>
<body>

<table>
  <tr>
    <th>Name:</th>
    <th>Age:</th>
    <th>Sex:</th>
  </tr>
  <tr>
    <td>'.$row["firstname"]. " " . $row["lastname"].'</td>
    <td>'.$row["age"].'</td>
    <td>'.$row["gender"].'</td>
  </tr>
</table>
  
<table>
  <tr>
    <th colspan="2">Address:</th>
    <th>Tel#</th>
   
  </tr>
  <tr>
    <td colspan="2">'.$row["patient_address"].'</td>
    <td>'.$row["patient_number"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th colspan="2" >Contact Person in Case of Emergency:</th>
    <th>Tel#</th>
  </tr>
  <tr>
    <td colspan="2">'.$row["contact_person"].'</td>
    <td>'.$row["person_contact_emergency_number"].'</td>
  </tr>
</table>

</hr>

<table class="vital-sign-table">
  <tr>
    <th>BLOOD PRESSURE:</th>
    <th>TEMPERATURE:</th>
    <th>HEART RATE:</th>
    <th>RR:</th>
  </tr>
  <tr>
    <td>'.$row["blood_pressure"].'</td>
    <td>'.$row["temperature"].'</td>
    <td>'.$row["heart_rate"].'</td>
    <td>'.$row["respiratory_rate"].'</td>
  </tr>
</table>

<table >
  <tr>
    <th>HEIGHT:</th>
    <th>WEIGHT:</th>
    <th>BMI:</th>
    <th>BLOOD TYPE:</th>
  </tr>
  <tr>
    <td>'.$row["patient_height"].'</td>
    <td>'.$row["patient_weight"].'</td>
    <td>'.$row["bmi"].'</td>
    <td>'.$row["blood_type"].'</td>
  </tr>
</table>

<table class="eyes" >
  <tr>
    <th>Eyes: OS NO GLASSES:</th>
    <th>with Glasses:</th>
  </tr>
  <tr>
    <td>'.$row["os_no_glasses"].'</td>
    <td>'.$row["os_with_glasses"].'</td>
  </tr>
</table>

<table >
  <tr>
    <th>Eyes: OD NO GLASSES:</th>
    <th>with Glasses:</th>
  </tr>
  <tr>
    <td>'.$row["od_no_glasses"].'</td>
    <td>'.$row["od_with_glasses"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Ears: Right</th>
    <th>Left</th>
  </tr>
  <tr>
    <td>'.$row["ears_right"].'</td>
    <td>'.$row["ears_left"].'</td>
  </tr>
</table>


<table style="margin-top:20px; font-size:10px;">
  <tr>
    <th colspan="2"></th>
    <th>ABNORMALLY</th>
  </tr>
  <tr>
    <td>SKIN</td>
    <td><b>'.$row["skin"].'</b></td>
    <td><b>'.$row["skin_abnormal"].'</b></td>
  </tr><tr>
    <td>NOSE</td>
    <td><b>'.$row["nose"].'</b></td>
    <td><b>'.$row["nose_abnormal"].'</b></td>
  </tr><tr>
    <td>mouth</td>
    <td><b>'.$row["mouth"].'</b></td>
    <td><b>'.$row["mouth_abnormal"].'</b></td>
  </tr><tr>
    <td>pharynx</td>
    <td><b>'.$row["pharynx"].'</b></td>
    <td><b>'.$row["pharynx_abnormal"].'</b></td>
  </tr><tr>
    <td>tonsils</td>
    <td><b>'.$row["tonsils"].'</b></td>
    <td><b>'.$row["tonsils_abnormal"].'</b></td>
  </tr><tr>
    <td>gums</td>
    <td><b>'.$row["gums"].'</b></td>
    <td><b>'.$row["gums_abnormal"].'</b></td>
  </tr><tr>
    <td>lymph nodes</td>
    <td><b>'.$row["lymph_nodes"].'</b></td>
    <td><b>'.$row["lymph_nodes_abnormal"].'</b></td>
  </tr><tr>
    <td>neck</td>
    <td><b>'.$row["neck"].'</b></td>
    <td><b>'.$row["neck_abnormal"].'</b></td>
  </tr><tr>
    <td>chest</td>
    <td><b>'.$row["chest"].'</b></td>
    <td><b>'.$row["chest_abnormal"].'</b></td>
  </tr><tr>
    <td>lungs</td>
    <td><b>'.$row["lungs"].'</b></td>
    <td><b>'.$row["lungs_abnormal"].'</b></td>
  </tr><tr>
    <td>heart</td>
    <td><b>'.$row["heart"].'</b></td>
    <td><b>'.$row["heart_abnormal"].'</b></td>
  </tr><tr>
    <td>abdomen</td>
    <td><b>'.$row["abdomen"].'</b></td>
    <td><b>'.$row["abdomen_abnormal"].'</b></td>
  </tr><tr>
    <td>rectum</td>
    <td><b>'.$row["rectum"].'</b></td>
    <td><b>'.$row["rectum_abnormal"].'</b></td>
  </tr><tr>
    <td>Genitalia</td>
    <td><b>'.$row["genitalia"].'</b></td>
    <td><b>'.$row["genitalia_abnormal"].'</b></td>
  </tr><tr>
    <td>spine</td>
    <td><b>'.$row["spine"].'</b></td>
    <td><b>'.$row["spine_abnormal"].'</b></td>
  </tr><tr>
    <td>arms</td>
    <td><b>'.$row["arms"].'</b></td>
    <td><b>'.$row["arms_abnormal"].'</b></td>
  </tr>
  <tr>
    <td>legs</td>
    <td><b>'.$row["legs"].'</b></td>
    <td><b>'.$row["legs_abnormal"].'</b></td>
  </tr>
  <tr>
    <td>feet</td>
    <td><b>'.$row["feet"].'</b></td>
    <td><b>'.$row["feet_abnormal"].'</b></td>
  </tr>
</table>


<table style="margin-top:20px;">
  <tr>
    <th>Remarks</th>
  </tr>
  <tr>
    <td>'.$row["remarks"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Assesment</th>
  </tr>
  <tr>
    <td>'.$row["observation"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Recommendation</th>
  </tr>
  <tr>
    <td>'.$row["reccomendation"].'</td>
  </tr>
</table>

<table class="table-footer" style="margin-top: 90px;">
  <tr>
    <th>'.$row["date_recorded"].'</th>
    <th>'.$row["assesed_by"].'</th>
  </tr>
  <tr>
    <td>Date Examined</td>
    <td>Physician</td>
  </tr>
</table>

';


$document->loadHtml($output);

//set page size and orientation

$document->setPaper('A4', 'landscape');

//Render the HTML as PDF

$document->render();

//Get output of generated pdf in Browser

$document->stream("Physical Record", array("Attachment"=>0));
?>
		