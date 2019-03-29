<?php 
require_once '../dompdf/autoload.inc.php';
include '../includes/db.php';

use Dompdf\Dompdf;  

$document = new Dompdf();

$id = $_GET['id'];

$result = $conn->query("SELECT pt.*, ct.* FROM patient_pd_tbl as pt
            LEFT JOIN consultation_tbl AS ct
            ON pt.id = ct.patient_id
            WHERE pt.id = $id ");

$row = mysqli_fetch_assoc($result);

$output = "
<style>

table {
  font-size: 11px;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}

table.personal-data th {
  border: none;
}table.personal-data td {
  border: none;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 2px;
  text-transform: uppercase;
}

</style>
</head>
<body>

<div style='text-align:center; line-height:1px important;'>
  <h4 style='text-transform:uppercase;'><b>Health Services and Wellness Office Lorma Colleges</b></h4>
  <h6><b>SAN FERNANDO CITY, LA UNION</b></h6> 

  <br>
  <h5><b>CONSULTATION RECORDS</b></h5>
  </div>";

$output .='

<table class="personal-data">
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
';


$query = "SELECT * FROM consultation_tbl WHERE patient_id=$id;";
$result = mysqli_query($conn, $query);

$output .='

<div style="margin-top: 20px;"></div>

<table>
  <tr>
    <th>Date and Time</th>
    <th>Chief Complain</th>
    <th>Temp</th>
    <th>BP</th>
    <th>RR</th>
    <th>PR</th>
    <th>Treatment</th>
    <th>Physical Examination</th>
    <th>Diagnosis</th>
    <th>Medicine</th>
    <th>QTY</th>
    <th>Remarks</th>
    <th>Assesed by</th>
  </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
     <td>'.$row["date_recorded"].'</td>
     <td>'.$row["chief_complain"].'</td>
     <td>'.$row["temperature"].'</td>
     <td>'.$row["blood_pressure"].'</td>
     <td>'.$row["respiratory_rate"].'</td>
     <td>'.$row["heart_rate"].'</td>
     <td>'.$row["treatment"].'</td>
     <td>'.$row["physical_examination"].'</td>
     <td>'.$row["diagnosis"].'</td>
     <td>'.$row["medicines"].'</td>
     <td>'.$row["quantity"].'</td>
     <td>'.$row["remarks"].'</td>
     <td>'.$row["assesed_by"].'</td>
    </tr>
   ';
  }

$output .= '</table>';



$document->loadHtml($output);

//set page size and orientation

$document->setPaper('A4', 'landscape');

//Render the HTML as PDF

$document->render();

//Get output of generated pdf in Browser

$document->stream("Physical Record", array("Attachment"=>0));
?>
    