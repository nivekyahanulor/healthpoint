
<?php include("header.php");?>
<?php include("nav.php");?>
<?php include("controller/patients-record.php");?>

    <div id="content-wrapper" class="main d-flex flex-column">
	<br>
      <div id="content"> 
        <div class="container-fluid">
		
	  <div class="align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800 text-center">Patient Records</h1>
	  </div>
	 <?php foreach($c_trial_patient_record as $patient){ ?>
	    <div class="row"> <!-- Begin of Row -->
        <div class="col-xl-8 col-md-8 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
             <div class="text-xs font-weight-bold text-success text-uppercase mb-1">PATIENT NAME</div>
             </div>
                    <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        &nbsp&nbsp&nbsp&nbsp&nbsp
                        <?php echo $patient['pr_lname']; ?>&nbsp&nbsp
                        <?php echo $patient['pr_fname']; ?>&nbsp&nbsp
                        <?php echo $patient['pr_mname']; ?>
                     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>

              <div class="col-xl-4 col-md-6 mb-4 ml-auto">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col-auto">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Clinic Case No.</div>
             </div>
                       <div class="col mr-2">
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <?php echo "P-0".$patient['pr_id']; ?>
                        
                      </div>
                    </div>   
                  </div>
                </div>
              </div>
            </div>


   


 
	<!-- First Column -->
            <div class="col-lg-4">

              <!-- Details -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">Details 
                 </a> </h6>        
                </div>
               <div class="card-body"> <!--Card Body begin tag  -->

               
               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Address</div>   
                </div>
				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $patient['pr_addrs'];; ?></div>
               </div>

               <div style="margin-bottom:17px;">
                <div class="row no-gutters">
                 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Age</div>   
                </div>
				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $patient['pr_age'];; ?></div>
			  </div>
    
              <div style="margin-bottom:17px;">
				<div class="row no-gutters">
						 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Birthday</div> 
						</div>
				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $patient['pr_bdate'];; ?></div>
				</div>
               
               <div style="margin-bottom:17px;">
				<div class="row no-gutters">
						 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">BirthPlace</div>
						</div>
				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $patient['pr_bplace'];; ?></div>
				 </div>

				 <div style="margin-bottom:17px;">
				<div class="row no-gutters">
						 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Civil Status</div>
						</div>
				<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $patient['pr_civilstat'];; ?></div>
				 </div>

			 <div style="margin-bottom:17px;">
			<div class="row no-gutters">
					 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Gender</div>
					</div>
			<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $patient['pr_gen'];; ?></div>
			 </div>

			 <div style="margin-bottom:18px;">
			<div class="row no-gutters">
					 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Tel/Mobile No.</div>
					</div>
			<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $patient['pr_number'];; ?></div>
			 </div>

			  <div style="margin-bottom:18px;">
			<div class="row no-gutters">
					 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Religion</div>
					</div>
			<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $patient['pr_religion'];; ?></div>
			 </div>

			 <div style="margin-bottom:18px;">
			<div class="row no-gutters">
					 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Occupation</div>
					</div>
			<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $patient['pr_occup'];; ?></div>
			 </div>

			 <div style="margin-bottom:18px;">
			<div class="row no-gutters">
					 <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Date Added</div>
					</div>
			<div class="h5 mb-1 font-weight-bold text-gray-800"><?php echo $patient['date_added'];; ?></div>
			 </div>

					</div><!--Card body end tag -->
				  </div>
		  
		   </div>
		   
	   <?php } ?>

       <!-- Findings Box -->
            <div  id="findings" class="col-xl-8 col-lg-4">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-success">Patient Data Findings  
					<button class="btn btn-info btn-sm" data-toggle="modal"  style="float: right;" data-target="#exampleModal"> <i class="fa  fa-plus"></i> ADD RECORD </button>
				   </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <div class="table">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">History of Present Illness</th>
                      <th class="text-center">Date Concluded</th>
                    </tr>
                  </thead>
                  <tbody>
					 <?php foreach($c_trial_findings as $findings): ?>
						<tr>
							<td class='text-center'><a href="#" data-toggle="modal" data-target="#details<?php echo $findings['f_id'];?>"><?php echo $findings['f_historypresentillness'];?></a></td> 
							<?php echo "<td class='text-center'>". $findings['date_added'] ."</td>" ?>     
						</tr>      
						
							<div class="modal fade" id="details<?php echo $findings['f_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg" role="document">
								<div class="modal-content ">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">PATIENT DATA FINDINGS </h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">×</span>
									</button>
								  </div>
								  <div class="modal-body">
								   
								  <div id="myDiv">
								  <div class="row">
								
									<div class="col-6">
									 <?php echo $patient['pr_lname']; ?> ,<?php echo $patient['pr_fname']; ?> <?php echo $patient['pr_mname']; ?>
									 <hr>
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">HISTORY OF PRESENT ILLNESS </div>   
										</div>
										<div class="h6">
											<?php echo $findings['f_historypresentillness'];?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">ATTENDING PHYSICIAN </div>   
										</div>
										<div class="h6">
										<?php 
										$su_position = $mysqli->query("SELECT * from c_trial_standardusers where su_position='Doctor' ");
										 foreach($su_position as $doctor){
											if($findings['f_nameofphysician'] ==  $doctor['su_id']){
										?>
											<?php echo $doctor['su_fname'] . ' '. $doctor['su_lname'] .' / '.  $doctor['su_field'];?>
										 <?php } }?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">COMPLAINT</div>   
										</div>
										<div class="h6">
											<?php echo $findings['f_chiefcomplaint'];?>
										</div>
									</div>
									</div>
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">DIAGNOSIS </div>   
										</div>
											<div class="h6">
											<?php echo $findings['f_diagnosis'];?>
										</div>
									</div>
									</div>
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">MEDICATION / TREATMENT </div>   
										</div>
										<div class="h6">
											<?php echo $findings['f_medication'];?>
										</div>
									</div>
									</div>
									
									</div>
									<div class="col-6">
									
									<div class="col-sm-12">
									 VITAL SIGNS 
									 <hr>
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Blood Pressure </div>   
										</div>
										<div class="h6">
											<?php echo $findings['f_bp'];?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Respiratory Rate</div>   
										</div>
										<div class="h6">
											<?php echo $findings['f_rr'];?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Capillary Refill</div>   
										</div>
										<div class="h6">
											<?php echo $findings['f_cr'];?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Temperature</div>   
										</div>
										<div class="h6">
											<?php echo $findings['f_temp'];?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Weight</div>   
										</div>
										<div class="h6">
											<?php echo $findings['f_wt'];?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Pulse Rate</div>   
										</div>
										<div class="h6">
											<?php echo $findings['f_pr'];?>
										</div>
									</div>
									</div>
									
								  </div>
								  </div>
								  </div>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-primary btn-sm"  onclick="PrintDiv('myDiv')"><i class="fa fa-print"></i> PRINT</button>
									<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close">Close</button>
								  </div>
								</div>
							  </div>
							</div>
		
					 <?php endforeach; ?>
                  </tbody>
                </table>
                </div>
                </div>
				</div>
				
				
                <div id="admission" class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">Admission
					<button class="btn btn-info btn-sm" data-toggle="modal"  style="float: right;" data-target="#exampleModal1"> <i class="fa  fa-plus"></i> ADD RECORD </button>
				  </h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
			 <div class="table">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">Ward Admittted</th>
                      <th class="text-center">Date Admission</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
					 <?php foreach($c_trial_admission_record as $ads): ?>
						<tr>
							<td class='text-center'><a href="#" data-toggle="modal" data-target="#details1<?php echo $ads['ad_id'];?>"><?php echo $ads['ad_wardname'];?></a></td> 
							<?php echo "<td class='text-center'>". $ads['date_added'] ."</td>" ?>     
							<td class="text-center">
								<button class="btn btn-sm btn-info" data-toggle="modal" data-target="#update<?php echo $ads['ad_id'];?>"><i class="fa fa-edit"></i> </button>
							</td>
						</tr>      
								<div class="modal fade" id="update<?php echo $ads['ad_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
									<div class="modal-content ">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">UPDATE ADMISSION DETAILS </h5>
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
												<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">CHIEF COMPLAINT</div>   
											</div>
											<div class="h5 mb-1 font-weight-bold text-gray-800">
												<textarea class="form-control" type="text" name="ad_complaint" required><?php echo $ads['ad_complaint'];?></textarea>
												</div>
										</div>
										</div>
										
										<div class="col-sm-12">
										<div style="margin-bottom:17px;">
											<div class="row no-gutters">
												<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">COMPLETE DIAGNOSIS</div>   
											</div>
											<div class="h5 mb-1 font-weight-bold text-gray-800">
												<textarea class="form-control" type="text" name="ad_completediagnosis" required><?php echo $ads['ad_completediagnosis'];?></textarea>
												</div>
										</div>
										</div>
										
										<div class="col-sm-12">
										<div style="margin-bottom:17px;">
											<div class="row no-gutters">
												<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">MEDICATION/TREATMENT</div>   
											</div>
											<div class="h5 mb-1 font-weight-bold text-gray-800">
												<textarea class="form-control" type="text" name="ad_medication" required><?php echo $ads['ad_medication'];?></textarea>
												</div>
										</div>
										</div>
										
										<div class="col-sm-12">
										<div style="margin-bottom:17px;">
											<div class="row no-gutters">
												<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">CONDITION ON DISCHARGE</div>   
											</div>
											<div class="h5 mb-1 font-weight-bold text-gray-800">
												<textarea class="form-control" type="text" name="ad_conditiontodischarge" required><?php echo $ads['ad_conditiontodischarge'];?></textarea>
												</div>
										</div>
										</div>
										
										<div class="col-sm-12">
										<div style="margin-bottom:17px;">
											<div class="row no-gutters">
												<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">REMARKS</div>   
											</div>
											<div class="h5 mb-1 font-weight-bold text-gray-800">
												<textarea class="form-control" type="text" name="ad_remarks" required><?php echo $ads['ad_remarks'];?></textarea>
												</div>
										</div>
										</div>
										
										<div class="col-sm-12">
										<div style="margin-bottom:17px;">
											<div class="row no-gutters">
												<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">DISCHARGE DATE</div>   
											</div>
											<div class="h5 mb-1 font-weight-bold text-gray-800">
												<input class="form-control" type="date" name="ad_dischargedate" value="<?php echo $ads['ad_dischargedate'];?>"  required>
												<input class="form-control" type="hidden" name="ad_id" value="<?php echo $ads['ad_id'];?>"  required>
												</div>
										</div>
										</div>
										<div class="col-sm-12">
										<div style="margin-bottom:17px;">
											<div class="row no-gutters">
												<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">TOTAL PAYMENT FOR ADMISSION</div>   
											</div>
											<div class="h5 mb-1 font-weight-bold text-gray-800">
												<input class="form-control" type="text" name="ad_totalpayment" value="<?php echo $ads['ad_totalpayment'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
												</div>
										</div>
										</div>
									
									  </div>
									  </div>
									  <div class="modal-footer">
										<button type="submit" class="btn btn-primary" name="update-admission">Update</button>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									  </div>
									</div>
								  </form>
								  </div>
								</div>
							<div class="modal fade" id="details1<?php echo $ads['ad_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-lg" role="document">
								<div class="modal-content ">
								  <div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">ADMISISON DATA INFORMATION </h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									  <span aria-hidden="true">×</span>
									</button>
								  </div>
								  <div class="modal-body">
								   
								  <div id="myDiv1">
								  <div class="row">
									<div class="col-6">
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">ADMITTED BY </div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_admittedby'];?>
										</div>
									</div>
									</div>
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">FATHER'S NAME</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_father'];?>
										</div>
									</div>
									</div>
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">MOTHERS'S NAME</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_mother'];?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">ATTENDING PHYSICIAN </div>   
										</div>
										<div class="h6">
										<?php 
										$su_position = $mysqli->query("SELECT * from c_trial_standardusers where su_position='Doctor' ");
										 foreach($su_position as $doctor){
											if($ads['ad_physician'] ==  $doctor['su_id']){
										?>
											<?php echo $doctor['su_fname'] . ' '. $doctor['su_lname'] .' / '.  $doctor['su_field'];?>
										 <?php } }?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">WARD</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_wardname'];?>
										</div>
									</div>
									</div>
									
									
									</div>
									<div class="col-6">
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">CHARGE ACCOUNT TO </div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_chargetoaccount'];?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">RELATION TO PATIENT</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_relationtopatient'];?>
										</div>
									</div>
									</div>
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">MOBILE / TEL. NUMBER</div>   
										</div>
											<div class="h6">
											<?php echo $ads['ad_number'];?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">ADDRESS</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_address'];?>
										</div>
									</div>
									</div>
									
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">TOTAL PAYMENT FOR ADMISSION</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_totalpayment'];?>
										</div>
									</div>
									</div>
								
								  </div>
								  <div class="row justify-content-center">
								  <div class="col-10 ">
								    <div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">CHIEF COMPLAINT</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_complaint'];?>
										</div>
									</div>
									</div>
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">COMPLETE DIAGNOSIS</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_completediagnosis'];?>
										</div>
									</div>
									</div>
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">MEDICATION/TREATMENT</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_medication'];?>
										</div>
									</div>
									</div>
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">CONDITION ON DISCHARGE</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_conditiontodischarge'];?>
										</div>
									</div>
									</div>
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">REMARKS</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_remarks'];?>
										</div>
									</div>
									</div>
									<div class="col-sm-12">
									<div style="margin-bottom:17px;">
										<div class="row no-gutters">
											<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">DISCHARGE DATE</div>   
										</div>
										<div class="h6">
											<?php echo $ads['ad_dischargedate'];?>
										</div>
									</div>
									</div>
								  </div>
								  </div>
								  </div>
								  </div>
								  </div>
								  <div class="modal-footer">
									<button type="button" class="btn btn-primary btn-sm"  onclick="PrintDiv('myDiv1')"><i class="fa fa-print"></i> PRINT</button>
									<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" aria-label="Close">Close</button>
								  </div>
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
     
            </div>

	  </div><!-- End of Row -->


		<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content ">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">ADMISSION DETAILS </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">×</span>
				</button>
			  </div>
			  <div class="modal-body">
			  <form method="POST">
			  <div class="row">
			  
 			    <div class="col-6">

			    <div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">ADMITTED BY </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="admittedby" required>
						<input class="form-control" type="hidden" name="pr_id" value="<?php echo $_GET['data'];?>" required>
						</div>
				</div>
				</div>
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">FATHER'S NAME</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="father" required>
						</div>
				</div>
				</div>
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">MOTHERS'S NAME</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="mother" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">ATTENDING PHYSICIAN </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
					<select name="physician" class="form-control" required>
					<option value=""> - Select Physician - </option>
					<?php 
					$su_position = $mysqli->query("SELECT * from c_trial_standardusers where su_position='Doctor' ");
					 foreach($su_position as $doctor){
					?>
						<option value=" <?php echo $doctor['su_id'];?>"> <?php echo $doctor['su_fname'] . ' '. $doctor['su_lname'] .' / '.  $doctor['su_field'];?> </option>
					<?php } ?>
					</select>
					</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">WARD</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<select name="ward" class="form-control" required>
							<option value=""> - Select Ward - </option>
							<option value="Male Ward "> Male Ward </option>
							<option value="Female Ward"> Female Ward </option>
						</select>
					</div>
				</div>
				</div>
				
				
				</div>
				<div class="col-6">
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">CHARGE ACCOUNT TO </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="chargeto"  required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">RELATION TO PATIENT</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="relation" required>
						</div>
				</div>
				</div>
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">MOBILE / TEL. NUMBER</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="mobile" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">ADDRESS</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<textarea class="form-control" type="text" name="address" required></textarea>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">TOTAL PAYMENT FOR ADMISSIION</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="totalpay" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
						</div>
				</div>
				</div>
			
			  </div>
			  </div>
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary" name="add-admission">SAVE</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </form>
		  </div>
		</div>
		
		
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content ">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">PATIENT DATA FINDINGS </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">×</span>
				</button>
			  </div>
			  <div class="modal-body">
			  <form method="POST">
			  <div class="row">
			  
 			    <div class="col-6">

			    <div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">HISTORY OF PRESENT ILLNESS </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="illness" required>
						<input class="form-control" type="hidden" name="pr_id" value="<?php echo $_GET['data'];?>" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">ATTENDING PHYSICIAN </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
					<select name="physician" class="form-control" required>
					<option value=""> - Select Physician - </option>
					<?php 
					$su_position = $mysqli->query("SELECT * from c_trial_standardusers where su_position='Doctor' ");
					 foreach($su_position as $doctor){
					?>
						<option value=" <?php echo $doctor['su_id'];?>"> <?php echo $doctor['su_fname'] . ' '. $doctor['su_lname'] .' / '.  $doctor['su_field'];?> </option>
					<?php } ?>
					</select>
					</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">COMPLAINT</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<textarea class="form-control" type="text" name="complaint" required></textarea>
					</div>
				</div>
				</div>
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">DIAGNOSIS </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<textarea class="form-control" type="text" name="diganosis" required></textarea>
					</div>
				</div>
				</div>
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">MEDICATION / TREATMENT </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<textarea class="form-control" type="text" name="medication" required></textarea>
					</div>
				</div>
				</div>
				
				</div>
				<div class="col-6">
				
				<div class="col-sm-12">
				 VITAL SIGNS 
				 <hr>
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Blood Pressure </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="bp"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Respiratory Rate</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="rr" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Capillary Refill</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="cr" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Temperature</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="temp" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Weight</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="weight" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required>
						</div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Pulse Rate</div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="pulse" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"  required>
						</div>
				</div>
				</div>
				
			  </div>
			  </div>
			  </div>
			  <div class="modal-footer">
				<button type="submit" class="btn btn-primary" name="add-record">SAVE</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </form>
		  </div>
		</div>
		
	 <script type="text/javascript">
      function PrintDiv(divName) {
		 var printContents = document.getElementById(divName).innerHTML;
		 var originalContents = document.body.innerHTML;

		 document.body.innerHTML = printContents;

		 window.print();

		 document.body.innerHTML = originalContents;
	}
    </script>
<?php include("footer.php");?>
