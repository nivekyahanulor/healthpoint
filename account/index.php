
<?php include("header.php");?>
<?php include("nav.php");?>
<?php include("controller/c_dashboard.php");?>



    <div id="content-wrapper" class="main d-flex flex-column">

      <div id="content"> 
        <div class="container-fluid">
				   
			<div class="card-group">
			<?php if($_SESSION['role'] == "System Administrator"){ ?>
			<div class="card" style="width: 10rem;">
			  <img src="../assets/accounts/img/p1.gif">
			  <div class="card-body text-dark">
			  <center>
				<h4 class="card-title"> CLIENT RECORDS </h4>
				<h5>TOTAL RECORD : <?php echo $total_admins ?></h5>
			   </center>
			  </div>
			</div>
			<div class="card" style="width: 10rem;">
			  <img src="../assets/accounts/img/p3.gif">
			  <div class="card-body text-dark">
			   <center>
				<h4 class="card-title">ADMINISTRATORS</h4>
				<h5>&nbsp;</h5>
				<h5>&nbsp;</h5>
				<a href="admin.php" class ="btn btn-primary" style="width:100%">
				<i class="fa fa-arrow-right"></i>
					<span>ADD NEW RECORD</span></a>
			   </center>
			  </div>
			</div>
			<div class="card" style="width: 10rem;">
			  <img src="../assets/accounts/img/p2.gif">
			  <div class="card-body text-dark">
			   <center>
				<h4 class="card-title">TRIAL ACCOUNTS RECORD</h4>
				<h5>&nbsp;</h5>
				<h5>&nbsp;</h5>
				<a href="trials.php" class ="btn btn-primary" style="width:100%">
				<i class="fa fa-arrow-right"></i>
					<span>VIEW</span></a>
			   </center>
			  </div>
			</div>
			<?php } if($_SESSION['role'] == "Clinic Admin"){ ?>
			<div class="card" style="width: 10rem;">
			  <img src="../assets/accounts/img/p1.gif">
			  <div class="card-body text-dark">
			  <center>
				<h4 class="card-title"> PATIENT RECORDS </h4>
				<h5>TOTAL RECORD : <?php echo $total_patients ?></h5>
			   </center>
			  </div>
			</div>

			<div class="card" style="width: 10rem;">
			  <img src="../assets/accounts/img/p2.gif">
			  <div class="card-body text-dark">
			   <center>
				<h4 class="card-title">NEW PATIENT RECORD</h4>
				<h5>&nbsp;</h5>
				<h5>&nbsp;</h5>
				<a href="patients.php" class ="btn btn-primary" style="width:100%">
				<i class="fa fa-arrow-right"></i>
					<span>ADD NEW RECORD</span></a>
			   </center>
			  </div>
			</div>

			<div class="card" style="width: 10rem;">
			  <img src="../assets/accounts/img/p3.gif">
			  <div class="card-body text-dark">
			   <center>
				<h4 class="card-title">USERS</h4>
				<h5>TOTAL RECORD :  <?php echo $totaluser ?></h5>
				<h5>&nbsp;</h5>
				<a href="users.php" class ="btn btn-primary" style="width:100%">
				<i class="fa fa-arrow-right"></i>
				<span>ADD NEW USER</span></a>
				</center>
			  </div>
			</div>

			<div class="card" style="width: 10rem;">
			  <img src="../assets/accounts/img/p4.gif">
			  <div class="card-body text-dark">
			   <center>
				<h4 class="card-title">USER LOGS</h4>
				<h5>&nbsp;</h5>
				<h5>&nbsp;</h5>
				<a href="logs.php" class ="btn btn-primary" style="width:100%">
				<i class="fa fa-arrow-right"></i>
				<span>VIEW LOGS</span></a>
			   <center>
			  </div>
			</div>
			
			<?php } ?>
			</div>

			<style type="text/css">
			  .btn-primary
			  {
				font-family: helvetica;
				color: #fff;
				background-color: #10caca;
				border-color: #10caca; 
			  }

			</style>
			
			<br>
			<?php if($_SESSION['role'] == "System Administrator"){ ?>
			<?php   if($_GET['data']=='DAILY'){
					$daily = "active";
					} if($_GET['data']=='WEEKLY'){
					$weekly = "active";
					} if($_GET['data']=='MONTHLY'){
					$monthly = "active";
					} if($_GET['data']=='YEARLY'){
					$yearly = "active";
					} ?>
			 <ul class="nav nav-tabs" role="tablist">
				<li class="nav-item">
				  <a class="nav-link <?php echo $daily;?>"  href="index.php?data=DAILY">DAILY</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link <?php echo $weekly;?>" href="index.php?data=WEEKLY">WEEKLY</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link <?php echo $monthly;?>" href="index.php?data=MONTHLY">MONTHLY</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link <?php echo $yearly;?>" href="index.php?data=YEARLY">YEARLY</a>
				</li>
			  </ul>
            <div class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">SUBSCRIPTION REPORTS</h5>  
            </div>
			
            <div class="card-body">
				
			<figure class="highcharts-figure">
					<?php if($_GET['data']=='DAILY'){?>
					<div id="container-daily"></div>
					<?php }  if($_GET['data']=='WEEKLY'){?>
					<div id="container-weekly"></div>
					<?php }  if($_GET['data']=='MONTHLY'){?>
					<div id="container-monthly"></div>
					<?php }  if($_GET['data']=='YEARLY'){?>
					 <div id="container-yearly"></div>
					<?php } ?>
			</figure>
            
            </div>

			
			</div>
			
			<div class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">TRIAL ACCOUNT REPORTS</h5>  
            </div>
			
            <div class="card-body">
				
					
			<figure class="highcharts-figure">
					<figure class="highcharts-figure">
					<?php if($_GET['data']=='DAILY'){?>
					<div id="container2-daily"></div>
					<?php }  if($_GET['data']=='WEEKLY'){?>
					<div id="container2-weekly"></div>
					<?php }  if($_GET['data']=='MONTHLY'){?>
					<div id="container2-monthly"></div>
					<?php }  if($_GET['data']=='YEARLY'){?>
					 <div id="container2-yearly"></div>
					<?php } ?>
			</figure>
            </div>

			
			</div>
			
		<?php } if($_SESSION['role'] == "Clinic Admin"){ ?>
		  <div class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">PATIENTS RECORD REPORTS</h5>  
            </div>
			
            <div class="card-body">
		
				<div id="container-2"></div>
			</figure>
            
            </div>

			
			</div>
		<?php } ?>
        </div>
       
       </div>
	   
	   
<?php include("footer.php");?>
