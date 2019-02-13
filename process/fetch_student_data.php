<?php 

include '../includes/header.php';
include '../includes/db.php';

if (isset()) {
	# code...
}

$sql = "
  SELECT * FROM patient_pd_tbl 
  WHERE firstname LIKE '%".$_POST['search']."%'
  OR lastname LIKE '%".$_POST['search']."%' 
 ";

