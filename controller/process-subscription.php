<?php

	ob_start();
	session_start();
	include('database.php');
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/vendor/phpmailer/phpmailer/src/Exception.php';
	require 'phpmailer/vendor/phpmailer/phpmailer/src/PHPMailer.php';
	require 'phpmailer/vendor/phpmailer/phpmailer/src/SMTP.php';
	
	if(isset($_POST['register'])){
		
	$clinicname = mysqli_real_escape_string($mysqli,$_POST['clinicname']);
	$fname       = mysqli_real_escape_string($mysqli,$_POST['fname']);
	$lname       = mysqli_real_escape_string($mysqli,$_POST['lname']);
	$email       = mysqli_real_escape_string($mysqli,$_POST['email']);
	$month       = mysqli_real_escape_string($mysqli,$_POST['month']);
	$plan        = mysqli_real_escape_string($mysqli,$_POST['plan']);
	$contact     = mysqli_real_escape_string($mysqli,$_POST['contact']);
	$password    = mysqli_real_escape_string($mysqli,md5($_POST['password']));
	$name        = $fname. ' '. $lname;
	
	$check = $mysqli->query("select * from c_accounts where email = '$email'");
	echo $count = $check->num_rows;
	
	if($count != 0){
		header("location:../subscription-registration.php?duplicateemail");
	} else {
			
	$mysqli->query("INSERT INTO c_accounts (firstname , lastname,clinic_name,contact ,email,password,plan,month) 
											VALUES ('$fname','$lname','$clinicname','$contact','$email','$password','$plan','$month')");
	

	$total	     = $_POST['amount'];

	// $curl = curl_init();

	// curl_setopt_array($curl, array(
	  // CURLOPT_URL => 'https://g.payx.ph/payment_request',
	  // CURLOPT_RETURNTRANSFER => true,
	  // CURLOPT_ENCODING => '',
	  // CURLOPT_MAXREDIRS => 10,
	  // CURLOPT_TIMEOUT => 0,
	  // CURLOPT_FOLLOWLOCATION => true,
	  // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  // CURLOPT_CUSTOMREQUEST => 'POST',
	  // CURLOPT_POSTFIELDS => array(
		// 'x-public-key' => 'pk_f51984d00df2ad862d120c5049eb3c1a',
		// 'amount' =>  $total,
		// 'description' => 'Payment for Subscription Plan',
		// 'merchantlogourl' => 'https://synth-compendium.com/Main/image/logo.png',
		// 'webhooksuccessurl' => 'https://synth-compendium.com/success.php?email='.$email,
		// 'redirectsuccessurl' => 'https://synth-compendium.com/success.php?email='.$email
	  // ),
	// ));

	// $response = curl_exec($curl);

	// curl_close($curl);
	// echo $response;
	// $data = json_decode($response, true);
	// echo $data['data']['checkouturl'];
	

	echo "<script> window.location.href='subscription-payment.php';</script>";
	
	}
	
	} 
	

