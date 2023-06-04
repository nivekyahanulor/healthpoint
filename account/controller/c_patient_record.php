<?php

$trial_id     = $_SESSION['id'];

$pr_id = $_GET['data'];
$c_patient_record = $mysqli->query("SELECT * from c_patient_record where pr_id ='$pr_id' and account_id = '$trial_id'");

$c_findings = $mysqli->query("SELECT * from c_findings where trial_id = '$trial_id' and patient_id='$pr_id' ");
$c_admission_record = $mysqli->query("SELECT * from c_admission_record  where trial_id = '$trial_id'  and patient_id='$pr_id'");


if(isset($_POST['add-record'])){
	
	$trial_id     = $_SESSION['id'];
	$illness      = $_POST['illness'];
	$pr_id        = $_POST['pr_id'];
	$physician    = $_POST['physician'];
	$complaint    = $_POST['complaint'];
	$diganosis    = $_POST['diganosis'];
	$medication   = $_POST['medication'];
	$bp           = $_POST['bp'];
	$rr           = $_POST['rr'];
	$cr           = $_POST['cr'];
	$temp         = $_POST['temp'];
	$weight       = $_POST['weight'];
	$pulse        = $_POST['pulse'];
	
	$mysqli->query("INSERT INTO c_findings (patient_id,f_chiefcomplaint ,f_historypresentillness, f_bp,f_rr,f_cr,f_temp,f_wt,f_pr,f_diagnosis,f_medication,f_nameofphysician,trial_id) 
						VALUES ('$pr_id','$complaint','$illness','$bp','$rr','$cr','$temp','$weight','$pulse','$diganosis','$medication','$physician','$trial_id')");

	
	echo "<script> window.location.href='patient-record.php?added&data=".$pr_id."';</script>";
}
if(isset($_POST['add-admission'])){
	
	$trial_id     = $_SESSION['id'];
	$admittedby   = $_POST['admittedby'];
	$pr_id        = $_POST['pr_id'];
	$physician    = $_POST['physician'];
	$father       = $_POST['father'];
	$mother       = $_POST['mother'];
	$ward         = $_POST['ward'];
	$chargeto     = $_POST['chargeto'];
	$relation     = $_POST['relation'];
	$mobile       = $_POST['mobile'];
	$address      = $_POST['address'];
	$totalpay     = $_POST['totalpay'];
	
	$mysqli->query("INSERT INTO c_admission_record (ad_wardname,ad_admittedby ,ad_physician, ad_father,ad_mother,ad_chargetoaccount,ad_relationtopatient,ad_address,ad_number,ad_totalpayment,patient_id,trial_id) 
						VALUES ('$ward','$admittedby','$physician','$father','$mother','$chargeto','$relation','$address','$mobile','$totalpay','$pr_id','$trial_id')");

	
	echo "<script> window.location.href='patient-record.php?added&data=".$pr_id."';</script>";
}
if(isset($_POST['update-admission'])){
	 
	$trial_id   	           = $_SESSION['id'];
	$ad_id   			       = $_POST['ad_id'];
	$ad_complaint              = $_POST['ad_complaint'];
	$ad_completediagnosis      = $_POST['ad_completediagnosis'];
	$ad_medication             = $_POST['ad_medication'];
	$ad_conditiontodischarge   = $_POST['ad_conditiontodischarge'];
	$ad_remarks                = $_POST['ad_remarks'];
	$ad_dischargedate          = $_POST['ad_dischargedate'];
	$ad_totalpayment           = $_POST['ad_totalpayment'];

	
	$mysqli->query("UPDATE c_admission_record SET 
							ad_complaint = '$ad_complaint',
							ad_completediagnosis = '$ad_completediagnosis',
							ad_medication = '$ad_medication',
							ad_conditiontodischarge = '$ad_conditiontodischarge',
							ad_remarks = '$ad_remarks',
							ad_dischargedate = '$ad_dischargedate',
							ad_totalpayment = '$ad_totalpayment'
							WHERE ad_id = '$ad_id'
	");

	
	
	echo "<script> window.location.href='patient-record.php?updated&data=".$pr_id."';</script>";
}
