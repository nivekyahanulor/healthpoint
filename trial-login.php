<?php include("include/header.php");?>

<section class="book" id="book">
	<br>
	<br>
	<br>
	<br>
	<br>
    <h1 class="heading"> <span>Login for</span> Trial Version </h1>    
    <div class="row">
	
        <div class="image">
            <img src="assets/image/book-img.svg" alt="">
        </div>
		
        <form action="controller/process-trial.php" method="post">
		
		  <ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
			  <a class="nav-link active" href="trial-login.php">Login</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="trial-register.php">Register</a>
			</li>
		
		  </ul>
			  <?php if(isset($_GET['error'])){?>
			  <br>
			     <div class="alert alert-warning">
				<strong>Error!</strong> - Please check your login details!
			  </div>
			  <?php } ?>
			    <?php if(isset($_GET['expired'])){?>
			  <br>
			     <div class="alert alert-info">
					<strong>Trial Account Ended:</strong> Sorry your trial account has been ended!
				</div>

			  <?php } ?>
            <h3>Login Account</h3>
            <div class="form-group">
            <input type="text" placeholder="Email Address" name="username" class="box" required>
            </div>
            <div class="form-group">
            <input type="password" placeholder="Password" name="password" class="box" required>
            </div>
         
            <input type="submit" class="btn" name="login" value="submit">
        </form>

    </div>

</section>

<?php include("include/footer.php");?>
