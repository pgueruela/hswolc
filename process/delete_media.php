<?php

require '../includes/db.php';

$aid = $_POST['aid'];
if (isset($_POST['delete_amr'])) {
            $conn->query("DELETE FROM medical_records_tbl WHERE id = $aid");
}
?>


