<?php

$trial_id    = $_SESSION['id'];
$s_name      = $_SESSION['name'];

$c_patient_record = $mysqli->query("SELECT * from c_patient_record where account_id ='$trial_id' and is_archived = 0 ");
$c_patient_record_archived = $mysqli->query("SELECT * from c_patient_record where account_id ='$trial_id' and is_archived = 1 ");


if(isset($_POST['add-patient'])){
	
	$firstname   = $_POST['firstname'];
	$lastname    = $_POST['lastname'];
	$middlename  = $_POST['middlename'];
	$address     = $_POST['address'];
	$birthday    = $_POST['birthday'];
	$age         = $_POST['age'];
	$birthplace  = $_POST['birthplace'];
	$civil       = $_POST['civil'];
	$sex         = $_POST['sex'];
	$mobile      = $_POST['mobile'];
	$religion    = $_POST['religion'];
	$occupation  = $_POST['occupation'];
	$name        = $_POST['firstname'] . ' '.$_POST['lastname'];
	
	$mysqli->query("INSERT INTO c_patient_record (pr_lname ,pr_fname, pr_mname,pr_addrs,pr_age,pr_bdate,pr_bplace,pr_civilstat,pr_gen,pr_number,pr_religion,pr_occup,account_id) 
						VALUES ('$lastname','$firstname','$middlename','$address','$age','$birthday','$birthplace','$civil','$sex','$mobile','$religion','$occupation','$trial_id')");
						
	$mysqli->query("INSERT INTO c_logs (username ,actions, account_id) 
						VALUES ('$s_name','Add New Patient Record $name','$trial_id')");
	
	echo "<script> window.location.href='patients.php?added';</script>";
}

if(isset($_POST['update-patient'])){
	
	$pr_id  	 = $_POST['pr_id'];
	$trial_id    = $_SESSION['id'];
	$firstname   = $_POST['firstname'];
	$lastname    = $_POST['lastname'];
	$middlename  = $_POST['middlename'];
	$address     = $_POST['address'];
	$birthday    = $_POST['birthday'];
	$age         = $_POST['age'];
	$birthplace  = $_POST['birthplace'];
	$civil       = $_POST['civil'];
	$sex         = $_POST['sex'];
	$mobile      = $_POST['mobile'];
	$religion    = $_POST['religion'];
	$occupation  = $_POST['occupation'];
	
	
	$mysqli->query("UPDATE c_patient_record SET 
							pr_lname = '$lastname',
							pr_fname = '$firstname', 
							pr_mname = '$middlename',
							pr_addrs = '$address',
							pr_age = '$age',
							pr_bdate = '$birthday',
							pr_bplace = '$birthplace',
							pr_civilstat = '$civil',
							pr_gen = '$sex',
							pr_number = '$mobile',
							pr_religion = '$religion',
							pr_occup = '$occupation'
						where pr_id  = '$pr_id'");

	
	echo "<script> window.location.href='patients.php?updated';</script>";
}

if(isset($_POST['archived-patient'])){
	
	$pr_id  	 = $_POST['pr_id'];

	
	$mysqli->query("UPDATE c_patient_record SET 
						is_archived = 1
						where pr_id  = '$pr_id'");

	
	echo "<script> window.location.href='patients.php?updated';</script>";
}
