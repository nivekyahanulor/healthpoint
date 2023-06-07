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
												
											<?php }  else { echo '<a href="patient-profile?data='.$val->patient_id.'&appointment='.$val->appointment_id.'" class="btn round btn-outline-info btn-sm"> <i class="la la-check"></i> View Patient Record </a>';}?>
											</td>
										</tr>
										
									
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

<?php include("include/footer.php");?>
