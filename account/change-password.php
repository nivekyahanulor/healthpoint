<?php include("header.php");?>
<?php include("nav.php");?>
<?php 
 if($_SESSION['role'] == "System Administrator"){ 
	include("controller/c_users_admin.php");
	foreach($c_system_admin1 as $user){
		 $password = $user['sys_pass'];
	 }
 } if($_SESSION['role'] == "Clinic Admin"){
	include("controller/c_users.php");
	foreach($c_accounts as $user){
		 $password = $user['password'];
	}
 }
?>

	<?php 
	
	 ?>
    <div id="content-wrapper" class="main d-flex flex-column">
	<br>
      <div id="content"> 
        <div class="container-fluid">
		  <div class="row  justify-content-center">
			<div class="col-sm-6">

		   <div  id="addusertable" class="card shadow mb-4">
      
            <div class="card-header py-3">
				<h5 class="mb-2 text-gray-800">CHANGE PASSWORD</h5>  
            </div>
			
            <div class="card-body">
				<?php if(isset($_GET['updated'])){?>
			     <div class="alert alert-info">
					<strong>Success:</strong> Account Password Updated!
				</div>

			  <?php } ?>
			  <form method="POST">
			  <div class="row">
			    <div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">OLD PASSWORD </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="oldpass" id="oldpass" placeholder="ENTER OLD PASSWORD" required>
						<input class="form-control" type="hidden" name="currentpass" id="currentpass" value="<?php echo $password;?>" required>
						<?php if(isset($_GET['notmatch'])){?>
							<div style="font-size:10px;color:red;"> <br> The Old Password is incorrect!</small> </div>
						<?php } ?>
						</div>
				</div>
				</div>
			
			
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1"> NEW PASSWORD </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="text" name="newpassword" id="newpassword" placeholder="ENTER NEW PASSWORD " required></div>
				</div>
				</div>
				
				<div class="col-sm-12">
				<div style="margin-bottom:17px;">
					<div class="row no-gutters">
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">CONFIRM PASSWORD </div>   
					</div>
					<div class="h5 mb-1 font-weight-bold text-gray-800">
						<input class="form-control" type="password" name="confirmpass" id="confirmpass" placeholder="ENTER CONFIRM PASSWORD " required>
						<div id="oldpass-error" style="display:none;font-size:10px;color:red;"> <br> The Confirm Password field does not match the New Password field.</small> </div>
						</div>
				</div>
				</div>
				 <div class="modal-footer">
				<button type="submit" class="btn btn-primary" name="change-password" id="change-password">UPDATE</button>
			  </div>
			</div>
		  </form>
		  </div>
		</div>
		</div>
		</div>
	
	<script>
	$('#confirmpass').keyup(function() {
	var news = $("#newpassword").val();
	if(this.value  != news){
		$("#oldpass-error").show();
		$("#change-password").hide();
	} else {
		$("#oldpass-error").hide();
		$("#change-password").show();
	}
	});
	</script>
<?php include("footer.php");?>
