
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
	  
		<div class="row match-height">
		
			<div class="col-md-6">
				<div class="card" style="height: 1028px;">
					
					<div class="card-content collapse show">
						<div class="card-body">
							<div class="card-text">
							</div>
							<form class="form" method="POST">
								<div class="form-body">
									<h4 class="form-section"><i class="ft-user"></i> Personal Information</h4>
									<?php while($val = $is_patients_profile->fetch_object()){	?>
								
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput1">Patient Name</label> <br>
												<b><?php echo $val->firstname . ' '.  $val->lastname;?></b>
											</div>
										</div>
									
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput3">E-mail Address</label>
												<br>
												<b><?php echo $val->email;?></b>
											</div>
										</div>
									
									</div>
									
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput4">Contact Number</label>
												<br>
												<b><?php echo $val->contact;?></b>
											</div>
										</div>
										
									</div>
									<h4 class="form-section"><i class="ft-user"></i> Medical Information</h4>
										<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput1">Blood Pressure</label>
												<br>
												<b><?php echo $val->bp;?></b>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput2">Glucose</label>
												<br>
												<b><?php echo $val->glucose;?></b>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput3">Heart Rate</label>
												<br>
												<b><?php echo $val->heartrate;?></b>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput4">Cholestrol</label>
												<br>
												<b><?php echo $val->cholesterol;?></b>
											</div>
										</div>
							

							
								
								</div>
								<?php } ?>
								</div>

							
							</form>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="card" style="height: 1028px;">
					
					<div class="card-content collapse show">
						<div class="card-body">

							<div class="card-text">
							</div>
								<form class="form" method="POST">
								<div class="form-body">
									<h4 class="form-section"><i class="ft-user"></i> Appointment Result</h4>
									<?php while($val1 = $is_patients_history->fetch_object()){	?>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="projectinput1">Consultation Result</label>
												<textarea type="text" id="projectinput3" class="form-control" placeholder="" name="consultation" ><?php echo $val1->consultation;?></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="projectinput1">Diagnosis Result</label>
												<textarea type="text" id="projectinput3" class="form-control" placeholder="" name="diagnosis" ><?php echo $val1->diagnosis;?></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="projectinput3">Treatment Details</label>
												<textarea type="text" id="projectinput3" class="form-control" placeholder="" name="treatment" ><?php echo $val1->treatment;?></textarea>
											</div>
										</div>
									
									</div>
									<?php } ?>
								</div>

								<div class="form-actions">
									
									<button type="submit" class="btn btn-primary" name="update-profile_1">
										<i class="la la-check-square-o"></i> UPDATE
									</button>
								</div>
							</form>
						
						
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
