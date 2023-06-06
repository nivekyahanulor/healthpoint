<?php
include('../controller/database.php');

$user = $_SESSION['id'];


$is_patients_history = $mysqli->query("SELECT count(*)cntc from is_appointments ");

while($is = $is_patients_history->fetch_object()){ 
		$total_appointments =  $is->cntc;
}

$is_patients= $mysqli->query("SELECT count(*)is_patients from is_patients ");

while($isp = $is_patients->fetch_object()){ 
		$total_patients =  $isp->is_patients;
}

$is_doctors= $mysqli->query("SELECT count(*)is_doctors from is_doctors ");

while($isd = $is_doctors->fetch_object()){ 
		$total_doctors =  $isd->is_doctors;
}
