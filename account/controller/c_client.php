<?php

$c_accounts = $mysqli->query("SELECT a.* ,b.* from c_accounts a left join c_subscrptions b on b.subscription_id = a.plan");



if(isset($_POST['approved-user'])){
	
	$id  	    = $_POST['id'];
	$month  	= $_POST['month'];
	$email  	= $_POST['email'];
	$clinic_name  	= $_POST['clinic_name'];
	$monthtotal = 30 * $month;
	$date = strtotime("+".$monthtotal."day", strtotime(date("Y-m-d")));
	$subscriptions =  date('Y-m-d', $date);
	
	$mysqli->query("UPDATE c_accounts 
					SET s_status = 1, subscriptions='$subscriptions'
	where account_id  = '$id'");

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
									<h1>Hello , " .$clinic_name ." </h1>
									<p> Your Subscription to COMPENDIUM SYSTEM is now approved!</p>
									<p> Please use your account to login.</p>
									<p> <a href='https://synth-compendium.com/index.php'> Login Here </a> </p>
								</body>
							</html>";

			if ($mail->send()) {
				$message = 'success';
			} else {
				$message = 'failed';
			}
			
			
	echo "<script> window.location.href='client.php?updated';</script>";
}