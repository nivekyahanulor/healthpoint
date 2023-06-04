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

	$email = $_GET['email'];

	?>


	<section class="home" id="home">

		<div class="image">
			<img src="assets/image/home-img.svg" alt="">
		</div>

		<div class="content">
			<h3>Subscription Account Success!</h3>
			<p>Hello <b><?php echo $_GET['email'];?></b> , Thank You for subscribing to  Synthesizers . <br> <br> Please wait for Administrator approval to validate your account. <br><br> Thank You!</p>
			<a href="#book"> </a>
		</div>

	</section>


