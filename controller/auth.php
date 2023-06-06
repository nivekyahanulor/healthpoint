<?php

	ob_start();
	session_start();
	include('database.php');

	$username = mysqli_real_escape_string($mysqli,$_POST['username']);
	$password = mysqli_real_escape_string($mysqli,($_POST['password']));

	$sql      = "SELECT * FROM is_users WHERE username='$username' AND BINARY password='$password'";
	$result   = mysqli_query($mysqli, $sql);

	$row      = mysqli_fetch_assoc($result);
	$rows	  = mysqli_num_rows($result);
	
	if($rows==1){
		$_SESSION['name']  		= $row['firstname']. ' '. $row['lastname'];
		$_SESSION['id']    		= $row['user_id'];
		$_SESSION['role']       = "System Administrator";
		header("location:../admin/dashboard");
	} else { 
		$sql1      = "SELECT * FROM is_doctors WHERE username='$username' AND BINARY password='$password' AND is_active = 1";
		$result1   = mysqli_query($mysqli, $sql1);

		$row1      = mysqli_fetch_assoc($result1);
		$rows1	  = mysqli_num_rows($result1);
		if($rows1==1){
			$_SESSION['name']  		= $row1['firstname'] . ' '. $row1['lastname'];
			$_SESSION['id']    		= $row1['doctor_id'];
			$_SESSION['role']       = "Doctor";
		header("location:../doctor/dashboard");
		} else {
			$sql2      = "SELECT * FROM is_patients WHERE username='$username' AND BINARY password='$password' AND is_active = 1";
			$result2   = mysqli_query($mysqli, $sql2);

			$row2      = mysqli_fetch_assoc($result2);
			$rows2	  = mysqli_num_rows($result2);
			if($rows2==1){
			$_SESSION['name']  		= $row2['firstname'] . ' '. $row2['lastname'];
			$_SESSION['id']    		= $row2['patient_id'];
			$_SESSION['role']       = "Patient";
			header("location:../patients/dashboard");
			} else {
			header("location:../login.php?error");
			}
	}
	}
