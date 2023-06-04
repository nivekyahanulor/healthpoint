<?php include("include/header.php");?>

<section class="book" id="book">
	<br>
	<br>
	<br>
	<br>
	<br>
    <h3 class="heading"> <span>Login for</span> Account</h3>    
    <div class="row">
	
        <div class="image">
            <img src="assets/image/logo.png" alt="">
			<center><h4>Patient Record Management System</h4></center>
        </div>
		
        <form action="controller/auth.php" method="post">
		
		
			  <?php if(isset($_GET['error'])){?>
			  <br>
			     <div class="alert alert-warning">
				<strong>Error!</strong> - Please check your login details!
			  </div>
			  <?php } ?>
            <h3>Login Account</h3>
            <div class="form-group">
            <input type="text" placeholder="User Name" name="username" class="box text-center" required>
            </div>
            <div class="form-group">
            <input type="password" placeholder="Password" name="password" class="box text-center" required>
            </div>
         
            <input type="submit" class="btn" name="login" value="submit">
        </form>

    </div>
<br>

</section>
<?php include("include/footer.php");?>
