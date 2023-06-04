
<?php include("header.php");?>
<?php include("nav.php");?>
<?php include("controller/c_trials.php");?>


    <div id="content-wrapper" class="main d-flex flex-column">
	<br>
      <div id="content"> 
        <div class="container-fluid">
		

		   <div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">TRIAL ACCOUNT</h5>  
            </div>
			
            <div class="card-body">
			
              <div class="table">
                <table class="table table-bordered " id="trials" width="100%" cellspacing="0">
                
                  <thead>
                    <tr>
                      <th class="text-center">CONTACT PERSON</th>
                      <th class="text-center">EMAIL</th>
                      <th class="text-center">TRIAL DATE</th>
                      <th class="text-center">TRIAL STATUS</th>
                      <th class="text-center">DATE ADDED</th>
                    </tr>
                  </thead>
                
                  <tbody>
              
                <?php foreach($c_trial_accounts as $user): 
				?>
                 <tr>
                   
					 <?php echo "<td class='text-center'>". $user['firstname'].' '. $user['lastname'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['email'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['trial_days'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['trial_status'] ."</td>" ?>
					 <?php echo "<td class='text-center'>". $user['date_added'] ."</td>" ?>
					
					   
                 </tr>
				 		
                <?php endforeach; ?>
	
                </tbody>

                </table>
              </div>
            </div>

			
        </div>
       
       </div>
	 
<?php include("footer.php");?>
