<?php include("include/header.php");?>

<!-- Register section Start -->

<section class="" id="book">


    <div class="row">

     <div class="price-sec-wrap">
        <div class=""><br><br><br>
            <div class="row">
                <div class="col-md-12 offset-md-2">
                    <div class="main-heading">SUBSCRIPTION PLAN</div>
                </div>
            </div>
            <div class="row">
			<?php
			include('controller/database.php');
			$c_subscrptions = $mysqli->query("SELECT * from c_subscrptions");
			 foreach($c_subscrptions as $plan){ 
			?>
                <div class="col-lg-4">
                    <div class="price-box">
                        <div class="text-center">
                        	<div class="price-label basic"><?php echo $plan['title'];?></div>
                        	<div class="price">₱ <?php echo number_format($plan['pricing'],2);?></div>
                        	<div class="price-info"><b><?php echo $plan['month'];?> MONTHS</b> <br> SUBSCRIPTION PLAN</div>
                        </div>
                        <div class="info">
                            <ul>
                              <?php echo $plan['description'];?> 
                            </ul>
                            <a href="subscription-registration.php?title=<?php echo $plan['title'];?>&data=<?php echo $plan['subscription_id'];?>&amount=<?php echo $plan['pricing'];?>&month=<?php echo $plan['month'];?>" class="plan-btn">Join Plan</a>
                        </div>
                    </div>
                </div>
			 <?php } ?>  
            </div>
        </div>
    </div>

    </div>

</section>
<!-- Register section ends -->
<!-- footer section starts  -->
<?php include("include/footer.php");?>
