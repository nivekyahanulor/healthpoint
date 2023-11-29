  <?php 
	  include("include/header.php");
	  include("controller/logs.php");
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
					
						<div class="card-header">
						
							<h4 class="card-title">Logs Data </h4>
							
							<br>
							
						</div>
						
						<div class="card-content">
						
							<div class="table-responsive">
								<table class="table alt-pagination wallet-wrapper table-bordered table-striped">
									<thead>
										<tr>
											<th class="text-center">Name </th>
											<th class="text-center">Activity</th>
											<th class="text-center">Date</th>
										</tr>
									</thead>
									<tbody>
									<?php while($val = $is_logs->fetch_object()){ ?>
										<tr>
											<td class="text-center"><?php echo $val->name;?></td>
											<td class="text-center"><?php echo $val->logs;?></td>
											<td class="text-center"><?php echo $val->date_added;?></td>
										</tr>
									<?php } ?>	
									</tbody>
								</table>
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
