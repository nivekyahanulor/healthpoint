  <?php 
	  include("include/header.php");
	  include("controller/patients.php");
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
						
							<h4 class="card-title">Patients Data </h4>
							<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
							<div class="heading-elements">
								<button class="btn btn-sm round btn-info btn-glow" data-toggle="modal" data-backdrop="false" data-target="#backdrop"><i class="la la-plus font-medium-1"></i>
								Add Patients Information </button>
							</div>
							<br>
							
						</div>
						
						<div class="card-content">
						
							<div class="table-responsive">
								<table class="table alt-pagination wallet-wrapper table-bordered table-striped">
									<thead>
										<tr>
											<th class="text-center">Name </th>
											<th class="text-center">Contact</th>
											<th class="text-center">Email Address</th>
											<th class="text-center">User Name</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
									<?php while($val = $is_patients->fetch_object()){ ?>
										<tr>
											<td class="text-center"><?php echo $val->firstname . ' '. $val->lastname;?></td>
											<td class="text-center"><?php echo $val->contact;?></td>
											<td class="text-center"><?php echo $val->email;?></td>
											<td class="text-center"><?php echo $val->username;?></td>
											<td class="text-center"><a href="patient-profile?data=<?php echo $val->patient_id;?>" class="btn btn-sm round btn-outline-info"> View Records</a></td>
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
	
<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel4">Patients Details</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" fdprocessedid="oewei8">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
			<form method="POST">
				<div class="form-group">
					<label for="companyName">First Name : </label>
					<input type="text" id="companyName" class="form-control" placeholder="Enter First Name" name="firstname" required>
				</div>
				<div class="form-group">
					<label for="companyName">Last Name : </label>
					<input type="text" id="companyName" class="form-control" placeholder="Enter Last Name" name="lastname" required>
				</div>
				<div class="form-group">
					<label for="companyName">Email Address: </label>
					<input type="text" id="companyName" class="form-control" placeholder="Enter Email Address" name="email" required>
				</div>
			
				<div class="form-group">
					<label for="companyName">Mobile Number: </label>
					<input type="text" id="companyName" class="form-control" placeholder="Enter Mobile Number" name="mobile" required>
				</div>
				<div class="form-group">
					<label for="companyName">User Name: </label>
					<input type="text" id="companyName" class="form-control" placeholder="Enter User Name" name="username" required>
				</div>
				<div class="form-group">
					<label for="companyName">Password: </label>
					<input type="password" id="companyName" class="form-control" placeholder="Enter Password" name="password" required>
				</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal" >Close</button>
					<button type="submit" class="btn btn-outline-primary" name="process">Process</button>
				</div>
			</form>
		</div>
	</div>
</div>


      <?php include("include/footer.php");?>
