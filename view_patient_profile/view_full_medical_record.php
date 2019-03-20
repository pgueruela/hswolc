<?php 
require_once '../dompdf/autoload.inc.php';
include '../includes/db.php';

use Dompdf\Dompdf;  

$document = new Dompdf();


$id = $_GET['id'];

$result = $conn->query("SELECT emp.*, pt.* FROM employee_medical_profile as emp
            LEFT JOIN patient_pd_tbl AS pt
            ON emp.patient_id = pt.id
            WHERE emp.id = $id ");
$row = mysqli_fetch_assoc($result);

$output = "
<style>

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

table.table-footer tr {
  border:none;
}

table.table-footer th {
  border:none;
}
</style>
</head>
<body>

<div style='text-align:center; line-height:1px important;'>
  <h5><b>LORMA COLLEGES</b></h5>
  <h5><b>SAN FERNANDO CITY, LA UNION</b></h5> 
  <h4><b>COLLEGE CLINIC</b></h4>

  <br>
  <h4><b>EMPLOYEE'S MEDICAL PROFILE</b></h4>
  </div>";

if($row['gender'] == 'M') {

$output .= '

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
    <th>Tel#:</th>
    <th>Position:</th>
    <th>Status:</th>
  </tr>
  <tr>
    <td>'.$row["patient_number"].'</td>
    <td>'.$row["position"].'</td>
    <td>'.$row["civil_status"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Person to contact in case/s of Emergency:</th>
    <th>Tel#: </th>
  </tr>
  <tr>
    <td>'.$row["contact_person"].'</td>
    <td>'.$row["person_contact_emergency_number"].'</td>
  </tr>
</table>

<table style="margin-top:20px;">
  <tr>
    <th>BLOOD TYPE: </th>
    <th>BLOOD PRESSURE: </th>
    <th>BODY MASS INDEX: </th>
  </tr>
  <tr>
    <td>'.$row["blood_type"].'</td>
    <td>'.$row["blood_pressure"].'</td>
    <td>'.$row["bmi"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Height: </th>
    <th>Weight: </th>
  </tr>
  <tr>
    <td>'.$row["patient_height"].'</td>
    <td>'.$row["patient_weight"].'</td>
  </tr>
</table>

<table style="margin-top:20px;">
  <tr>
    <th>Medical History: </th>
  </tr>
  <tr>
    <td>'.$row["medical_history"].'</td>
  </tr>
</table>
<table>
  <tr>
    <th>Past Illness</th>
  </tr>
  <tr>
    <td>'.$row["past_illness"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Hospitalization History</th>
  </tr>
  <tr>
    <td>'.$row["hospitalization_history"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Are you currently taking-in any drug/s?: </th>
  </tr>
  <tr>
    <td>'.$row["currently_taking_drugs"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>If yes, state the name of the drug/s: </th>
  </tr>
  <tr>
    <td>'.$row["drug_name"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Why are you taking the drug/s? </th>
  </tr>
  <tr>
    <td>'.$row["why_taking_drugs"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Do you have any allergies to drug/s? </th>
  </tr>
  <tr>
    <td>'.$row["allergies_to_drugs"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>If yes, state the name of the drug/s: </th>
  </tr>
  <tr>
    <td>'.$row["name_drug"].'</td>
  </tr>
</table>

<table style="margin-top:20px;">
  <tr>
    <th>Do you have your own family doctor? </th>
  </tr>
  <tr>
    <td>'.$row["family_doctor"].'</td>
  </tr>
</table>


<table>
  <tr>
    <th>Name of Doctor </th>
    <th>Address </th>
    <th>Tel# </th>
  </tr>
  <tr>
    <td>'.$row["doctor_name"].'</td>
    <td>'.$row["doctor_add"].'</td>
    <td>'.$row["doctor_num"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Would like to be a blood donor? </th>
  </tr>
  <tr>
    <td>'.$row["blood_donor"].'</td>
  </tr>
</table>


<table class="table-footer" style="margin-top:90px; border:none;">
  <tr>
    <th>Assesed by: '.$row["assesed_by"].'</th>
  </tr>

</table>



';


}else{

$output .= '

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
    <th>Tel#:</th>
    <th>Position:</th>
    <th>Status:</th>
  </tr>
  <tr>
    <td>'.$row["patient_number"].'</td>
    <td>'.$row["position"].'</td>
    <td>'.$row["civil_status"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Person to contact in case/s of Emergency:</th>
    <th>Tel#: </th>
  </tr>
  <tr>
    <td>'.$row["contact_person"].'</td>
    <td>'.$row["person_contact_emergency_number"].'</td>
  </tr>
</table>

<table style="margin-top:20px;">
  <tr>
    <th>BLOOD TYPE: </th>
    <th>BLOOD PRESSURE: </th>
    <th>BODY MASS INDEX: </th>
  </tr>
  <tr>
    <td>'.$row["blood_type"].'</td>
    <td>'.$row["blood_pressure"].'</td>
    <td>'.$row["bmi"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Height: </th>
    <th>Weight: </th>
  </tr>
  <tr>
    <td>'.$row["patient_height"].'</td>
    <td>'.$row["patient_weight"].'</td>
  </tr>
</table>

<table style="margin-top:20px;">
  <tr>
    <th>Medical History: </th>
  </tr>
  <tr>
    <td>'.$row["medical_history"].'</td>
  </tr>
</table>
<table>
  <tr>
    <th>Past Illness</th>
  </tr>
  <tr>
    <td>'.$row["past_illness"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Hospitalization History</th>
  </tr>
  <tr>
    <td>'.$row["hospitalization_history"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Are you currently taking-in any drug/s?: </th>
  </tr>
  <tr>
    <td>'.$row["currently_taking_drugs"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>If yes, state the name of the drug/s: </th>
  </tr>
  <tr>
    <td>'.$row["drug_name"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Why are you taking the drug/s? </th>
  </tr>
  <tr>
    <td>'.$row["why_taking_drugs"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Do you have any allergies to drug/s? </th>
  </tr>
  <tr>
    <td>'.$row["allergies_to_drugs"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>If yes, state the name of the drug/s: </th>
  </tr>
  <tr>
    <td>'.$row["name_drug"].'</td>
  </tr>
</table>

<table style="margin-top:20px;">
  <tr>
    <th>Do you have your own family doctor? </th>
  </tr>
  <tr>
    <td>'.$row["family_doctor"].'</td>
  </tr>
</table>


<table>
  <tr>
    <th>Name of Doctor </th>
    <th>Address </th>
    <th>Tel# </th>
  </tr>
  <tr>
    <td>'.$row["doctor_name"].'</td>
    <td>'.$row["doctor_add"].'</td>
    <td>'.$row["doctor_num"].'</td>
  </tr>
</table>

<table>
  <tr>
    <th>Would like to be a blood donor? </th>
  </tr>
  <tr>
    <td>'.$row["blood_donor"].'</td>
  </tr>
</table>

<div style="margin-top:20px;"></div>
<table>
  <tr>
    <th>Do you practice self-breast exam? </th>
    <th>How often? </th>
  </tr>
  <tr>
    <td>'.$row["self_breast_exam"].'</td>
    <td>'.$row["how_often"].'</td>
  </tr>
</table>


<table>
  <tr>
    <th>Have you had mammography </th>
  </tr>
  <tr>
    <td>'.$row["mammography"].'</td>
  </tr>
</table>


<table>
  <tr>
    <th>Are you pregnant? </th>
    <th>If yes, how many month?</th>
  </tr>
  <tr>
    <td>'.$row["pregnant"].'</td>
    <td>'.$row["month_pregnant"].'</td>
  </tr>
</table>


<table>
  <tr>
    <th>If no, are you using any contraceptive/s? </th>
    <th>What method do you use?</th>
  </tr>
  <tr>
    <td>'.$row["contraceptives"].'</td>
    <td>'.$row["method"].'</td>
  </tr>
</table>


<table>
  <tr>
    <th>Number of pregnancies? </th>
  </tr>
  <tr>
    <td>'.$row["number_pregnancies"].'</td>
  </tr>
</table>
<table>
  <tr>
    <th>Had you had any aborted pregnancies?</th>
    <th>Reasons</th>
  </tr>
  <tr>
   
    <td>'.$row["aborted_pregnancies"].'</td>
    <td>'.$row["reasons"].'</td>
  </tr>
</table>

<table class="table-footer" style="margin-top:90px; border:none;">
  <tr>
    <th>Assesed by: '.$row["assesed_by"].'</th>
  </tr>

</table>
';
}

$output .='

</body>
';

$document->loadHtml($output);

//set page size and orientation

$document->setPaper('A4', 'landscape');

//Render the HTML as PDF

$document->render();

//Get output of generated pdf in Browser

$document->stream("Physical Record", array("Attachment"=>0));
?>
    