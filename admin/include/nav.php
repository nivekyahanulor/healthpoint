   <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item mr-auto"><a class="navbar-brand" href="#"><img class="brand-logo" alt="modern admin logo" src="../assets/image/logo.png" style="width:50px;">
                <h3 class="brand-text">HEALTH POINT</h3></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="dropdown nav-item mega-dropdown d-none d-lg-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Welcome , Administrator</a>
            
           
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="../assets/image/default.jpg" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#">
				<i class="ft-user"></i>  <?php echo $_SESSION['name'];?></a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="logout"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
	<?php
		error_reporting(0);
		$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		$uri_segments = explode('/', $uri_path);
		 $page =  $uri_segments[3];
		
		if ( $page == 'dashboard'  ) {
            $dashboard = 'active';
        }else if ($page == 'complan') {
			$complan = 'active';
         }else if ($page == 'patients' || $page == 'patient-profile' || $page == 'patient-medical-history' ) {
            $patients = 'active';
        }else if ($page == 'wallet') {
            $wallet = 'active';
        }else if ($page == 'appointments' ) {
            $appointments = 'active';
        }else if ($page == 'profile' ) {
            $profile = 'active';
        }else if ($page == 'doctors' || $page == 'doctor-records' ) {
            $doctors = 'active';
        }else if ($page == 'admins' ) {
            $admins = 'active';
        }else if ($page == 'settings' ) {
            $settings = 'active';
        }else if ($page == 'logs' ) {
            $logs = 'active';
        }else if ($page == 'reports' ) {
            $reports = 'active';
        }
	?>
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item <?php echo $dashboard;?>"><a href="dashboard"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a> </li>
          <li class=" nav-item <?php echo $doctors;?>"><a href="doctors"><i class="la la-user"></i><span class="menu-title" data-i18n="Templates">Doctors</span></a></li>
          <li class=" nav-item <?php echo $patients;?>"><a href="patients"><i class="la la-users"></i><span class="menu-title" data-i18n="eCommerce"> Patients</span></a></li>
          <li class=" nav-item <?php echo $appointments;?>"><a href="appointments?data=pending"><i class="la la-clipboard"></i><span class="menu-title" data-i18n="eCommerce"> Appointments</span></a></li>
          <li class=" nav-item <?php echo $admins;?>"><a href="admins"><i class="la la-users"></i><span class="menu-title" data-i18n="eCommerce">  Administrators</span></a></li>
          <li class=" nav-item <?php echo $reports;?>"><a href="reports"><i class="la la-signal"></i><span class="menu-title" data-i18n="eCommerce">  Reports</span></a></li>
          <li class=" nav-item <?php echo $settings;?>"><a href="settings"><i class="la la-gear"></i><span class="menu-title" data-i18n="eCommerce">  Settings</span></a></li>
          <li class=" nav-item <?php echo $logs;?>"><a href="logs"><i class="la la-history"></i><span class="menu-title" data-i18n="eCommerce">  History Logs</span></a></li>
          <li class=" nav-item"><a href="logout"><i class="la la-unlock"></i><span class="menu-title" data-i18n="eCommerce"> Sign-Out</span></a></li>
        </ul>
      </div>
    </div>