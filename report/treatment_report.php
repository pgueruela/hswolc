<?php 
require_once '../dompdf/autoload.inc.php';
include '../includes/db.php';

use Dompdf\Dompdf;  

$document = new Dompdf();

$output = "
<style>

table {
  font-size: 12px;
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
  padding: 3px;
  text-transform: uppercase;
}

</style>
</head>
<body>

<div style='text-align:center; line-height:1px important;'>
  <h4><b>HEALTH SERVICES AND WELLNESS OFFICES LORMA COLLEGES</b></h4>
  <h5><b>CARLATAN, SAN FERNANDO CITY, LA UNION</b></h5> 

  <br>
  <h4><b>TREATMENT REPORT</b></h4>
  </div>";

$query = "SELECT ct.*, pt.* FROM consultation_tbl  as ct
            LEFT JOIN patient_pd_tbl AS pt
            ON ct.patient_id = pt.id
            ORDER BY date_recorded DESC
            ";
$result = mysqli_query($conn, $query);

$output .='

<div style="margin-top: 20px;"></div>

<table>
  <tr>
    <th>Date and Time</th>
    <th>Name</th>
    <th>Age</th>
    <th>Department</th>
    <th>Chief Complain</th>
    <th>Temp</th>
    <th>BP</th>
    <th>RR</th>
    <th>PR</th>
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
     <td>'.$row["firstname"]. " ". $row["lastname"].'</td>
     <td>'.$row["age"].'</td>
     <td>'.$row["department"].'</td>
     <td>'.$row["chief_complain"].'</td>
     <td>'.$row["temperature"].'</td>
     <td>'.$row["blood_pressure"].'</td>
     <td>'.$row["respiratory_rate"].'</td>
     <td>'.$row["heart_rate"].'</td>
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
    