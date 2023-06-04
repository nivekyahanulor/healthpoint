
<?php include("header.php");?>
<?php include("nav.php");?>
<?php include("controller/c_logs.php");?>


    <div id="content-wrapper" class="main d-flex flex-column">
	<br>
      <div id="content"> 
        <div class="container-fluid">
		

		   <div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
               <div class="row">
                    <div class="col-sm-8"><h5 class="mb-2 text-gray-800">USER LOGS RECORD </h5>  </div>
                  
                </div>
			</div>
			
            <div class="card-body">
			 
              <div class="table">
                 <table class="table table-bordered table-hover" id="patients">

                  <thead>
                    <tr>
                      <th class="text-center">No.</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Activity</th>
                      <th class="text-center">Log Date</th>
                  
                  </thead>
                  <tbody>
                 <?php 
				 $c = 1;
				 foreach($c_logs as $logs): ?>
                 <tr>
					<?php echo "<td class='text-center'>".$c++."</td>" ?>
					<?php echo "<td class='text-center'>". $logs['username'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $logs['actions'] ."</td>" ?>
					<?php echo "<td class='text-center'>". $logs['date_added'] ."</td>" ?>
				
                </tr>       
			
                 <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>

			
        </div>
       
       </div>
       </div>


<?php include("footer.php");?>
