  <?php 
	  include("include/header.php");
	  include("controller/doctor.php");
  ?>
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
        <div class="content-body">
			<div class="row">
			
				<div class="col-12">
				
					<div class="card">
					<div class="card-body">
						</p>
						<ul class="nav nav-tabs">
						  <li class="nav-item">
							<a class="nav-link" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Daily</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link active" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Weekly</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Monthly</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Yearly</a>
						  </li>
						</ul>
						<div class="tab-content px-1 pt-1">
						  <div role="tabpanel" class="tab-pane" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
							<div id="container-daily"></div>

						  </div>
						  <div class="tab-pane active" id="tab2" aria-labelledby="base-tab2">
							<div id="container-weekly"></div>

							</p>
						  </div>
						  <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
							 <div id="container-1"></div>

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
	
      <?php include("include/footer.php");?>
