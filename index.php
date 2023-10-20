<?php include("include/header.php");?>

<section class="home" id="home">

    <div class="image">
        <img src="assets/image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>ONLINE HEALTH RECORD SYSTEM  FOR <?php echo strtoupper($sval[1]);?></h3>
        <p>Forget about storage filling to keep patient records. the effective management tool for medical clinics, at your service.</p>
        <a href="#book"> </a>
    </div>

</section>

<!-- home section ends -->

<section class="about" id="about">

 <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="assets/image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>ABOUT US</h3>
            <p><?php echo htmlspecialchars_decode($sval[8]);?> </p>

			<h3>MISSION</h3>
            <p><?php echo htmlspecialchars_decode($sval[6]);?> </p>
			<h3>VISION</h3>
            <p><?php echo htmlspecialchars_decode($sval[9]);?> </p>
        </div>

    </div> 

</section>



<section class="services" id="services">

     <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">
		<?php
		$is_doctors = $mysqli->query("SELECT * from is_doctors");
		while($val = $is_doctors->fetch_object()){ 
		?>
        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Dr. <?php echo $val->firstname . ' ' . $val->lastname;?></h3>
            <p>Speciality : <?php echo  $val->speciality;?></p>
        </div>
		<?php } ?>
      
</div>
</section>

     
<?php include("include/footer.php");?>
