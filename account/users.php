
<?php include("header.php");?>
<?php include("nav.php");?>
<?php include("controller/c_users.php");?>


    <div id="content-wrapper" class="main d-flex flex-column">
	<br>
      <div id="content"> 
        <div class="container-fluid">
		

		   <div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">USERS <button type="button" class="btn btn-primary btn-sm"  style="float: right;"  data-toggle="modal" data-target="#exampleModal">+ ADD USERS</button></h5>  
            </div>
			
            <div class="card-body">
			  <?php if(isset($_GET['updated'])){?>
			  <br>
			     <div class="alert alert-info">
					<strong>Success:</strong> User Information Updated!
				</div>

			  <?php } if(isset($_GET['added'])){?>
			  <br>
			     <div class="alert alert-info">
					<strong>Success:</strong> User Information Added!
				</div>

			  <?php }if(isset($_GET['deleted'])){?>
			  <br>
			    <div class="alert alert-info">
					<strong>Success:</strong> User Information Deleted!
				</div>
			  <?php } ?>
              <div class="table">
                <table class="table table-bordered " id="users" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                      <th class="text-center">USER NAME</th>
                      <th class="text-center">FIRST NAME</th>
                      <th class="text-center">POSITION</th>
                      <th class="text-center">DATE ADDED</th>
                      <th class="text-center">ACTION</th>
                    </tr>
                  </thead>
                
                  <tbody>
              
                <?php foreach($c_standardusers as $user): 
					if($user['su_position'] == 'Doctor') { $field = $user['su_field']; }
				?>
                 <tr>
                   
					 <?php echo "<td class='text-center'>". $user['su_user'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['su_fname'].' '.$user['su_lname'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['su_position'] .' - '. $field ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['date_created'] ."</td>" ?>
					 <td class='text-center'>
						<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#update<?php echo $user['su_id'];?>"> <i class="fa  fa-edit"></i> </button>
						<button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#delete<?php echo $user['su_id'];?>"> <i class="fa  fa-trash"></i> </button>
					 </td>
					   
                 </tr>
				 		<div class="modal fade" id="delete<?php echo $user['su_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">DELETE USER</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">×</span>
								</button>
							  </div>
							  <div class="modal-body">
							  <form method="POST">
								<br>
								ARE YOU SURE TO DELETE THIS USER ?
								<input  type="hidden" name="id"value="<?php echo $user['su_id'];?>" >
								<br>
							  <div class="modal-footer">
								<button type="submit" class="btn btn-warning" name="delete-user">Delete</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </form>
						  </div>
						</div>
						</div>
						
						<div class="modal fade" id="update<?php echo $user['su_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UPDATE USER</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">×</span>
								</button>
							  </div>
							  <div class="modal-body">
							  <form method="POST">
							  <div class="row">
								<div class="col-sm-12">
								<div style="margin-bottom:17px;">
									<div class="row no-gutters">
										<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">First Name </div>   
									</div>
									<div class="h5 mb-1 font-weight-bold text-gray-800">
										<input class="form-control" type="text" name="firstname" placeholder="Enter Full Name" value="<?php echo $user['su_fname'];?>" required></div>
										<input  type="hidden" name="id"value="<?php echo $user['su_id'];?>" >
								</div>
								</div>
								<div class="col-sm-12">
								<div style="margin-bottom:17px;">
									<div class="row no-gutters">
										<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Last Name </div>   
									</div>
									<div class="h5 mb-1 font-weight-bold text-gray-800">
										<input class="form-control" type="text" name="lastname" placeholder="Enter Full Name" value="<?php echo $user['su_lname'];?>" required></div>
								</div>
								</div>
							
								<div class="col-sm-12">
								<div style="margin-bottom:17px;">
								<div class="row no-gutters">
								  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Position</div>      
								</div>
								<select name="position" class="form-control" id="trial_positions" required>
									<option value="">- Select Position -</option>
									<?php if( $user['su_position'] == 'Doctor'){?>
										<option value="Doctor" selected>Doctor</option>
										<option value="Nurse">Nurse</option>
									<?php } else { ?>
										<option value="Doctor" >Doctor</option>
										<option value="Nurse" selected>Nurse</option>
									<?php } ?>
								</select> 
								</div>
								</div>
								
								<div class="col-sm-12" id="" <?php if( $user['su_position'] == 'Doctor'){} else{ ?>style="display:none;" <?php } ?>>
								<div style="margin-bottom:17px;">
								<div class="row no-gutters">
								  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Field</div>      
								</div>
								<select name="field" class="form-control" id="" required>
									<option value="">- Select Field -</option>
									<?php $c_trial_fieldsphysician = $mysqli->query("SELECT * from fieldsphysician");
									foreach($c_trial_fieldsphysician as $valfp){
										if($user['su_field'] ==  $valfp['fp_name']){
									?>
										<option value="<?php echo $valfp['fp_name'];?>" selected><?php echo $valfp['fp_name'];?></option>
										<?php } else { ?>
										<option value="<?php echo $valfp['fp_name'];?>"><?php echo $valfp['fp_name'];?></option>
									<?php } } ?>
								</select> 
								</div>
								</div>
								<hr><hr>
								<div class="col-sm-12">
								<div style="margin-bottom:17px;">
									<div class="row no-gutters">
										<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> User Name </div>   
									</div>
									<div class="h5 mb-1 font-weight-bold text-gray-800">
										<input class="form-control" type="text" name="username" placeholder="Enter User Name" value="<?php echo $user['su_user'];?>" required></div>
								</div>
								</div>
								
								<div class="col-sm-12">
								<div style="margin-bottom:17px;">
									<div class="row no-gutters">
										<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Password </div>   
									</div>
									<div class="h5 mb-1 font-weight-bold text-gray-800">
										<input class="form-control" type="password" name="password" value="<?php echo $user['su_pass'];?>" placeholder="Enter Password" required></div>
								</div>
								</div>
								
								
							</div>
							  <div class="modal-footer">
								<button type="submit" class="btn btn-primary" name="update-user">Update</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </form>
						  </div>
						</div>
						</div>
	
                <?php endforeach; ?>
	
                </tbody>

                </table>
              </div>
            </div>

			
        </div>
       
       </div>
	   <!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ADD USER</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">×</span>
				</button>
			  </div>
			  <div class="modal-body">
			  <form method="POST">
			  <div class="row">
			    <div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">First Name </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="firstname" placeholder="Enter Full Name" required></div>
				</div>
				</div>
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Last Name </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="lastname" placeholder="Enter Full Name" required></div>
				</div>
				</div>
			
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
                <div class="row no-gutters">
                  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Position</div>      
                </div>
				<select name="position" class="form-control" id="trial_position" required>
					<option value="">- Select Position -</option>
					<option value="Doctor">Doctor</option>
					<option value="Nurse">Nurse</option>
                </select> 
				</div>
				</div>
				
				<div class="col-sm-12" id="fieldsphysician" style="display:none;">
				<div style="margin-bottom:17px;">
                <div class="row no-gutters">
                  <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> Field</div>      
                </div>
				<select name="field" class="form-control" id="" required>
					<option value="">- Select Field -</option>
					<?php $c_trial_fieldsphysician = $mysqli->query("SELECT * from fieldsphysician");
					foreach($c_trial_fieldsphysician as $valfp){
					?>
						<option value="<?php echo $valfp['fp_name'];?>"><?php echo $valfp['fp_name'];?></option>
					<?php } ?>
                </select> 
				</div>
				</div>
				<hr><hr>
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> User Name </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="username" placeholder="Enter User Name" required></div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Password </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="password" name="password" placeholder="Enter Password" required></div>
				</div>
				</div>
				
				
			</div>
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary" name="add-user">SAVE</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </form>
		  </div>
		</div>
	
	<script>
	 $('#trial_position').on('change', function() {
	 if(this.value == "Doctor"){
		$("#fieldsphysician").show();
	 } else {
		$("#fieldsphysician").hide();
	 }
	});
	</script>
<?php include("footer.php");?>
