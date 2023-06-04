<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONLINE HEALTH RECORD SYSTEM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
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
	.price-sec-wrap {
			width: 100%;
			float: left;
			padding: 60px 0;
			font-family: 'Lato', sans-serif;
		}
		.main-heading {
			text-align: center;
		    font-weight: 600;
		    padding-bottom: 15px;
		    position: relative;
		    text-transform: capitalize;
		    font-size: 24px;
		    margin-bottom: 25px;
		}
		.price-box {
			box-shadow: 0 0 35px rgba(0, 0, 0, 0.10);
			padding: 20px;
			background: #fff;
    		border-radius: 4px;
		}
		.price-box ul {
    		padding: 10px 0px 30px;
		    margin: 17px 0 0 0;
		    list-style: none;
		    border-top: solid 1px #e9e9e9;
		}
		.price-box ul li {
			padding: 7px 0;
		    font-size: 14px;
		    color: #808080;
		}
		.price-box ul li .fas {
			color: #68AE4A;
			margin-right: 7px; 
			font-size: 12px;
		}
		.price-label {
			font-size: 16px;
		    font-weight: 600;
		    line-height: 1.34;
		    margin-bottom: 0;
		    padding: 6px 15px;
		    display: inline-block;
		    border-radius: 3px; 
		}
		.price-label.basic {
		    background: #E8EAF6;
		    color: #3F51B5;
		}
		.price-label.value {
		    background: #E8F5E9;
		    color: #4CAF50;
		}
		.price-label.premium {
		    background: #FBE9E7;
		    color: #FF5722;
		}
		.price {
			font-size: 44px;
		    line-height: 44px;
		    margin: 15px 0 6px;
		    font-weight: 900;
		}
		.price-info {
			font-size: 14px;
		    font-weight: 400;
		    line-height: 1.67;
		    color: inherit;
		    width: 100%;
		    margin: 0;
		    color: #989898;
		}
		.plan-btn {
		  text-transform: uppercase;
		  font-weight: 600;
		  display: block;
		  padding: 11px 30px;
		  border: 2px solid #b3b3b3;
		  color: #000;
		  margin-top: 5px;
		  overflow: hidden;
		  position: relative;
		  z-index: 1;
		  margin: 0;
		  border-radius: 5px;
		  text-decoration: none;
		  width: 100%;
		  text-align: center;
		  font-size: 14px;
		}
		.plan-btn::after {
		  position: absolute;
		  left: -100%;
		  top: 0;
		  content: "";
		  height: 100%;
		  width: 100%;
		  background: #000;
		  z-index: -1;
		  transition: all 0.35s ease-in-out;
		}
		.plan-btn:hover::after {
		  left: 0;
		}
		.plan-btn:hover, 
		.plan-btn:focus {
			text-decoration: none;
			color: #fff;
		  border: 2px solid #000;
		}
		@media (max-width: 991px) {
			.price-box {
				margin-bottom: 20px;
			}
		}
		@media (max-width: 575px) {
			.main-heading {
				font-size: 21px;
			}
			.price-box {
				margin-bottom: 20px;
			}
		}
	</style>
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#home" class="logo"> <img src="assets/image/logo.png" width="80" height="80"> HEALTHPOINT

    <nav class="navbar">
        <a href="index.php#home">home</a>
        <a href="index.php#about">about</a>
        <a href="index.php#services">services</a>
        <a href="login.php">Login</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>
