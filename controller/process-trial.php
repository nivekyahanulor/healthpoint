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
	$fname       = mysqli_real_escape_string($mysqli,$_POST['fname']);
	$lname       = mysqli_real_escape_string($mysqli,$_POST['lname']);
	$email       = mysqli_real_escape_string($mysqli,$_POST['email']);
	$password    = mysqli_real_escape_string($mysqli,md5($_POST['password']));
	$name        = $fname. ' '. $lname;
	
	$check = $mysqli->query("select * from c_trial_accounts where email = '$email'");
	echo $count = $check->num_rows;
	
	if($count != 0){
		header("location:../trial-register.php?duplicateemail");
	} else {
			$mail = new PHPMailer();
			$mail->isSMTP();
			$mail->Host     = 'smtp.hostinger.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'support@synth-compendium.com';
			$mail->Password = '@Programmer2013';
			$mail->SMTPSecure = 'ssl'; // tls
			$mail->Port     = 465; // 587
			$mail->setFrom('support@synth-compendium.com', 'COMPENDIUM SYSTEM');
			$mail->addAddress($email);
			$mail->Subject = 'Trial Account Confirmation';
			$mail->isHTML(true);


			$mail->Body = "<html>
								<body>
									<h1>Hello , " .$fname . ' ' . $lname ." </h1>
									<p> Thank you for registering to COMPENDIUM SYSTEM</p>
									<p> Kindly confirm your email address via the link below in order to start using your profile</p>
									<p> <a href='https://synth-compendium.com/confirm.php?name=$name&email=$email'> Link Here </a> </p>
								</body>
							</html>";

			if ($mail->send()) {
				$message = 'success';
			} else {
				$message = 'failed';
			}
	$mysqli->query("INSERT INTO c_trial_accounts (firstname , lastname ,email,password) 
											VALUES ('$fname','$lname','$email','$password')");
	

	header("location:../trial-register.php?registered");
	
	}
	
	} 
	
	
	if(isset($_POST['login'])){
		
	$username = mysqli_real_escape_string($mysqli,$_POST['username']);
	$password = mysqli_real_escape_string($mysqli,md5($_POST['password']));

	$sql      = "SELECT * FROM c_trial_accounts WHERE email='$username' AND BINARY password='$password' AND trial_status = 1";
	$result   = mysqli_query($mysqli, $sql);

	$row      = mysqli_fetch_assoc($result);
	$rows	  = mysqli_num_rows($result);
	
	if($rows==1){
		$_SESSION['name']  = $row['firstname'].' '. $row['lastname'];
		$_SESSION['id']    = $row['trial_id'];
		$_SESSION['trial_days'] = $row['trial_days'];
		header("location:../trial/index.php");
	} else { 
		header("location:../trial-login.php?error");
	}

	}
