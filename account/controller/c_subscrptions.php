<?php

$c_subscrptions = $mysqli->query("SELECT * from c_subscrptions");


if(isset($_POST['add-subscription'])){
	
	$title   	   = $_POST['title'];
	$description   = $_POST['description'];
	$month         = $_POST['month'];
	$pricing       = $_POST['pricing'];
	
	$mysqli->query("INSERT INTO c_subscrptions (title ,description, pricing,month) 
						VALUES ('$title','$description','$pricing','$month')");

	
	echo "<script> window.location.href='subscription.php?added';</script>";
}

if(isset($_POST['update-subscription'])){
	
	$id  	       = $_POST['id'];
	$title   	   = $_POST['title'];
	$description   = $_POST['description'];
	$month         = $_POST['month'];
	$pricing       = $_POST['pricing'];
	
	$mysqli->query("UPDATE c_subscrptions SET 
							title = '$title',
							description = '$description', 
							month = '$month',
							pricing = '$pricing'
							
						where subscription_id = '$id'");

	
	echo "<script> window.location.href='subscription.php?updated';</script>";
}

if(isset($_POST['delete-user'])){
	
	$id  	    = $_POST['id'];

	
	$mysqli->query("DELETE FROM c_trial_standardusers where su_id = '$id'");

	
	echo "<script> window.location.href='users.php?deleted';</script>";
}