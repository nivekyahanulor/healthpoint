<?php
include('../controller/database.php');

$user = $_SESSION['id'];


$is_patients_history = $mysqli->query("SELECT count(*)cntc from is_appointments where patient_id = '$user'");

while($is = $is_patients_history->fetch_object()){ 
		$totalcustomer =  $is->cntc;
}
