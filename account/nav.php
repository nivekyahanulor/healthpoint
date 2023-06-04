<body id="page-top">

    <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
		  <?php  if($_SESSION['role'] == "Clinic Admin"){ ?>

        



			<?php } ?>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                 
				<?php echo $_SESSION['role'] .' - '.$_SESSION['name'];?>
			
                </span>
              </a>
			  <?php if($_SESSION['role'] == "Standard User"){} else { ?>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">   
				<a class="dropdown-item" href="change-password.php">
				<i class="fas fa-fw fa-key mr-2 text-gray-400"></i>
               Change Password
				</a>
				<a class="dropdown-item" href="account-recovery.php">
				<i class="fas fa-fw fa-user mr-2 text-gray-400"></i>
                Account Recovery
				</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
			  <?php } ?>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class=" navbar-nav bg-gradient-primary sidenav sidebar sidebar-dark accordion " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="#">
        <div class="sidebar-brand-icon rotate-n-0">
           <i class="fas fa-folder-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Patient Records</div>
      </a>
   
      <hr class="sidebar-divider my-0">
	 <?php if($_SESSION['role'] == "Standard User"){} else { ?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php?data=DAILY">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DASHBOARD</span></a>
      </li>
	 <?php } ?>
      <!-- Divider -->
      <hr class="sidebar-divider">

	<?php if($_SESSION['role'] == "System Administrator"){ ?>
      <li class="nav-item active">
        <a class="nav-link collapsed " href="client.php">
          <i class="fas fa-fw fa-user-circle "></i>
          <span>PATIENTS RECORDS </span></a>
      </li>
	  
	   <!--<li class="nav-item active">
        <a class="nav-link collapsed " href="trials.php">
          <i class="fas fa-fw fa-address-card "></i>
          <span>TRIAL ACCOUNTS  </span></a>
      </li>
	  
      <li class="nav-item active">
        <a class="nav-link collapsed " href="subscription.php">
          <i class="fas fa-fw fa-certificate "></i>
          <span>SUBSCRIPTIONS PLAN</span></a>
      </li>-->

       <li class="nav-item active">
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-user-plus"></i>
          <span>ADMINISTRATOR USERS</span></a>
       </li>
	<?php } if($_SESSION['role'] == "Clinic Admin"){ ?>
		<li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="patients.php">
          <i class="fas fa-fw fa-table "></i>
          <span>PATIENT RECORDS </span></a>
		</li>
		<li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="archived.php">
          <i class="fas fa-fw fa-address-book "></i>
          <span>ARCHIVED RECORDS </span></a>
		</li>

       <li class="nav-item active">
        <a class="nav-link" href="users.php">
          <i class="fas fa-fw fa-user-plus"></i>
          <span> USERS</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="logs.php">
          <i class="fas fa-fw  fa-users"></i>
          <span>USER LOGS</span></a>
      </li>
	
	<?php } if($_SESSION['role'] == "Standard User"){ ?>
		<li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="patients.php">
          <i class="fas fa-fw fa-table "></i>
          <span>PATIENT RECORDS </span></a>
		</li>

	<?php } ?>
     
      <hr class="sidebar-divider d-none d-md-block">

		<li class="nav-item active">
			<a class="nav-link" href="logout.php">
			  <i class="fas fa-arrow-left"></i>
			  <span>LOGOUT</span></a>
		  </li>
		</ul>
    <!-- End of Sidebar -->