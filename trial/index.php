
<?php include("header.php");?>
<?php include("nav.php");?>
<?php include("controller/dashboard.php");?>



    <div id="content-wrapper" class="main d-flex flex-column">

      <div id="content"> 
        <div class="container-fluid">
				   
			<div class="card-group">
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
				<h5>TOTAL RECORD :  <?php echo $total_patients ?></h5>
				<h5>TOTAL RECORD : <?php echo $total_patients ?></h5>
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
				(Available at SUBSCRIPTION ACCOUNT)
			   <center>
			  </div>
			</div>
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
             <div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">CHART REPORTS</h5>  
            </div>
			
            <div class="card-body">
				
				REPORT CHART WILL BE AVAILABLE AT SUBSCRIPTION ACCOUNT !
            
            </div>

			
        </div>
        </div>
       
       </div>
	   
	   
<?php include("footer.php");?>
