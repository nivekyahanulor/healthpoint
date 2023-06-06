
  <?php include("include/header.php");?>
  <?php include("controller/patients.php");?>
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
 
	   <section id="basic-form-layouts">
	    <ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
			  <a href="patient-profile?data=<?php echo $_GET['data'];?>" class="nav-link ">Patient Information </a>
			</li>
			<li class="nav-item">
			  <a href="patient-medical-history?data=<?php echo $_GET['data'];?>"  class="nav-link active" >Medical History</a>
			</li>
			
		  </ul>
		<div class="row match-height">
		
			<div class="col-md-12">
				<div class="card" style="height: 1028px;">
					
					<div class="card-content collapse show">
						<div class="card-body">
							<div class="card-text">
							</div>
							<form class="form" method="POST">
								<div class="form-body">
									<h4 class="form-section"><i class="ft-user"></i> Medical History</h4>
									<table class="table alt-pagination wallet-wrapper table-bordered table-striped">
									<thead>
										<tr>
											<th class="text-center">Patient Name</th>
											<th class="text-center">Doctors Name</th>
											<th class="text-center">Date</th>
											<th class="text-center">Time</th>
											<th class="text-center">Status</th>
										</tr>
									</thead>
									<tbody>
									<?php while($val = $is_patients_history->fetch_object()){ ?>
										<tr>
											<td class="text-center"><?php echo $val->p_fname . ' '. $val->p_lastname;?></td>
											<td class="text-center"><?php echo $val->d_fname . ' '. $val->d_lname;?></td>
											<td class="text-center"><?php echo $val->appointment_date;?></td>
											<td class="text-center"><?php echo $val->appointment_time;?></td>
											<td class="text-center"><?php if( $val->status == 0) { echo "Pending";} else { echo '<a href="#" data-toggle="modal" data-backdrop="false" data-target="#results'.$val->appointment_id.'" class="btn round btn-outline-info btn-sm"> <i class="la la-check"></i> View Results </a>';} ?></td>
											</td>
										</tr>
										<div class="modal fade text-left" id="results<?php echo $val->appointment_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" style="display: none;" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myModalLabel4"> Results</h4>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close" fdprocessedid="oewei8">
															<span aria-hidden="true">×</span>
														</button>
													</div>
													<div class="modal-body">
													<form method="POST">
												
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label for="projectinput1">Consultation Result</label>
																<br><br>
																<b><?php echo $val->consultation;?></b>
															</div>
														</div>
														<div class="col-md-12">
															<div class="form-group">
																<label for="projectinput1">Diagnosis Result</label>
																<br><br>
																<b><?php echo $val->diagnosis;?></b>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<div class="form-group">
																<label for="projectinput3">Treatment Details</label>
																<br><br>
																<b><?php echo $val->treatment;?></b>
															</div>
														</div>
													
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal" >Close</button>
													</div>
												</form>
												</div>
											</div>
										</div>

									<?php } ?>	
								
									</tbody>
								</table>
								
								</div>

							
						</div>
					</div>
				</div>
			</div>

		</div>

	</section>
	</div>


<!-- Active Orders -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


      <?php include("include/footer.php");?>
