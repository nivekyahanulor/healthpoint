<?php
$trial_id   = $_SESSION['id'];
$s_name      = $_SESSION['name'];

$c_accounts = $mysqli->query("SELECT * from c_accounts where account_id  = '$trial_id'");
$c_standardusers = $mysqli->query("SELECT * from c_standardusers where trial_id = '$trial_id'");


if(isset($_POST['change-password'])){
	
	$oldpass  	    = md5($_POST['oldpass']);
	$currentpass    = $_POST['currentpass'];
	$newpassword    = md5($_POST['newpassword']);
	$confirmpass    = $_POST['confirmpass'];
	
	if($oldpass != $currentpass){
		echo "<script> window.location.href='change-password.php?notmatch';</script>";
	} else {
		$mysqli->query("UPDATE c_accounts SET 
								password = '$newpassword'
							where account_id = '$trial_id'");
		$mysqli->query("INSERT INTO c_logs (username ,actions, account_id) 
						VALUES ('$s_name','Update Password','$trial_id')");
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
		$mysqli->query("UPDATE c_accounts SET 
								sys_secretquestion = '$secquestion',
								sys_secretanswer = '$secanswer'
							where account_id = '$trial_id'");
		$mysqli->query("INSERT INTO c_logs (username ,actions, account_id) 
						VALUES ('$s_name','Update Account Recovery','$trial_id')");
		echo "<script> window.location.href='account-recovery.php?updated';</script>";
	
	}
}


if(isset($_POST['add-user'])){
	
	$trial_id   = $_SESSION['id'];
	$username   = $_POST['username'];
	$password   = $_POST['password'];
	$firstname  = $_POST['firstname'];
	$lastname   = $_POST['lastname'];
	$position   = $_POST['position'];
	if(isset($_POST['field'])){
		$field = $_POST['field'];
	} else {
		$field = "";
	}
	
	
	$mysqli->query("INSERT INTO c_standardusers (su_user ,su_pass, su_fname,su_lname,su_position,su_field,trial_id) 
						VALUES ('$username','$password','$firstname','$lastname','$position','$field','$trial_id')");

	
	echo "<script> window.location.href='users.php?added';</script>";
}

if(isset($_POST['update-user'])){
	
	$trial_id   = $_SESSION['id'];
	$id  	    = $_POST['id'];
	$username   = $_POST['username'];
	$password   = $_POST['password'];
	$firstname  = $_POST['firstname'];
	$lastname   = $_POST['lastname'];
	$position   = $_POST['position'];
	if(isset($_POST['field'])){
		$field = $_POST['field'];
	} else {
		$field = "";
	}
	
	
	$mysqli->query("UPDATE c_standardusers SET 
							su_user = '$username',
							su_pass = '$password', 
							su_fname = '$firstname',
							su_lname = '$lastname',
							su_position = '$position',
							su_field = '$field'
							
						where su_id = '$id'");

	
	echo "<script> window.location.href='users.php?updated';</script>";
}

if(isset($_POST['delete-user'])){
	
	$id  	    = $_POST['id'];

	
	$mysqli->query("DELETE FROM c_standardusers where su_id = '$id'");

	
	echo "<script> window.location.href='users.php?deleted';</script>";
}