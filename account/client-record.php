
<?php include("header.php");?>
<?php include("nav.php");?>
<?php include("controller/c_client-record.php");?>


    <div id="content-wrapper" class="main d-flex flex-column">
	<br>
      <div id="content"> 
        <div class="container-fluid">
		
		 <ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
			  <a class="nav-link active" data-toggle="tab" href="#home">Patient's Record</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-toggle="tab" href="#menu1">Clinic Users</a>
			</li>
		
		  </ul>
			
		<div class="tab-content">
			<div id="home" class=" tab-pane active"><br>
			<div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">PATIENTS RECORD</h5>  
            </div>
			
            <div class="card-body">
			 
              <div class="table">
                <table class="table table-bordered " id="patients" width="100%" cellspacing="0">
                
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
                    </tr>
                  </thead>
                  <tbody>
              
                  <?php foreach($c_patient_record as $patient): ?>
                 <tr>
					<?php echo "<td class='text-center'>P-0". $patient['pr_id'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_lname'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_fname'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_mname'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_gen'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_age'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['pr_number'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $patient['date_added'] ."</td>" ?>
					
                </tr>       
				 		

                <?php endforeach; ?>
	
                </tbody>

                </table>
              </div>
            </div>

			
        </div>
       
			</div>
			<div id="menu1" class=" tab-pane fade"><br>
			<div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">CLINIC USERS</h5>  
            </div>
			
            <div class="card-body">
			 
              <div class="table">
                <table class="table table-bordered " id="users" width="100%" cellspacing="0">
                
                   <thead>
                    <tr>
                      <th class="text-center">USER NAME</th>
                      <th class="text-center">FIRST NAME</th>
                      <th class="text-center">POSITION</th>
                      <th class="text-center">DATE ADDED</th>
                    </tr>
                  </thead>
                  <tbody>
              
                  <?php foreach($c_trial_standardusers as $user): 
					if($user['su_position'] == 'Doctor') { $field = $user['su_field']; }
				  ?>
				  
                  <tr>
                   
					 <?php echo "<td class='text-center'>". $user['su_user'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['su_fname'].' '.$user['su_lname'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['su_position'] .' - '. $field ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['date_created'] ."</td>" ?>
				
                 </tr>
				 		

                <?php endforeach; ?>
	
                </tbody>

                </table>
              </div>
            </div>

			
        </div>
			</div>
			
		  </div>

       </div>
	
<?php include("footer.php");?>
