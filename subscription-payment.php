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

    <h1 class="heading"> <span>PAYMENT PROCESS</span>  </h1>    

    <div class="row">

        <div class="image">
            <img src="assets/image/book-img.svg" alt="">
        </div>

       <form class="form-horizontal" method="POST" action="https://www.sandbox.PayPal.com/cgi-bin/webscr ">
            <h3>PROCEED TO PAYMENT</h3>
			
			<input type='hidden' name='business' value='sb-xrhyq25047004@business.example.com'>
            <input type='hidden' name='item_name' value='Subscription Plan Payment'>
            <input type='hidden' name='no_shipping' value='1'>
             <input type='hidden' name='amount' value='1'>
            <input type='hidden' name='currency_code' value='PHP'>
            <input type='hidden' name='notify_url' value='<?php echo $payment->route("notify", "") ?>'>
            <input type='hidden' name='cancel_return' value='<?php echo $payment->route("https://synth-compendium.com/success.php", "") ?>'>
            <input type='hidden' name='return' value='<?php echo $payment->route("https://synth-compendium.com/success.php") ?>'>
            <input type="hidden" name="cmd" value="_xclick">

			
            <input type="submit" name="register" value="PAYMENT PROCESS" class="btn">
            
        </form>

    </div>

</section>


<?php include("include/footer.php");?>
