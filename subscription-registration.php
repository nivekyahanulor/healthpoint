<?php include("include/header.php");

include "controller/paypal/vendor/autoload.php";
include "controller/process-paypal.php";
include "controller/process-subscription.php";

use Payment\Payment;
$payment = new Payment;

?>


<br>
<br>
<br>
<br>
<section class="book" id="book">

    <h1 class="heading"> <span><?php echo $_GET['title'];?></span>  </h1>    

    <div class="row">

        <div class="image">
            <img src="assets/image/book-img.svg" alt="">
        </div>

       <form class="form-horizontal" method="POST" action="">
            <h3>Information</h3>
			
            <input type="text" name="clinicname" placeholder="Clinic Name" class="box" required>
            <input type="hidden" name="amount"  value= "1">
            <input type="hidden" name="month"  value= "<?php echo $_GET['month'];?>">
            <input type="hidden" name="plan"  value= "<?php echo $_GET['data'];?>">
            <input type="text" name="fname" placeholder="First Name" class="box" required>
            <input type="text" name="lname" placeholder="Last Name" class="box" required>
            <input type="text" name="contact" placeholder="Contact Number" class="box" required>
            <input type="email" name="email" placeholder="Email" class="box" required>
            <input type="password" name="password" placeholder="Password" class="box" required>
			
			<input type='hidden' name='business' value='sb-xrhyq25047004@business.example.com'>
            <input type='hidden' name='item_name' value='<?php echo $_GET['data'];?>'>
            <input type='hidden' name='no_shipping' value='1'>
            <input type='hidden' name='currency_code' value='PHP'>
            <input type='hidden' name='notify_url' value='<?php echo $payment->route("notify", "") ?>'>
            <input type='hidden' name='cancel_return' value='<?php echo $payment->route("https://synth-compendium.com/success.php", "") ?>'>
            <input type='hidden' name='return' value='<?php echo $payment->route("return", "https://synth-compendium.com/success.php") ?>'>
            <input type="hidden" name="cmd" value="_xclick">

			
            <input type="submit" name="register" value="Submit" class="btn">
            
        </form>

    </div>

</section>


<?php include("include/footer.php");?>
