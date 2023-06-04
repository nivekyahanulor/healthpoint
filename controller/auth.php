<?php

	ob_start();
	session_start();
	include('database.php');

	$username = mysqli_real_escape_string($mysqli,$_POST['username']);
	$password = mysqli_real_escape_string($mysqli,($_POST['password']));

	$sql      = "SELECT * FROM c_system_admin WHERE sys_user='$username' AND BINARY sys_pass='$password'";
	$result   = mysqli_query($mysqli, $sql);

	$row      = mysqli_fetch_assoc($result);
	$rows	  = mysqli_num_rows($result);
	
	if($rows==1){
		$_SESSION['name']  		= $row['sys_fname'];
		$_SESSION['id']    		= $row['sys_id'];
		$_SESSION['role']       = "System Administrator";
		header("location:../account/index.php?data=DAILY");
	} else { 
		$sql1      = "SELECT * FROM c_accounts WHERE email='$username' AND BINARY password='$password' AND s_status = 1";
		$result1   = mysqli_query($mysqli, $sql1);

		$row1      = mysqli_fetch_assoc($result1);
		$rows1	  = mysqli_num_rows($result1);
		if($rows1==1){
			$_SESSION['name']  		= $row1['firstname'] . ' '. $row1['lastname'];
			$_SESSION['id']    		= $row1['account_id'];
			$_SESSION['clinic']    	= $row1['clinic_name'];
			$_SESSION['plan']    	= $row1['plan'];
			$_SESSION['subscriptions']    	= $row1['subscriptions'];
			$_SESSION['role']       = "Clinic Admin";
		header("location:../account/index.php");
		} else {
			$sql2      = "SELECT * FROM c_standardusers WHERE su_user='$username' AND BINARY su_pass='$password' AND is_active = 1";
			$result2   = mysqli_query($mysqli, $sql2);

			$row2      = mysqli_fetch_assoc($result2);
			$rows2	  = mysqli_num_rows($result2);
			if($rows2==1){
			$_SESSION['name']  		= $row2['su_fname'] . ' '. $row2['su_lname'];
			$_SESSION['id']    		= $row2['trial_id'];
			$_SESSION['role']       = "Standard User";
			header("location:../account/patients.php");
			} else {
			header("location:../login.php?error");
			}
	}
	}
