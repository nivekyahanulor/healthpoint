<?php

$c_trial_standardusers = $mysqli->query("SELECT * from c_trial_standardusers");


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
	
	
	$mysqli->query("INSERT INTO c_trial_standardusers (su_user ,su_pass, su_fname,su_lname,su_position,su_field,trial_id) 
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
	
	
	$mysqli->query("UPDATE c_trial_standardusers SET 
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

	
	$mysqli->query("DELETE FROM c_trial_standardusers where su_id = '$id'");

	
	echo "<script> window.location.href='users.php?deleted';</script>";
}