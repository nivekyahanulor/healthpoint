<body id="page-top">

    <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                <?php
				$now   = new DateTime(date("Y-m-d"));
				$date1 = new DateTime($_SESSION['trial_days']);
				$diff1  = $date1->diff($now);
				if($diff1->format('%R%a') <=0){
					$dd = $diff1->days;
				} else {
					
					$dd = 0;
					$trial = $_SESSION['id'];
					$mysqli->query("UPDATE c_trial_accounts set trial_status = 0 where trial_id ='$trial' ");
					// Initialize the session.
					session_start();
					// Unset all of the session variables.
					unset($_SESSION['id']);
					// Finally, destroy the session.    
					session_destroy();

					// Include URL for Login page to login again.
					header("Location: ../trial-login.php?expired");
					exit;
				}
				?>
				<b> REMAINING DAYS FOR TRIAL : <?php echo $dd; ?> Day/s </b>

                </span>
              </a>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                 
				TRIAL ACCOUNT - <?php echo $_SESSION['name'];?>
			
                </span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">   
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
 








          

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class=" navbar-nav bg-gradient-info sidenav sidebar sidebar-dark accordion " id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center"  href="#">
        <div class="sidebar-brand-icon rotate-n-0">
           <i class="fas fa-folder-open"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Patient Records</div>
      </a>
   

 <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DASHBOARD</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <li class="nav-item active">
         <!-- Nav Item - Tables -->
        <a class="nav-link collapsed " href="patients.php">
          <i class="fas fa-fw fa-table "></i>
          <span>PATIENT RECORDS </span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="users.php">
          <i class="fas fa-fw fa-user-plus"></i>
          <span> USERS</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw  fa-users"></i>
          <span>USER LOGS</span></a>
      </li>
	

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

	<li class="nav-item active">
        <a class="nav-link" href="logout.php">
          <i class="fas fa-arrow-left"></i>
          <span>LOGOUT</span></a>
      </li>
    </ul>
    <!-- End of Sidebar -->