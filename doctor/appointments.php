  <?php 
	  include("include/header.php");
	  include("controller/appointments.php");
  ?>
  <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

   <?php include("include/nav.php");?>


    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
		 <ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
			  <a class="nav-link <?php if($_GET['data'] == 'pending'){ echo 'active'; } ?>"  href="appointments?data=pending">Pending Appointments</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link  <?php if($_GET['data'] == 'approved'){ echo 'active'; } ?>"   href="appointments?data=approved">Approved Appointments</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link  <?php if($_GET['data'] == 'done'){ echo 'active'; } ?>"  href="appointments?data=done">Done Appointments</a>
			</li>
		  </ul>
			<div class="row">
				<div class="col-12">
					<div class="card">
					
						<div class="card-header">
						
							<h4 class="card-title"> Appointments Records </h4>
						
							<br>
						
						</div>
						
						<div class="card-content">
						
							<div class="table-responsive">
								<table class="table alt-pagination wallet-wrapper table-bordered table-striped">
									<thead>
										<tr>
											<th class="text-center">Doctors Name</th>
											<th class="text-center">Date</th>
											<th class="text-center">Time</th>
											<th class="text-center">Status</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
									<?php while($val = $is_appointments->fetch_object()){ ?>
										<tr>
											<td class="text-center"><?php echo $val->d_fname . ' '. $val->d_lname;?></td>
											<td class="text-center"><?php echo $val->appointment_date;?></td>
											<td class="text-center"><?php echo $val->appointment_time;?></td>
											<td class="text-center"><?php if( $val->status == 0) { echo "Pending";} else { echo '<i class="la la-check"></i> Approved';} ?></td>
											<td class="text-center">
											<?php  if($val->status == 0){?>
												<button class="btn btn-sm round btn-outline-info" data-toggle="modal" data-target="#approved<?php echo $val->appointment_id;?>"> Approve </button>
												<button class="btn btn-sm round btn-outline-warning" data-toggle="modal" data-target="#decline<?php echo $val->appointment_id;?>"> Decline </button>
											<?php }  else { echo '<a href="patient-profile?data='.$val->patient_id.'&appointment='.$val->appointment_id.'" class="btn round btn-outline-info btn-sm"> <i class="la la-check"></i> View Patient Record </a>';}?>
											</td>
										</tr>
										<div class="modal fade text-left" id="approved<?php echo $val->appointment_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" style="display: none;" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myModalLabel4">Appointment Request</h4>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close" fdprocessedid="oewei8">
														<span aria-hidden="true">×</span>
														</button>
													</div>
													<div class="modal-body">
														<form method="POST">
														<div class="form-group">
														
															<b>Are you sure to approved this appointment request ?</b>
													    	<input type="hidden" name="appointment_id" value="<?php echo $val->appointment_id;?>">
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal" fdprocessedid="pu6p1c">Close</button>
														<button type="submit" class="btn btn-outline-success" name="process-approval">Approved</button>
													</div>
													</form>
												</div>
											</div>
										</div>
										
										<div class="modal fade text-left" id="decline<?php echo $val->appointment_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" style="display: none;" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title" id="myModalLabel4">Appointment Request</h4>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close" fdprocessedid="oewei8">
														<span aria-hidden="true">×</span>
														</button>
													</div>
													<div class="modal-body">
														<form method="POST">
														<div class="form-group">
														
															<b>Are you sure to approved this appointment request ?</b>
													    	<input type="hidden" name="withdrawal_id" value="<?php echo $val->withdrawal_id;?>">
													    	<input type="hidden" name="user_id" value="<?php echo $val->customer_id;?>">
													    	<input type="hidden" name="amount" value="<?php echo $val->amount;?>">
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal" fdprocessedid="pu6p1c">Close</button>
														<button type="submit" class="btn btn-outline-success" name="process">Approved</button>
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
      </div>
    </div>
<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" style="display: none;" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel4">Appointments Details</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close" fdprocessedid="oewei8">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
			<form method="POST">
		
			<div class="form-group">
				<label for="companyName">Doctors Name: </label>
				<select  class="form-control" name="doctor_id" required>
					<option value=""> - Select Patient - </option>
						<?php
						$is_doctors = $mysqli->query("SELECT * from is_doctors");
						while($val = $is_doctors->fetch_object()){
					?>
						<option value="<?php echo $val->doctor_id;?>"> Dr. <?php echo $val->firstname . ' '.  $val->lastname;?> </option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="companyName">Date: </label>
				<input type="date" class="form-control"  name="a_date" required>
			</div>
			<div class="form-group">
				<label for="companyName">Time: </label>
				<input type="time" class="form-control"  name="a_time" required>
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
