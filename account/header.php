<!DOCTYPE html>
<html lang="en">
<?php
date_default_timezone_set("Asia/Manila");
include("../controller/database.php");
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../index.php");
}
?><head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="Compendium.png" />

  <title></title>

  <!-- Custom fonts for this template-->
  <link href="../assets/accounts/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/accounts/css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/accounts/loader.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src = "../assets/accounts/js/scripts/jquery.canvasjs.min.js"></script>

<style>
	.error-notice {
	  margin: 5px 5px; /* Making sure to keep some distance from all side */
	}

	.oaerror {
	  width: 90%; /* Configure it fit in your design  */
	  margin: 0 auto; /* Centering Stuff */
	  background-color: #FFFFFF; /* Default background */
	  padding: 20px;
	  border: 1px solid #eee;
	  border-left-width: 5px;
	  border-radius: 3px;
	  margin: 0 auto;
	  font-family: 'Open Sans', sans-serif;
	  font-size: 12px;
	}

	.danger {
	  border-left-color: #d9534f; /* Left side border color */
	  background-color: rgba(217, 83, 79, 0.1); /* Same color as the left border with reduced alpha to 0.1 */
	}

	.danger strong {
	  color:  #d9534f;
	}

	.warning {
	  border-left-color: #f0ad4e;
	  background-color: rgba(240, 173, 78, 0.1);
	}

	.warning strong {
	  color: #f0ad4e;
	}

	.info {
	  border-left-color: #5bc0de;
	  background-color: rgba(91, 192, 222, 0.1);
	}

	.info strong {
	  color: #5bc0de;
	}

	.success {
	  border-left-color: #2b542c;
	  background-color: rgba(43, 84, 44, 0.1);
	}

	.success strong {
	  color: #2b542c;
	}
	
	</style>
 <style>
.sidenav {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  background-color: #0CF4F1;
}

.main {
  margin-left: 225px; /* Same as the width of the sidenav */

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



</style>


</head> 