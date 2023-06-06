
  <?php include("include/header.php");?>
  <?php include("controller/dashboard.php");?>
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

   <?php include("include/nav.php");?>


    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div id="crypto-stats-3" class="row">
		 <div class="col-xl-5 col-12">
        <div class="card crypto-card-3 pull-up">
            <div class="card-content">
                <div class="card-body pb-0">
				<a href="tes">
                    <div class="row">
                        <div class="col-2">
						<i class="la la-user  info font-large-2"></i>
                        </div>
                        <div class="col-5 pl-2">
                            <h4>TOTAL APPOINTMENTS</h4>
                        </div>
                        <div class="col-5 text-right">
                            <h2> <?php echo $totalcustomer;?></h2>
                        </div>
                    </div>
				</a>
                </div>
                <div class="row">
                    <div class="col-12"><canvas id="btc-chartjs" class="height-75"></canvas></div>
                </div>
            </div>
        </div>
    </div>
		<div class="col-xl-7 col-12">
        <div class="card crypto-card-3 pull-up">
            <div class="card-content">
                <div class="card-body pb-0">
                    <div class="row">
                      <div id="calendar"></div>
                    </div>
                </div>
               
            </div>
        </div>
		</div>
   
   
</div>


<!-- Active Orders -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


<?php include("include/footer.php");?>
