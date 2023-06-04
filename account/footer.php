 <!-- End of Main Content -->
  <br><br><br><br><br><br><br><br><br><br>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; ONLINE HEALTH RECORD SYSTEM  FOR HEALTHPOINT 2023</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-success" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>





 
</body>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>
<script>
	  $(document).ready(function() {
            $('#table_only').DataTable();
            $('#table_only1').DataTable();
			$('#patients').DataTable({
			   pageLength: 25,
				dom: 'Bflrtip',  
				buttons:[ 
				{
				extend:    'excelHtml5',
				titleAttr: 'Export to Excel',
				title: 'Patients Record',
						exportOptions: {
							columns: [0, 1, 2, 3,4,5,6,7]
						}
				},
				{
				extend:    'pdfHtml5',
				title: 'Patients Record',
				titleAttr: 'Export to PDF',
						exportOptions: {
							columns: [0, 1, 2, 3,4,5,6,7]
						}
				 },
				 {
				extend:    'csvHtml5',
				title: 'Patients Record',
				titleAttr: 'Export to CSV',
						exportOptions: {
							columns: [0, 1, 2, 3,4,5,6,7]
						}
				 },	
				 {
				extend:    'print',
				titleAttr: 'Print',
				title: '',
						exportOptions: {
							columns: [0, 1, 2, 3,4,5,6,7]
						}
					},
				],
				"order": [[ 0, "desc" ]],
			});
			
			$('#users').DataTable({
			   pageLength: 25,
				dom: 'Bflrtip',  
				buttons:[ 
				{
				extend:    'excelHtml5',
				titleAttr: 'Export to Excel',
						exportOptions: {
							columns: [0, 1, 2, 3,4,5,6,7]
						}
				},
				{
				extend:    'pdfHtml5',
				titleAttr: 'Export to PDF',
						exportOptions: {
							columns: [0, 1, 2, 3,4,5,6,7]
						}
				 },
				 {
				extend:    'csvHtml5',
				titleAttr: 'Export to CSV',
						exportOptions: {
							columns: [0, 1, 2, 3,4,5,6,7]
						}
				 },	
				 {
				extend:    'print',
				titleAttr: 'Print',
				title: '',
						exportOptions: {
							columns: [0, 1, 2, 3,4,5,6,7]
						}
					},
				],
				"order": [[ 0, "desc" ]],
			});
			
			$('#trials').DataTable({
			   pageLength: 25,
				dom: 'Bflrtip',  
				buttons:[ 
				{
				extend:    'excelHtml5',
				titleAttr: 'Export to Excel',
						exportOptions: {
							columns: [0, 1, 2, 3,4]
						}
				},
				{
				extend:    'pdfHtml5',
				titleAttr: 'Export to PDF',
						exportOptions: {
							columns: [0, 1, 2, 3,4]
						}
				 },
				 {
				extend:    'csvHtml5',
				titleAttr: 'Export to CSV',
						exportOptions: {
							columns: [0, 1, 2, 3,4]
						}
				 },	
				 {
				extend:    'print',
				titleAttr: 'Print',
				title: '',
						exportOptions: {
							columns: [0, 1, 2, 3,4]
						}
					},
				],
				"order": [[ 0, "desc" ]],
			});
			
        });		
	</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
 <?php
	
	$greport	= $mysqli->query("
			SELECT 
			SUM(IF(month = 'Jan', total, 0)) AS 'Jan', 
			SUM(IF(month = 'Feb', total, 0)) AS 'Feb', 
			SUM(IF(month = 'Mar', total, 0)) AS 'Mar', 
			SUM(IF(month = 'Apr', total, 0)) AS 'Apr', 
			SUM(IF(month = 'May', total, 0)) AS 'May', 
			SUM(IF(month = 'Jun', total, 0)) AS 'Jun', 
			SUM(IF(month = 'Jul', total, 0)) AS 'Jul', 
			SUM(IF(month = 'Aug', total, 0)) AS 'Aug', 
			SUM(IF(month = 'Sep', total, 0)) AS 'Sep', 
			SUM(IF(month = 'Oct', total, 0)) AS 'Oct', 
			SUM(IF(month = 'Nov', total, 0)) AS 'Nov', 
			SUM(IF(month = 'Dec', total, 0)) AS 'Dec' 
			FROM ( SELECT DATE_FORMAT(date_added, '%b') AS month, 
			COUNT(*) as total 
			FROM c_accounts WHERE date_added <= NOW() and date_added >= Date_add(Now(),interval - 12 month) 
			GROUP BY DATE_FORMAT(date_added, '%m-%Y')) as sub
		");
		$row2    = $greport->fetch_assoc();

			foreach($row2 as $val => $res){
					$month[]  =  $val;
					$value2[] =  $res;
			}


 ?>
 <?php
	
	$greport1	= $mysqli->query("
			SELECT 
			SUM(IF(month = 'Jan', total, 0)) AS 'Jan', 
			SUM(IF(month = 'Feb', total, 0)) AS 'Feb', 
			SUM(IF(month = 'Mar', total, 0)) AS 'Mar', 
			SUM(IF(month = 'Apr', total, 0)) AS 'Apr', 
			SUM(IF(month = 'May', total, 0)) AS 'May', 
			SUM(IF(month = 'Jun', total, 0)) AS 'Jun', 
			SUM(IF(month = 'Jul', total, 0)) AS 'Jul', 
			SUM(IF(month = 'Aug', total, 0)) AS 'Aug', 
			SUM(IF(month = 'Sep', total, 0)) AS 'Sep', 
			SUM(IF(month = 'Oct', total, 0)) AS 'Oct', 
			SUM(IF(month = 'Nov', total, 0)) AS 'Nov', 
			SUM(IF(month = 'Dec', total, 0)) AS 'Dec' 
			FROM ( SELECT DATE_FORMAT(date_added, '%b') AS month, 
			COUNT(*) as total 
			FROM c_trial_accounts WHERE date_added <= NOW() and date_added >= Date_add(Now(),interval - 12 month) 
			GROUP BY DATE_FORMAT(date_added, '%m-%Y')) as sub
		");
		$row22    = $greport1->fetch_assoc();

			foreach($row22 as $val2 => $res2){
					$month2[]  =  $val2;
					$value22[] =  $res2;
			}


 ?>
 <?php
	
	$greport2	= $mysqli->query("
			SELECT 
			SUM(IF(month = 'Jan', total, 0)) AS 'Jan', 
			SUM(IF(month = 'Feb', total, 0)) AS 'Feb', 
			SUM(IF(month = 'Mar', total, 0)) AS 'Mar', 
			SUM(IF(month = 'Apr', total, 0)) AS 'Apr', 
			SUM(IF(month = 'May', total, 0)) AS 'May', 
			SUM(IF(month = 'Jun', total, 0)) AS 'Jun', 
			SUM(IF(month = 'Jul', total, 0)) AS 'Jul', 
			SUM(IF(month = 'Aug', total, 0)) AS 'Aug', 
			SUM(IF(month = 'Sep', total, 0)) AS 'Sep', 
			SUM(IF(month = 'Oct', total, 0)) AS 'Oct', 
			SUM(IF(month = 'Nov', total, 0)) AS 'Nov', 
			SUM(IF(month = 'Dec', total, 0)) AS 'Dec' 
			FROM ( SELECT DATE_FORMAT(date_added, '%b') AS month, 
			COUNT(*) as total 
			FROM c_patient_record WHERE date_added <= NOW() and date_added >= Date_add(Now(),interval - 12 month) 
			GROUP BY DATE_FORMAT(date_added, '%m-%Y')) as sub
		");
		$row3   = $greport2->fetch_assoc();

			foreach($row3 as $val3 => $res3){
					$month3[]  =  $val3;
					$value3[] =  $res3;
			}


 ?>
  <script>
Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'SUBSCRIPTION PLAN'
    },
    subtitle: {
        text: 'Source: ' + 'DATABASE'

    },
    xAxis: {
        categories: <?php echo json_encode($month);?>
    },
    yAxis: {
        title: {
            text: 'Data'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'SUBSCRIPTION ACCOUNTS',
         data: <?php echo json_encode($value2,JSON_NUMERIC_CHECK);?>

    }]
});

 </script>
 <script>
