  <?php 
	  include("include/header.php");
	  include("controller/speciality.php");
  ?>
  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

   <?php include("include/nav.php");?>


    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
					
						<div class="card-header">
						
							<h4 class="card-title">Speciality Data </h4>
							<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
							<div class="heading-elements">
								<button class="btn btn-sm round btn-info btn-glow" data-toggle="modal" data-backdrop="false" data-target="#backdrop"><i class="la la-plus font-medium-1"></i>
								New Speciality </button>
							</div>
							<br>
							<?php if(isset($_GET['added'])){?>
								<div class="alert alert-primary mb-2" role="alert">
									<strong>Success!</strong>New Credits Added!
								</div>
							<?php } ?>
						</div>
						
						<div class="card-content">
						
							<div class="table-responsive">
								<table class="table alt-pagination wallet-wrapper table-bordered table-striped">
									<thead>
										<tr>
											<th class="text-center">SPECIALITY</th>
											<th class="text-center">ACTION</th>
										</tr>
									</thead>
									<tbody>
									<?php while($val = $is_speciality->fetch_object()){ ?>
										<tr>
											<td class="text-center"><?php echo $val->speciality;?></td>
											<td class="text-center">
											<a href="#" data-toggle="modal" data-backdrop="false" data-target="#update<?php echo $val->id;?>" class="btn btn-sm round btn-outline-info">Update</a>
											<a href="#" data-toggle="modal" data-backdrop="false" data-target="#remove<?php echo $val->id;?>" class="btn btn-sm round btn-outline-warning">Delete</a>
											</td>
										</tr>
										<div class="modal fade text-left" id="update<?php echo $val->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" style="display: none;" aria-hidden="true">
											<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myModalLabel4">Speciality Details</h4>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close" fdprocessedid="oewei8">
													<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="modal-body">
													<form method="POST">
													<div class="form-group">
														<label for="companyName">Speciality : </label>
														<input type="text"  class="form-control" value="<?php echo $val->speciality;?>" placeholder="Enter Speciality" name="speciality">
														<input type="hidden"  class="form-control" value="<?php echo $val->id;?>" name="id">
													</div>
													
												</div>
												<div class="modal-footer">
													<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal" fdprocessedid="pu6p1c">Close</button>
													<button type="submit" class="btn btn-outline-primary" name="process-update">Update</button>
												</div>
												</form>
											</div>
											</div>
										</div>
										<div class="modal fade text-left" id="remove<?php echo $val->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" style="display: none;" aria-hidden="true">
											<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title" id="myModalLabel4">Removed Speciality</h4>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close" fdprocessedid="oewei8">
													<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="modal-body">
													<form method="POST">
														Are you sure to delete this Speciality ?
														<input type="hidden" class="form-control" placeholder="Enter User Name" value="<?php echo $val->id;?>" name="id">
													
												</div>
												<div class="modal-footer">
													<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal" fdprocessedid="pu6p1c">Close</button>
													<button type="submit" class="btn btn-outline-warning" name="process-delete">Delete</button>
												</div>
												</form>
											</div>
											</div>
										</div>
									<?php } ?>	
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
      </div>
    </div>
	
	<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" style="display: none;" aria-hidden="true">
		<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel4">Speciality Details</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" fdprocessedid="oewei8">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST">
				<div class="form-group">
					<label for="companyName">Speciality : </label>
					<input type="text"  class="form-control" placeholder="Enter Speciality" name="speciality">
				</div>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal" fdprocessedid="pu6p1c">Close</button>
				<button type="submit" class="btn btn-outline-primary" name="process">Save</button>
			</div>
			</form>
		</div>
		</div>
	</div>


      <?php include("include/footer.php");?>
