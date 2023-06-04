
<?php include("header.php");?>
<?php include("nav.php");?>
<?php include("controller/c_users_admin.php");?>


    <div id="content-wrapper" class="main d-flex flex-column">
	<br>
      <div id="content"> 
        <div class="container-fluid">
		

		   <div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">ADMINISTRARTOR USERS <button type="button" class="btn btn-primary btn-sm"  style="float: right;"  data-toggle="modal" data-target="#exampleModal">+ ADD USERS</button></h5>  
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
                <table class="table table-bordered " id="table_only" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                      <th class="text-center">FULL NAME</th>
                      <th class="text-center">USER NAME</th>
                      <th class="text-center">DATE ADDED</th>
                      <th class="text-center">ACTION</th>
                    </tr>
                  </thead>
                
                  <tbody>
              
                <?php foreach($c_system_admin as $user): 
				?>
                 <tr>
                   
					 <?php echo "<td class='text-center'>". $user['sys_fname'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['sys_user'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['date_registered'] ."</td>" ?>
					 <td class='text-center'>
						<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#update<?php echo $user['sys_id'];?>"> <i class="fa  fa-edit"></i> </button>
						<button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#delete<?php echo $user['sys_id'];?>"> <i class="fa  fa-trash"></i> </button>
					 </td>
					   
                 </tr>
				 		<div class="modal fade" id="delete<?php echo $user['sys_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
								<input  type="hidden" name="id"value="<?php echo $user['sys_id'];?>" >
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
						
						<div class="modal fade" id="update<?php echo $user['sys_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Full Name </div>   
										</div>
										<div class="h5 mb-1 font-weight-bold text-gray-800">
											<input class="form-control" type="text" name="fullname" placeholder="Enter Full Name" value="<?php echo $user['sys_fname'];?>" required>
											<input class="form-control" type="hidden" name="sys_id" placeholder="Enter Full Name" value="<?php echo $user['sys_id'];?>" required></div>
									</div>
									</div>
								
								
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> User Name </div>   
										</div>
										<div class="h5 mb-1 font-weight-bold text-gray-800">
											<input class="form-control" type="text" name="username" placeholder="Enter User Name" value="<?php echo $user['sys_user'];?>" required></div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Password </div>   
										</div>
										<div class="h5 mb-1 font-weight-bold text-gray-800">
											<input class="form-control" type="password" name="password" placeholder="Enter Password" value="<?php echo $user['sys_pass'];?>" required></div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Secret Question </div>   
										</div>
										<div class="h5 mb-1 font-weight-bold text-gray-800">
											<select class="form-control  " name="secquestion">
												<option value="">Select Question</option>
												<option value="What was your childhood nickname?" <?php if( $user['sys_secretquestion'] == 'What was your childhood nickname?'){ echo "selected";} else {} ?> >What was your childhood nickname?</option>
												<option value="In what city or town was your first job?" <?php if( $user['sys_secretquestion'] == 'In what city or town was your first job?'){ echo "selected";} else {}  ?> >In what city or town was your first job? </option>
												 <option value="What was your dream job as a child? " <?php if( $user['sys_secretquestion'] == 'What was your What was your dream job as a child?'){ echo "selected";}  else {} ?>>What was your What was your dream job as a child? </option>
											  </select>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Secret Answer  </div>   
										</div>
										<div class="h5 mb-1 font-weight-bold text-gray-800">
											<input class="form-control" type="text" name="secanswer" placeholder="Enter Secret Answer" value="<?php echo $user['sys_secretanswer'];?>"  required></div>
									</div>
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
				<h5 class="modal-title" id="exampleModalLabel">ADD ADMIN</h5>
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
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Full Name </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="fullname" placeholder="Enter Full Name" required></div>
				</div>
				</div>
			
			
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
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Secret Question </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<select class="form-control  " name="secquestion">
							<option value="">Select Question</option>
							<option value="What was your childhood nickname?">What was your childhood nickname?</option>
							<option value="In what city or town was your first job?">In what city or town was your first job? </option>
							 <option value="What was your dream job as a child? ">What was your What was your dream job as a child? </option>
						  </select>
					</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Secret Answer  </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="secanswer" placeholder="Enter Secret Answer" required></div>
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
