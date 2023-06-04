
<?php include("header.php");?>
<?php include("nav.php");?>
<?php include("controller/c_subscrptions.php");?>


    <div id="content-wrapper" class="main d-flex flex-column">
	<br>
      <div id="content"> 
        <div class="container-fluid">
		

		   <div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">SUBSCRIPTION PLAN <button type="button" class="btn btn-primary btn-sm"  style="float: right;"  data-toggle="modal" data-target="#exampleModal">+ ADD PLAN</button></h5>  
            </div>
			
            <div class="card-body">
			  <?php if(isset($_GET['updated'])){?>
			  <br>
			     <div class="alert alert-info">
					<strong>SUCCESS:</strong> SUBSCRIPTION PLAN UPDATED!
				</div>
			  <?php } if(isset($_GET['added'])){?>
			  <br>
			     <div class="alert alert-info">
					<strong>SUCCESS:</strong> SUBSCRIPTION PLAN ADDED!
			  </div>
			  <?php }if(isset($_GET['deleted'])){?>
			  <br>
			     <div class="alert alert-warning">
					<strong>SUCCESS:</strong> SUBSCRIPTION PLAN ADDDELETEDED!
			  </div>
			  <?php } ?>
              <div class="table">
                <table class="table table-bordered " id="table_only" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                      <th class="text-center">TITLE</th>
                      <th class="text-center">DESCRIPTION</th>
                      <th class="text-center">PRICING</th>
                      <th class="text-center"> MONTH</th>
                      <th class="text-center">DATE ADDED</th>
                      <th class="text-center">ACTION</th>
                    </tr>
                  </thead>
                
                  <tbody>
              
                <?php foreach($c_subscrptions as $user): 
				?>
                 <tr>
                   
					 <?php echo "<td class='text-center'>". $user['title'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['description'] ."</td>" ?>
					 <?php echo "<td class='text-center'> ₱ ". number_format($user['pricing'],2) ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['month'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['date_added'] ."</td>" ?>
					 <td class='text-center'>
						<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#update<?php echo $user['subscription_id'];?>"> <i class="fa  fa-edit"></i> </button>
						<br><br>
						<button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#delete<?php echo $user['subscription_id'];?>"> <i class="fa  fa-trash"></i> </button>
					 </td>
					   
                 </tr>
				 		<div class="modal fade" id="delete<?php echo $user['subscription_id '];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
						
						<div class="modal fade" id="update<?php echo $user['subscription_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">UPDATE PLAN</h5>
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
										<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">TITLE </div>   
									</div>
									<div class="h5 mb-1 font-weight-bold text-gray-800">
										<input class="form-control" type="text" name="title" value="<?php echo $user['title'];?>" required>
										<input class="form-control" type="hidden" name="id" value="<?php echo $user['subscription_id'];?>" required>
										</div>
								</div>
								</div>
								
								<div class="col-sm-12">
								<div style="margin-bottom:17px;">
									<div class="row no-gutters">
										<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">DESCRIPTION</div>   
									</div>
									<div class="h5 mb-1 font-weight-bold text-gray-800">
										<textarea class="form-control" type="text" name="description" required rows="10"><?php echo $user['description'];?></textarea>
										</div>
								</div>
								</div>
								
								 <div class="col-sm-12">
								<div style="margin-bottom:17px;">
									<div class="row no-gutters">
										<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">SUBSCRIPTION MONTH </div>   
									</div>
									<div class="h5 mb-1 font-weight-bold text-gray-800">
										<input class="form-control" type="text" name="month" value="<?php echo $user['month'];?>"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required>
										</div>
								</div>
								</div>
								
							
								<div class="col-sm-12">
								<div style="margin-bottom:17px;">
									<div class="row no-gutters">
										<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">PRICING </div>   
									</div>
									<div class="h5 mb-1 font-weight-bold text-gray-800">
										<input class="form-control" type="text" name="pricing"  value="<?php echo $user['pricing'];?>"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required>
									</div>
								</div>
								</div>
							
							</div>
							  </div>
							  <div class="modal-footer">
								<button type="submit" class="btn btn-primary" name="update-subscription">SAVE</button>
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							  </div>
							</div>
						  </form>
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
				<h5 class="modal-title" id="exampleModalLabel">ADD SUBSCRIPTION</h5>
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
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">TITLE </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="title" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">DESCRIPTION</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<textarea class="form-control" type="text" name="description" rows="10" required></textarea>
						</div>
				</div>
				</div>
				
				 <div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">SUBSCRIPTION MONTH </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="month"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required>
						</div>
				</div>
				</div>
				
			
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">PRICING </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="pricing" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required>
					</div>
				</div>
				</div>
			
			
				
			</div>
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary" name="add-subscription">SAVE</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </form>
		  </div>
		</div>
	
	
<?php include("footer.php");?>
