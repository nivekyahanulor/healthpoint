
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
    <div class="col-xl-4 col-12">
        <div class="card crypto-card-3 pull-up">
            <div class="card-content">
                <div class="card-body pb-0">
				<a href="tes">
                    <div class="row">
                        <div class="col-2">
						<i class="la la-user  warning font-large-2"></i>
                        </div>
                        <div class="col-5 pl-2">
                            <h4>TOTAL PATIENTS</h4>
                        </div>
                        <div class="col-5 text-right">
                            <h2> <?php echo $total_patients;?></h2>
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
    <div class="col-xl-4 col-12">
        <div class="card crypto-card-3 pull-up">
            <div class="card-content">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-2">
						<i class="la la-user  info font-large-2"></i>
                        </div>
                        <div class="col-5 pl-2">
                            <h4>TOTAL DOCTORS</h4>
                        </div>
                        <div class="col-5 text-right">
                            <h2> <?php echo $total_doctors;?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12"><canvas id="eth-chartjs" class="height-75"></canvas></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-12">
        <div class="card crypto-card-3 pull-up">
            <div class="card-content">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-2">
                            <i class="la la-calendar info font-large-2" title="XRP"></i>
                        </div>
                        <div class="col-5 pl-2">
                            <h4> APPOINTMENTS </h4>
                        </div>
                        <div class="col-5 text-right">
                            <h2> <?php echo $total_appointments;?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12"><canvas id="xrp-chartjs" class="height-75"></canvas></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Candlestick Multi Level Control Chart -->

<!-- Slaes & Purchase Order -->
<div class="row">
    <div class="col-12 col-xl-4">
      <div id="accordionCrypto" role="tablist" aria-multiselectable="true">
        <div class="card accordion collapse-icon accordion-icon-rotate">

            <a id="heading31" data-toggle="collapse"  href="#"
                aria-expanded="true" aria-controls="accordionBTC" class="card-header bg-info p-1 bg-lighten-1">
                <div class="card-title lead white">APPOINTMENTS REPORTS</div>
            </a>
            <div id="accordionBTC" role="tabpanel" data-parent="#accordionCrypto" aria-labelledby="heading31" class=" collapse show"
                aria-expanded="true">
                <div class="card-content">
                    <div class="card-body p-0">
                        <div class="media-list list-group">
                             <div id="container-1"></div>
                        </div>
                    </div>
                </div>
            </div>
			<a id="heading31" data-toggle="collapse"  href="#"
                aria-expanded="true" aria-controls="accordionBTC" class="card-header bg-info p-1 bg-lighten-1">
                <div class="card-title lead white">PATIENTS REPORTS</div>
            </a>
            <div id="accordionpatients" role="tabpanel" data-parent="#accordionCrypto" aria-labelledby="heading31" class=" collapse show"
                aria-expanded="true">
                <div class="card-content">
                    <div class="card-body p-0">
                        <div class="media-list list-group">
                             <div id="container-2"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <div class="col-12 col-xl-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">BCH/USD</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              
            </div>
            <div class="card-content collapse show">
                <div class="card-body pt-0">
                      <div id="calendar"></div>
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
