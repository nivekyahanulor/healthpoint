<?php

$trial_id   = $_SESSION['id'];

$c_system_admin = $mysqli->query("SELECT * from c_system_admin");

$c_system_admin1 = $mysqli->query("SELECT * from c_system_admin where sys_id ='$trial_id'");

if(isset($_POST['change-password'])){
	
	$oldpass  	    =  md5($_POST['oldpass']);
	$currentpass    =$_POST['currentpass'];
	$newpassword    = md5($_POST['newpassword']);
	$confirmpass    = $_POST['confirmpass'];
	
	if($oldpass != $currentpass){
		echo "<script> window.location.href='change-password.php?notmatch';</script>";
	} else {
		$mysqli->query("UPDATE c_system_admin SET 
								sys_pass = '$newpassword'
							where sys_id = '$trial_id'");
		echo "<script> window.location.href='change-password.php?updated';</script>";
	
	}
}

if(isset($_POST['change-recovery'])){
	
	$oldpass  	    =  md5($_POST['oldpass']);
	$currentpass    =$_POST['currentpass'];
	$secquestion    = $_POST['secquestion'];
	$secanswer      = $_POST['secanswer'];
	
	if($oldpass != $currentpass){
		echo "<script> window.location.href='account-recovery.php?notmatch';</script>";
	} else {
		$mysqli->query("UPDATE c_system_admin SET 
								sys_secretquestion = '$secquestion',
								sys_secretanswer = '$secanswer'
							where sys_id = '$trial_id'");
		echo "<script> window.location.href='account-recovery.php?updated';</script>";
	
	}
}


if(isset($_POST['add-user'])){
	
	$fullname    = $_POST['fullname'];
	$username    = $_POST['username'];
	$password    = md5($_POST['password']);
	$secquestion = $_POST['secquestion'];
	$secanswer   = $_POST['secanswer'];

	
	$mysqli->query("INSERT INTO c_system_admin (sys_user ,sys_pass, sys_secretquestion,sys_secretanswer,sys_fname) 
						VALUES ('$username','$password','$secquestion','$secanswer','$fullname')");

	
	echo "<script> window.location.href='admin.php?added';</script>";
}

if(isset($_POST['update-user'])){
	
	$id  	     = $_POST['sys_id'];
	$fullname    = $_POST['fullname'];
	$username    = $_POST['username'];
	$password    = md5($_POST['password']);
	$secquestion = $_POST['secquestion'];
	$secanswer   = $_POST['secanswer'];
	
	$mysqli->query("UPDATE c_system_admin SET 
							sys_user = '$username',
							sys_pass = '$password', 
							sys_secretquestion = '$secquestion',
							sys_secretanswer = '$secanswer',
							sys_fname = '$fullname'
						where sys_id = '$id'");

	
	echo "<script> window.location.href='admin.php?updated';</script>";
}

if(isset($_POST['delete-user'])){
	
	$id  	    = $_POST['id'];

	
	$mysqli->query("DELETE FROM c_system_admin where sys_id = '$id'");

	echo "<script> window.location.href='admin.php?deleted';</script>";
}