<?php include("include/header.php");?>

<section class="book" id="book">
	<br>
	<br>
	<br>
	<br>
	<br>
    <h1 class="heading"> <span>Register for</span> Trial Version </h1>    
    <div class="row">
	
        <div class="image">
            <img src="assets/image/book-img.svg" alt="">
        </div>
		
        <form action="controller/process-trial.php" method="post">
		
		  <ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
			  <a class="nav-link " href="trial-login.php">Login</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link active" href="trial-register.php">Register</a>
			</li>
		
		  </ul>
		  <?php if(isset($_GET['registered'])){?>
		  <br>
		   <div class="oaerror info">
            <strong>Success!</strong> - Please verify your Email Address to start the trial account.
          </div>
	   	<?php } ?>
            <h3>Register here</h3>
            <div class="form-group">
            <input type="text" placeholder="First Name" name="fname" class="box" required>
            </div>
            <div class="form-group">
            <input type="text" placeholder="Last Name" name="lname" class="box" required>
            </div>
            <div class="form-group">
            <input type="email" placeholder="Email"  name="email" class="box" required>
            </div>
            <div class="form-group">
            <input type="password" placeholder="password" name="password" class="box" required>
            </div>
            <input type="submit" class="btn" name="register" value="submit">
        </form>

    </div>

</section>

<?php include("include/footer.php");?>
