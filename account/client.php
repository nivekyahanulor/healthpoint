
<?php include("header.php");?>
<?php include("nav.php");?>
<?php include("controller/c_client.php");?>


    <div id="content-wrapper" class="main d-flex flex-column">
	<br>
      <div id="content"> 
        <div class="container-fluid">
		

		   <div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">CLIENT PLAN</h5>  
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
                <table class="table table-bordered " id="patients" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                      <th class="text-center">CLINIC NAME</th>
                      <th class="text-center">CONTACT PERSON</th>
                      <th class="text-center">EMAIL</th>
                      <th class="text-center">CONTACT #</th>
                      <th class="text-center">PLAN</th>
                      <th class="text-center">SUBSCRIPTION END</th>
                      <th class="text-center">DATE ADDED</th>
                      <th class="text-center">ACTION</th>
                    </tr>
                  </thead>
                
                  <tbody>
              
                <?php foreach($c_accounts as $user): 
				?>
                 <tr>
                   
					 <?php echo "<td class='text-center'>". $user['clinic_name'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['firstname'].' '. $user['lastname'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['email'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['contact'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['title'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['subscriptions'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['date_added'] ."</td>" ?>
					 <td class='text-center'>
					 <?php if($user['s_status']!=1){?>
						<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#approval<?php echo $user['account_id'];?>"> <i class="fa  fa-check-circle"></i> </button>
					 <?php } else { ?>
						<a href="client-record.php?id=<?php echo $user['account_id'];?>" class="btn btn-sm btn-info"> RECORDS </a>
					 <?php } ?>
					 </td>
					   
                 </tr>
				 		<div class="modal fade" id="approval<?php echo $user['account_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">APPROVE <?php echo $user['clinic_name'];?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">×</span>
								</button>
							  </div>
							  <div class="modal-body">
							  <form method="POST">
								ARE YOU SURE TO APPROVE THIS SUBSCRIPTION ?
								<input  type="hidden" name="id" value="<?php echo $user['account_id'];?>" >
								<input  type="hidden" name="email" value="<?php echo $user['email'];?>" >
								<input  type="hidden" name="month" value="<?php echo $user['month'];?>" >
								<input  type="hidden" name="clinic_name" value="<?php echo $user['clinic_name'];?>" >
								<br>
								<br>
							  <div class="modal-footer">
								<button type="submit" class="btn btn-info" name="approved-user">Approve</button>
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
