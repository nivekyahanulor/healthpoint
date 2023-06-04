<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compendium</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
	<?php
	include('controller/database.php');

	$email = $_GET['email'];
	$name  = $_GET['name'];
	$date = strtotime("+7 day", strtotime(date("Y-m-d")));
	$trialdays =  date('Y-m-d', $date);
	$mysqli->query("UPDATE c_trial_accounts set trial_status = 1  , trial_days = '$trialdays' where email='$email'");

	?>


	<section class="home" id="home">

		<div class="image">
			<img src="assets/image/home-img.svg" alt="">
		</div>

		<div class="content">
			<h3>Trial Account Confirmed!</h3>
			<p>Hello <b><?php echo $_GET['name'];?></b> , You have 7 day's access to our trial account. <br> <br> You can now use your trial account using your registered Email Address and Password <br><br> Thank You!</p>
			<a href="#book"> </a>
		</div>

	</section>


