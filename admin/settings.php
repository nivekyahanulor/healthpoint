  <?php 
	  include("include/header.php");
	  include("controller/settings.php");
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
             <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    
                    <div class="card-body">
                      <form method="post" enctype="multipart/form-data">
					  <?php while($val = $settings1->fetch_object()){ ?>
					   
					  <h5 class="mb-3">System Information <h5>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">System Name: </label>
                          <input type="text" class="form-control" name="systemname" value="<?php echo $val->title;?>"/>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Email Address:</label>
                          <input type="email" class="form-control" name="email" value="<?php echo $val->email;?>" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Facebook Link:</label>
                          <input type="text" class="form-control" name="facebook" value="<?php echo $val->facebook;?>"/>
                        </div>
                       <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Contact Number:</label>
                          <input type="text" class="form-control" name="contact" value="<?php echo $val->contact;?>" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">Address:</label>
                          <textarea class="form-control" name="address" /><?php echo $val->address;?></textarea>
                        </div>
                      
                     
                    </div>
                  </div>
                </div>
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Contents</h5>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">About Us:</label>
                          <textarea class="form-control"name="about" id="summernote1" rows="6"/><?php echo $val->about;?></textarea>
                        </div> 
						<div class="mb-3">
                          <label class="form-label" for="basic-default-company">Mission:</label>
                          <textarea class="form-control"name="terms" id="summernote2"  rows="5"/><?php echo $val->mission;?></textarea>
                        </div>
						<div class="mb-3">
                          <label class="form-label" for="basic-default-company">Vision:</label>
                          <textarea class="form-control"name="faq"  id="summernote3"  rows="5"/><?php echo $val->vision;?></textarea>
                        </div>
						<?php } ?>  
                      
                       
                        <button type="submit" class="btn btn-primary" name="update-settings">UPDATE</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </div>
	
	

<?php include("include/footer.php");?>