Highcharts.chart('container-1', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'TRIAL ACCOUNTS '
    },
    subtitle: {
        text: 'Source: ' + 'DATABASE'

    },
    xAxis: {
        categories: <?php echo json_encode($month);?>
    },
    yAxis: {
        title: {
            text: 'Data'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'TRIAL ACCOUNTS',
         data: <?php echo json_encode($value22,JSON_NUMERIC_CHECK);?>

    }]
});

 </script>
 <script>
Highcharts.chart('container-2', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'PATIENT RECORD '
    },
    subtitle: {
        text: 'Source: ' + 'DATABASE'

    },
    xAxis: {
        categories: <?php echo json_encode($month3);?>
    },
    yAxis: {
        title: {
            text: 'Data'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'PATIENT',
         data: <?php echo json_encode($value3,JSON_NUMERIC_CHECK);?>

    }]
});

 </script>
 
 
 	<?php
	$daily_report = $mysqli->query("SELECT count(*)daily_count from c_accounts where DATE(date_added) = DATE(NOW())");
	$dailyres = array();
	while($daily = $daily_report->fetch_object()){ 
		 $dailyres[] = array( "name" => "Subscription" ,"y" => $daily->daily_count);
	}
	
	$weekly_report = $mysqli->query("select t.d,daily_count from 
									( select 'Saturday' as d 
									union all select 'Sunday' 
									union all select 'Monday' 
									union all select 'Tuesday' 
									union all select 'Wednesday' 
									union all select 'Thursday' 
									union all select 'Friday' )t left join 
									( SELECT DAYNAME(a.date_added) AS DAY, 
									count(*)daily_count FROM `c_accounts` a 
									WHERE a.date_added >= DATE(NOW()) - INTERVAL 7 DAY GROUP BY DAY )t1 on t.d=t1.day");
	$weeklyres = array();
	while($weekly = $weekly_report->fetch_object()){ 
		 $weeklyres[] = array("name" => $weekly->d,
							   "y" => $weekly->daily_count
						);
	}
	
	$yearly_report = $mysqli->query("SELECT YEAR(a.date_added) year, count(*) yearly  from c_accounts a   group by  YEAR(a.date_added)");
	$yearlyres = array();
	while($yearly = $yearly_report->fetch_object()){ 
		 $yearlyres[] = array("name" => $yearly->year,
							   "y" => $yearly->yearly
						);
	}
	
	$monthly_report  = $mysqli->query("
			SELECT 
			SUM(IF(month = 'Jan', total, 0)) AS 'Jan', 
			SUM(IF(month = 'Feb', total, 0)) AS 'Feb', 
			SUM(IF(month = 'Mar', total, 0)) AS 'Mar', 
			SUM(IF(month = 'Apr', total, 0)) AS 'Apr', 
			SUM(IF(month = 'May', total, 0)) AS 'May', 
			SUM(IF(month = 'Jun', total, 0)) AS 'Jun', 
			SUM(IF(month = 'Jul', total, 0)) AS 'Jul', 
			SUM(IF(month = 'Aug', total, 0)) AS 'Aug', 
			SUM(IF(month = 'Sep', total, 0)) AS 'Sep', 
			SUM(IF(month = 'Oct', total, 0)) AS 'Oct', 
			SUM(IF(month = 'Nov', total, 0)) AS 'Nov', 
			SUM(IF(month = 'Dec', total, 0)) AS 'Dec' 
			FROM ( SELECT DATE_FORMAT(date_added, '%b') AS month, 
			COUNT(*) as total 
			FROM c_patient_record WHERE date_added <= NOW() and date_added >= Date_add(Now(),interval - 12 month) 
			GROUP BY DATE_FORMAT(date_added, '%m-%Y')) as sub
		");
	$row1    = $monthly_report->fetch_assoc();
			foreach($row1 as $val => $res){
					$month[] =  $val;
					$value[] =  $res;
			}
	
	?>
	<script>
	// DAILY
	Highcharts.chart('container-yearly', {
		chart: {
			type: 'column'
		},
		title: {
			align: 'center',
			text: 'Yearly Subscription Report'
		},
		accessibility: {
			announceNewData: {
				enabled: true
			}
		},
		xAxis: {
			type: 'category'
		},
		yAxis: {
			title: {
				text: 'Total Subscription'
			}

		},
		legend: {
			enabled: false
		},
		plotOptions: {
			series: {
				borderWidth: 0,
				dataLabels: {
					enabled: true,
					format: '{point.y}'
				}
			}
		},

		tooltip: {
			headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
			pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
		},

		series: [
			{
				name: "Browsers",
				colorByPoint: true,
				data: <?php echo json_encode($yearlyres,JSON_NUMERIC_CHECK);?>
			}
		]
	});
  </script>
  <script>
	// DAILY
	Highcharts.chart('container-daily', {
		chart: {
			type: 'column'
		},
		title: {
			align: 'center',
			text: 'Daily Subscription Report'
		},
		accessibility: {
			announceNewData: {
				enabled: true
			}
		},
		xAxis: {
			type: 'category'
		},
		yAxis: {
			title: {
				text: 'Total Subscription Today'
			}

		},
		legend: {
			enabled: false
		},
		plotOptions: {
			series: {
				borderWidth: 0,
				dataLabels: {
					enabled: true,
					format: '{point.y}'
				}
			}
		},

		tooltip: {
			headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
			pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
		},

		series: [
			{
				name: "Browsers",
				colorByPoint: true,
				data: <?php echo json_encode($dailyres,JSON_NUMERIC_CHECK);?>
			}
		]
	});
  </script>
  <script>
	//WEEKLY
	
	Highcharts.chart('container-weekly', {
		chart: {
			type: 'column'
		},
		title: {
			align: 'center',
			text: 'Weekly Subscription Report'
		},
		accessibility: {
			announceNewData: {
				enabled: true
			}
		},
		xAxis: {
			type: 'category'
		},
		yAxis: {
			title: {
				text: 'Total Subscription'
			}

		},
		legend: {
			enabled: false
		},
		plotOptions: {
			series: {
				borderWidth: 0,
				dataLabels: {
					enabled: true,
					format: '{point.y}'
				}
			}
		},

		tooltip: {
			headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
			pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
		},

		series: [
			{
				name: "Day",
				colorByPoint: true,
				data: <?php echo json_encode($weeklyres,JSON_NUMERIC_CHECK);?>
			}
		]
	});

	</script>
	<script>
	Highcharts.chart('container-monthly', {
		chart: {
			type: 'column'
		},
		title: {
			text: 'MONTHLY SUBSCRIPTION ' + <?php echo date('Y');?>
		},
		subtitle: {
		},
		xAxis: {
			categories: <?php echo json_encode($month);?>
		},
		yAxis: {
			title: {
				text: ' SALES'
			},
			labels: {
				formatter: function () {
					return Highcharts.numberFormat(this.value,0);
				}
			}
		},
		tooltip: {
			crosshairs: true,
			shared: true
		},
	   
		series: [{
			name: 'SALES',
			color: '#0066FF',
			data: <?php echo json_encode($value,JSON_NUMERIC_CHECK);?>

		}]
	});
	</script>
 <!---- TRIAL ---! >
 
 <!-->
 	<?php
	$daily_report1 = $mysqli->query("SELECT count(*)daily_count from c_trial_accounts where DATE(date_added) = DATE(NOW())");
	$dailyres1 = array();
	while($daily1 = $daily_report1->fetch_object()){ 
		 $dailyres1[] = array( "name" => "Subscription" ,"y" => $daily1->daily_count);
	}
	
	$weekly_report1 = $mysqli->query("select t.d,daily_count from 
									( select 'Saturday' as d 
									union all select 'Sunday' 
									union all select 'Monday' 
									union all select 'Tuesday' 
									union all select 'Wednesday' 
									union all select 'Thursday' 
									union all select 'Friday' )t left join 
									( SELECT DAYNAME(a.date_added) AS DAY, 
									count(*)daily_count FROM `c_trial_accounts` a 
									WHERE a.date_added >= DATE(NOW()) - INTERVAL 7 DAY GROUP BY DAY )t1 on t.d=t1.day");
	$weeklyres1 = array();
	while($weekly1 = $weekly_report1->fetch_object()){ 
		 $weeklyres1[] = array("name" => $weekly1->d,
							   "y" => $weekly1->daily_count
						);
	}
	
	$yearly_reportt = $mysqli->query("SELECT YEAR(a.date_added) year, count(*) yearly  from c_trial_accounts a   group by  YEAR(a.date_added)");
	$yearlyrest = array();
	while($yearlyt = $yearly_reportt->fetch_object()){ 
		 $yearlyrest[] = array("name" => $yearlyt->year,
							   "y" => $yearlyt->yearly
						);
	}
	
	$monthly_report12  = $mysqli->query("
			SELECT 
			SUM(IF(month = 'Jan', total, 0)) AS 'Jan', 
			SUM(IF(month = 'Feb', total, 0)) AS 'Feb', 
			SUM(IF(month = 'Mar', total, 0)) AS 'Mar', 
			SUM(IF(month = 'Apr', total, 0)) AS 'Apr', 
			SUM(IF(month = 'May', total, 0)) AS 'May', 
			SUM(IF(month = 'Jun', total, 0)) AS 'Jun', 
			SUM(IF(month = 'Jul', total, 0)) AS 'Jul', 
			SUM(IF(month = 'Aug', total, 0)) AS 'Aug', 
			SUM(IF(month = 'Sep', total, 0)) AS 'Sep', 
			SUM(IF(month = 'Oct', total, 0)) AS 'Oct', 
			SUM(IF(month = 'Nov', total, 0)) AS 'Nov', 
			SUM(IF(month = 'Dec', total, 0)) AS 'Dec' 
			FROM ( SELECT DATE_FORMAT(date_added, '%b') AS month, 
			COUNT(*) as total 
			FROM c_trial_accounts WHERE date_added <= NOW() and date_added >= Date_add(Now(),interval - 12 month) 
			GROUP BY DATE_FORMAT(date_added, '%m-%Y')) as sub
		");
	$row11    = $monthly_report12->fetch_assoc();
	$month22 = array();
	$value22 = array();
			foreach($row11 as $val22 => $res22){
					$month22[] =  $val22;
					$value22[] =  $res22;
			}
	
	?>
	<script>
	// YEARLY
	Highcharts.chart('container2-yearly', {
		chart: {
			type: 'column'
		},
		title: {
			align: 'center',
			text: 'Yearly Trial Account Report'
		},
		accessibility: {
			announceNewData: {
				enabled: true
			}
		},
		xAxis: {
			type: 'category'
		},
		yAxis: {
			title: {
				text: 'Total Trial Account'
			}

		},
		legend: {
			enabled: false
		},
		plotOptions: {
			series: {
				borderWidth: 0,
				dataLabels: {
					enabled: true,
					format: '{point.y}'
				}
			}
		},

		tooltip: {
			headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
			pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
		},

		series: [
			{
				name: "Browsers",
				colorByPoint: true,
				data: <?php echo json_encode($yearlyrest,JSON_NUMERIC_CHECK);?>
			}
		]
	});
  </script>
  <script>
	// DAILY
	Highcharts.chart('container2-daily', {
		chart: {
			type: 'column'
		},
		title: {
			align: 'center',
			text: 'Daily Trial Account Report'
		},
		accessibility: {
			announceNewData: {
				enabled: true
			}
		},
		xAxis: {
			type: 'category'
		},
		yAxis: {
			title: {
				text: 'Total Trial Today'
			}

		},
		legend: {
			enabled: false
		},
		plotOptions: {
			series: {
				borderWidth: 0,
				dataLabels: {
					enabled: true,
					format: '{point.y}'
				}
			}
		},

		tooltip: {
			headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
			pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
		},

		series: [
			{
				name: "Browsers",
				colorByPoint: true,
				data: <?php echo json_encode($dailyres1,JSON_NUMERIC_CHECK);?>
			}
		]
	});
  </script>
  <script>
	//WEEKLY
	
	Highcharts.chart('container2-weekly', {
		chart: {
			type: 'column'
		},
		title: {
			align: 'center',
			text: 'Weekly Trial Account Report'
		},
		accessibility: {
			announceNewData: {
				enabled: true
			}
		},
		xAxis: {
			type: 'category'
		},
		yAxis: {
			title: {
				text: 'Total Trials'
			}

		},
		legend: {
			enabled: false
		},
		plotOptions: {
			series: {
				borderWidth: 0,
				dataLabels: {
					enabled: true,
					format: '{point.y}'
				}
			}
		},

		tooltip: {
			headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
			pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
		},

		series: [
			{
				name: "Day",
				colorByPoint: true,
				data: <?php echo json_encode($weeklyres1,JSON_NUMERIC_CHECK);?>
			}
		]
	});

	</script>
	<script>
	Highcharts.chart('container2-monthly', {
		chart: {
			type: 'column'
		},
		title: {
			text: 'MONTHLY TRIAL ACCOUNT' + <?php echo date('Y');?>
		},
		subtitle: {
		},
		xAxis: {
			categories: <?php echo json_encode($month22);?>
		},
		yAxis: {
			title: {
				text: ' TRIAL ACCOUNT'
			},
			labels: {
				formatter: function () {
					return Highcharts.numberFormat(this.value,0);
				}
			}
		},
		tooltip: {
			crosshairs: true,
			shared: true
		},
	   
		series: [{
			name: 'TRIAL ACCOUNT',
			color: '#0066FF',
			data: <?php echo json_encode($value22,JSON_NUMERIC_CHECK);?>

		}]
	});
	</script>
</html>


