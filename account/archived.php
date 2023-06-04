
<?php include("header.php");?>
<?php include("nav.php");?>
<?php include("controller/c_patients.php");?>


    <div id="content-wrapper" class="main d-flex flex-column">
	<br>
      <div id="content"> 
        <div class="container-fluid">
		

		   <div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
               <div class="row">
                    <div class="col-sm-8"><h5 class="mb-2 text-gray-800">PATIENTS RECORD </h5>  </div>
					 <?php if($_SESSION['role'] == "Standard User"){} else{ ?>
                    <div class="col-sm-4">
                       <button type="button" class="btn btn-primary btn-sm"  style="float: right;" data-toggle="modal" data-target="#exampleModal">+ ADD PATIENTS</button>
                    </div>
					 <?php } ?>
                </div>
			</div>
			
            <div class="card-body">
			  <?php if(isset($_GET['updated'])){?>
			  <br>
			     <div class="alert alert-info">
					<strong>Success:</strong> Patients Information Updated!
				</div>

			  <?php } if(isset($_GET['added'])){?>
			  <br>
			     <div class="alert alert-info">
					<strong>Success:</strong> Patients Information Added!
				</div>

			  <?php }if(isset($_GET['deleted'])){?>
			  <br>
			    <div class="alert alert-info">
					<strong>Success:</strong> Patients Information Deleted!
				</div>
			  <?php } ?>
              <div class="table">
			   <?php if($_SESSION['role'] == "Standard User"){ ?>
                 <table class="table table-bordered table-hover" id="table_only">
			   <?php } else { ?>
                 <table class="table table-bordered table-hover" id="patients">
			   <?php } ?>
                  <thead>
                    <tr>
                      <th class="text-center">Case No.</th>
                      <th class="text-center">Last Name</th>
                      <th class="text-center">First Name</th>
                      <th class="text-center">Middle Name</th>
                      <th class="text-center">Gender</th>
                      <th class="text-center">Age</th>
                      <th class="text-center">Contact No.</th>
                      <th class="text-center">Date Added</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php foreach($c_patient_record_archived as $patient): ?>
                 <tr>
					<?php echo "<td class='text-center'>P-0". $patient['pr_id'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_lname'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_fname'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_mname'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_gen'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_age'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_number'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['date_added'] ."</td>" ?>
					<td>
					 <?php if($_SESSION['role'] == "Standard User"){} else { ?>
						<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#update<?php echo $patient['pr_id'];?>">    <i class="fa fa-edit"></i> </button>
					 <?php } ?>
						<a href="patient-record.php?data=<?php echo $patient['pr_id'];?>" class="btn btn-sm btn-primary"> RECORDS </a>
					</td>
                </tr>       
				<div class="modal fade" id="archive<?php echo $patient['pr_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
						<div class="modal-content ">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">ARCHIVE PATIENT INFORMATION</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">×</span>
							</button>
						  </div>
						  <div class="modal-body">
						  <form method="POST">
								ARE YOU SURE TO ACHIVE THIS DATA ?
								<input type="hidden" name="pr_id" value="<?php echo $patient['pr_id'];?>" required>
						  </div>
						  <div class="modal-footer">
							<button type="submit" class="btn btn-primary" name="archived-patient">YES</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						  </div>
						</div>
					  </form>
					  </div>
					</div>	
					<div class="modal fade" id="update<?php echo $patient['pr_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog modal-lg" role="document">
						<div class="modal-content ">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">UPDATE PATIENT INFORMATION</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">×</span>
							</button>
						  </div>
						  <div class="modal-body">
						  <form method="POST">
						  <div class="row">
						   <div class="col-sm-6">
			 
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">First Name </div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<input class="form-control" type="text" name="firstname" placeholder="Enter First Name" value="<?php echo $patient['pr_fname'];?>" required>
									<input type="hidden" name="pr_id" value="<?php echo $patient['pr_id'];?>" required>
									</div>
							</div>
							</div>
							
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Last Name </div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<input class="form-control" type="text" name="lastname" placeholder="Enter Last Name" value="<?php echo $patient['pr_lname'];?>" required>
									</div>
							</div>
							</div>
							
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Middle Name </div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<input class="form-control" type="text" name="middlename" placeholder="Enter Middle Name" value="<?php echo $patient['pr_mname'];?>" required>
									</div>
							</div>
							</div>
							
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address </div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<textarea class="form-control" type="text" name="address" placeholder="Enter Current Address" required><?php echo $patient['pr_addrs'];?></textarea>
									</div>
							</div>
							</div>
							
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birthday</div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<input class="form-control" type="date" name="birthday"  value="<?php echo $patient['pr_bdate'];?>" required>
									</div>
							</div>
							</div>
							
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Age</div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<input class="form-control" type="text" name="age" placeholder="Enter Age"  value="<?php echo $patient['pr_age'];?>"  required>
									</div>
							</div>
							</div>
							
							</div>
							<div class="col-6">
							
							
							
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birth Place</div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<input class="form-control" type="text" name="birthplace" placeholder="Enter Birth Place"  value="<?php echo $patient['pr_bplace'];?>" required>
									</div>
							</div>
							</div>
							
							
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Civil Status</div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<select class="form-control" name="civil" required>
										<option value=""> - Select Status - </option>
										<option value="Single" <?php if($patient['pr_civilstat'] == 'Single') { echo "selected"; } else {}?>> Single </option>
										<option value="Married" <?php if($patient['pr_civilstat'] == 'Married') { echo "selected"; } else {} ?>> Married </option>
										<option value="Seperated" <?php if($patient['pr_civilstat'] == 'Seperated') { echo "selected"; } else {} ?>> Seperated </option>
									</select>
								</div>
							</div>
							</div>
							
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Sex</div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<select class="form-control"  name="sex" required>
										<option value=""> - Select Sex - </option>
										<option value="Male"  <?php if($patient['pr_gen'] == 'Male') { echo "selected"; } else {}?>> Male </option>
										<option value="Female"  <?php if($patient['pr_gen'] == 'Female') { echo "selected"; } else {}?>> Female </option>
									</select>
								</div>
							</div>
							</div>
							
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Mobile / Tel. Number</div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<input class="form-control" type="text" name="mobile" placeholder="Enter Mobile / Tel. Number"  value="<?php echo $patient['pr_number'];?>" required>
									</div>
							</div>
							</div>
							
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Religion</div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<input class="form-control" type="text" name="religion" placeholder="Enter Religion" value="<?php echo $patient['pr_religion'];?>" required>
									</div>
							</div>
							</div>
							
							<div class="col-sm-12">
							<div style="margin-bottom:17px;">
								<div class="row no-gutters">
									<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Occupation</div>   
								</div>
								<div class="h5 mb-1 font-weight-bold text-gray-800">
									<input class="form-control" type="text" name="occupation" placeholder="Enter Occupation" value="<?php echo $patient['pr_occup'];?>" required>
									</div>
							</div>
							</div>
							
							</div>
							
							
						</div>
						  </div>
						  <div class="modal-footer">
							<button type="submit" class="btn btn-primary" name="update-patient">SAVE</button>
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
       </div>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content ">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ADD PATIENT INFORMATION</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">×</span>
				</button>
			  </div>
			  <div class="modal-body">
			  <form method="POST">
			  <div class="row">
			   <div class="col-sm-6">
 
			    <div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">First Name </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="firstname" placeholder="Enter First Name" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Last Name </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="lastname" placeholder="Enter Last Name" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Middle Name </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="middlename" placeholder="Enter Middle Name" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<textarea class="form-control" type="text" name="address" placeholder="Enter Current Address" required></textarea>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birthday</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="date" name="birthday" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Age</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="age" placeholder="Enter Age" required>
						</div>
				</div>
				</div>
				
				</div>
				<div class="col-6">
				
				
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birth Place</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="birthplace" placeholder="Enter Birth Place" required>
						</div>
				</div>
				</div>
				
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Civil Status</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<select class="form-control" name="civil" required>
							<option value=""> - Select Status - </option>
							<option value="Single"> Single </option>
							<option value="Married"> Married </option>
							<option value="Seperated"> Seperated </option>
						</select>
					</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Sex</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<select class="form-control"  name="sex" required>
							<option value=""> - Select Sex - </option>
							<option value="Male"> Male </option>
							<option value="Female"> Female </option>
						</select>
					</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Mobile / Tel. Number</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="mobile" placeholder="Enter Mobile / Tel. Number" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Religion</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="religion" placeholder="Enter Religion" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Occupation</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="occupation" placeholder="Enter Occupation" required>
						</div>
				</div>
				</div>
				
				</div>
				
				
			</div>
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary" name="add-patient">SAVE</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </form>
		  </div>
		</div>
		

<?php include("footer.php");?>
