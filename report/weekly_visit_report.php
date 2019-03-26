<?php 
require_once '../dompdf/autoload.inc.php';
include '../includes/db.php';

use Dompdf\Dompdf;  

$document = new Dompdf();

$output = "
<style>

table {
  font-size: 15px;
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
  <h4  style='text-transform: uppercase;'><b>Clinic Weekly visit Records</b></h4>
  </div>";

$result = $conn->query("SELECT pt.*, vt.* FROM patient_pd_tbl as pt
            LEFT JOIN visit_tbl AS vt ON vt.patient_id = pt.id 
            WHERE YEARWEEK(date_recorded) = yearweek(curdate())
            ORDER BY date_recorded ASC");

$output .='

<div style="margin-top: 20px;"></div>

<table>
  <tr>
    <th>Date and Time</th> 
    <th>Name</th> 
    <th>Purpose of Visit</th> 
    <th>Assesed by: </th> 

  </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>
     <td>'.$row["date_recorded"].'</td>
     <td>'.$row["firstname"]. " " .$row["lastname"].'</td>
     <td>'.$row["visit_reason"].'</td>
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

$document->stream("WeeklyVisitRecords", array("Attachment"=>0));
?>
    