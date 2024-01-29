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
					
						<div class="card-header">
						
							<h4 class="card-title">Doctors Data </h4>
							<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
							<div class="heading-elements">
								<button class="btn btn-sm round btn-info btn-glow" data-toggle="modal" data-backdrop="false" data-target="#backdrop"><i class="la la-plus font-medium-1"></i>
								Add Doctor Information </button>
							</div>
							<br>
							
						</div>
						
						<div class="card-content">
						
							<div class="table-responsive">
								<table class="table alt-pagination wallet-wrapper table-bordered table-striped">
									<thead>
										<tr>
											<th class="text-center">NAME </th>
											<th class="text-center">SPECIALITY</th>
											<th class="text-center">CONTACT</th>
											<th class="text-center">EMAIL ADDRESS</th>
											<th class="text-center">USER NAME</th>
											<th class="text-center">ACTION</th>
										</tr>
									</thead>
									<tbody>
									<?php while($val = $is_doctors->fetch_object()){ ?>
										<tr>
											<td class="text-center"><?php echo $val->firstname . ' '. $val->lastname;?></td>
											<td class="text-center"><?php echo $val->speciality;?></td>
											<td class="text-center"><?php echo $val->contact;?></td>
											<td class="text-center"><?php echo $val->email;?></td>
											<td class="text-center"><?php echo $val->username;?></td>
											<td class="text-center"><a href="doctor-records?data=<?php echo $val->doctor_id;?>" class="btn btn-sm round btn-outline-info"> View Records</a></td>
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
				<h4 class="modal-title" id="myModalLabel4">Member Details</h4>
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
				<label for="companyName">Speciality: </label>
				<select type="text" id="companyName" class="form-control" placeholder="Enter Speciality" name="speciality" required>
					<option value=""> - Select Speciality - </option>
					<?php $is_speciality = $mysqli->query("SELECT * from is_speciality"); 
						 while($val = $is_speciality->fetch_object()){ 
					?>
						<option value="<?php echo $val->speciality;?>"> <?php echo $val->speciality;?> </option>
					<?php } ?>
				</select>
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
			
			<div class="form-group">
						  <label for="inputName5" class="form-label">Time Start : </label>
						  <select type="time" class="form-control" name="times" required>
								<option value=""> - Select Time -</option>
								<option> 8:00 AM</option>
								<option> 9:00 AM</option>
								<option> 10:00 AM</option>
								<option> 11:00 AM</option> 
								<option> 1:00 PM</option>
								<option> 2:00 PM</option>
								<option> 3:00 PM</option>
								<option> 4:00 PM</option>
								<option> 5:00 PM</option>
								<option> 6:00 PM</option>
								<option> 7:00 PM</option>
						  </select>
						</div>
			<div class="form-group">
						  <label for="inputName5" class="form-label">Time End : </label>
						 <select type="time" class="form-control" name="timee" required>
								<option value=""> - Select Time -</option>
								<option> 8:00 AM</option>
								<option> 9:00 AM</option>
								<option> 10:00 AM</option>
								<option> 11:00 AM</option> 
								<option> 1:00 PM</option>
								<option> 2:00 PM</option>
								<option> 3:00 PM</option>
								<option> 4:00 PM</option>
								<option> 5:00 PM</option>
								<option> 6:00 PM</option>
								<option> 7:00 PM</option>
						  </select>
						</div>
			<div class="form-group">
							  <label for="inputName5" class="form-label">Schedule Day : </label><br>
							  <input type="checkbox" class="" name="monday" value="1"> Monday<br>
							  <input type="checkbox" class="" name="tuesday" value="1"> Tuesday<br>
							  <input type="checkbox" class="" name="wednesday" value="1"> Wednesday<br>
							  <input type="checkbox" class="" name="thursday" value="1"> Thursday<br>
							  <input type="checkbox" class="" name="friday" value="1"> Friday<br>
							  <input type="checkbox" class="" name="saturday" value="1"> Saturday<br>
							  <input type="checkbox" class="" name="sunday" value="1"> Sunday <br>
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
