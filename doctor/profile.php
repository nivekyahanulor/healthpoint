
  <?php include("include/header.php");?>
  <?php include("controller/profile.php");?>
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
									<h4 class="form-section"><i class="ft-user"></i> Personal Info</h4>
									<?php while($val = $account->fetch_object()){	?>
								
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
									
									<h4 class="form-section"><i class="la la-user"></i> Account</h4>

									<div class="form-group">
										<label for="companyName">User Name:</label>
										<input type="text" id="companyName" class="form-control" name="username" value="<?php echo $val->username;?>">
									</div>

									<div class="form-group">
										<label for="companyName">Password:</label>
										<input type="password" id="companyName" class="form-control" name="password" value="<?php echo $val->password;?>">
									</div>

							
								
								</div>

								<div class="form-actions">
									
									<button type="submit" class="btn btn-primary" name="update-profile">
										<i class="la la-check-square-o"></i> Save
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			
			<?php } ?>
		</div>

	</section>
	</div>


<!-- Active Orders -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


      <?php include("include/footer.php");?>
