<?php

$c_id    = $_SESSION['id'];
$total_a = $mysqli->query("SELECT count(*)total_admin from c_accounts");
while($val_a = $total_a->fetch_object()){ 
	$total_admins =  $val_a->total_admin;
}

$total_p = $mysqli->query("SELECT count(*)total_patients from c_patient_record where account_id='$c_id'");
while($val_p = $total_p->fetch_object()){ 
	$total_patients =  $val_p->total_patients;
}

$total_n = $mysqli->query("SELECT count(*)total_user from c_standardusers where trial_id='$c_id'");
while($val_n = $total_n->fetch_object()){ 
	$totaluser =  $val_n->total_user;
}
