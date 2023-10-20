
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
			  <a href="patient-profile?data=<?php echo $_GET['data'];?>" class="nav-link active">Patient Information </a>
			</li>
			<li class="nav-item">
			  <a href="patient-medical-history?data=<?php echo $_GET['data'];?>"  class="nav-link" >Medical History</a>
			</li>
			<li class="nav-item">
			  <a href="patient-medical-admission?data=<?php echo $_GET['data'];?>"  class="nav-link " >Admission</a>
			</li>
		  </ul>
		<div class="row match-height">
		
			<div class="col-md-6">
				<div class="card" style="height: 1028px;">
					
					<div class="card-content collapse show">
						<div class="card-body">
							<div class="card-text">
							</div>
							<form class="form" method="POST">
								<div class="form-body">
									<h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
									<?php while($val = $is_patients_profile->fetch_object()){	?>
								
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput1">First Name</label>
												<input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="firstname" value="<?php echo $val->firstname;?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput2">Last Name</label>
												<input type="text" id="projectinput2" class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $val->lastname;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput3">E-mail</label>
												<input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email"  value="<?php echo $val->email;?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput4">Contact Number</label>
												<input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="contact" value="<?php echo $val->contact;?>">
											</div>
										</div>
									</div>
									
								
								</div>

								<div class="form-actions">
									
									<button type="submit" class="btn btn-primary" name="update-profile">
										<i class="la la-check-square-o"></i> UPDATE
									</button>
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
									<h4 class="form-section"><i class="ft-user"></i> Medical Information</h4>
								
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput1">Blood Pressure</label>
												<input type="text" id="projectinput1" class="form-control" placeholder="" name="bp" value="<?php echo $val->bp;?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput2">Glucose</label>
												<input type="text" id="projectinput2" class="form-control" placeholder="" name="glucose" value="<?php echo $val->glucose;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput3">Heart Rate</label>
												<input type="text" id="projectinput3" class="form-control" placeholder="" name="heartrate"  value="<?php echo $val->heartrate;?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="projectinput4">Cholestrol</label>
												<input type="text" id="projectinput4" class="form-control" placeholder="" name="cholesterol" value="<?php echo $val->cholesterol;?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="projectinput3">Symptoms</label>
												<textarea type="text" id="projectinput3" class="form-control" placeholder="" name="symptoms" ><?php echo $val->symptoms;?></textarea>
											</div>
										</div>
										
									</div>
									
									<h4 class="form-section"><i class="la la-user"></i> Insurance Information</h4>

									<div class="form-group">
										<label for="companyName">Name Of Insaurance Company :</label>
										<input type="text" id="companyName" class="form-control" name="i_company" value="<?php echo $val->i_company;?>">
									</div>

									<div class="form-group">
										<label for="companyName">Insaurance Number :</label>
										<input type="text" id="companyName" class="form-control" name="i_number" value="<?php echo $val->i_number;?>">
									</div>

									<div class="form-group">
										<label for="companyName">Amount Of Insaurance :</label>
										<input type="text" id="companyName" class="form-control" name="i_amount" value="<?php echo $val->i_amount;?>">
									</div>

									<div class="form-group">
										<label for="companyName">Expiry Date :</label>
										<input type="date" id="companyName" class="form-control" name="i_expiry" value="<?php echo $val->i_expiry;?>">
									</div>

							
								
								</div>

								<div class="form-actions">
									
									<button type="submit" class="btn btn-primary" name="update-profile_1">
										<i class="la la-check-square-o"></i> UPDATE
									</button>
								</div>
							</form>
						
						<?php } ?>
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
