<?php include("include/header.php");?>

<section class="book" id="book">
	<br>
	<br>
	<br>
	<br>
	<br>
    <h1 class="heading"> <span>Patient</span> Registration </h1>    
    <div class="row">
	
        <div class="image">
            <img src="assets/image/book-img.svg" alt="">
        </div>
		
        <form action="controller/register" method="post">
		
		  <?php if(isset($_GET['registered'])){?>
		  <br>
		   <div class="oaerror info">
            <strong>Success!</strong> - Thank you for registering at HEALTHPOINT
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
            <input type="email" placeholder="Email Address"  name="email" class="box" required>
            </div>
			<div class="form-group">
            <input type="text" placeholder="Contact Number"  name="contact" class="box" required>
            </div>
			<div class="form-group">
            <input type="text" placeholder="User Name"  name="username" class="box" required>
            </div>
            <div class="form-group">
            <input type="password" placeholder="password" name="password" class="box" required>
            </div>
            <input type="submit" class="btn" name="register" value="submit">
        </form>

    </div>

</section>

<?php include("include/footer.php");?>
