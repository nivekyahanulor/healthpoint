

    <!-- Buynow Button-->
   
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
	  <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2023 
	  </span>
	  <span class="float-md-right d-none d-lg-block">HEALTHPOINT <i class="ft-heart pink"></i>
	  <span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <!-- BEGIN: Vendor JS-->
    <script src="../assets/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->
	
    <!-- BEGIN: Page Vendor JS-->
    <script src="../assets/js/chart.min.js"></script>
    <script src="../assets/js/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../assets/js/app-menu.min.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/js/customizer.min.js"></script>
    <script src="../assets/js/footer.min.js"></script>
    <!-- END: Theme JS-->
	<script src="../assets/js/moment.js"></script>
	<script src="../assets/js/fullcalendar.js"></script>
    <script src="../assets/js/datatables.min.js"></script>
	<script src="../assets/sweetalert2/sweetalert2.all.min.js" ></script>
    <script src="../assets/js/dashboard-crypto.min.js"></script>
	
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/data.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/accessibility.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" />    
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.js"></script>
	
	<script>
	
	$(".alt-pagination").DataTable({pagingType:"full_numbers"});
	</script>
	


	  <?php 
  
		$calendar = array();
		$appointments = array();
	
			
			$is_appointments = $mysqli->query("SELECT a.*, b.firstname as p_fname , b.lastname as p_lastname , c.firstname as d_fname , c.lastname as d_lname from is_appointments a
								   LEFT JOIN is_patients b on b.patient_id  = a.patient_id
								   LEFT JOIN is_doctors c on c.doctor_id   = a.doctors_id 
								   ");
								   
			while($res = $is_appointments->fetch_object()){ 
				 $start = $res->appointment_date;
				 $startDate  = date("Y-m-d", strtotime($start));
				 $calendar[] = array( 
									  "title" => "Patient :" . $res->p_fname . ' ' . $res->p_lastname,
									  "start" => $startDate."T00:00:00.000",
									  "time" => $res->appointment_time,
									  "backgroundColor" => "blue",
									  "textColor"=> 'white',
									);
			}
			
			
			

	?>
  <script>
  	$(document).ready(function() {
		$('#closecalendar').click(function() {
			$('#calendarmodal').modal('hide');
		});
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultView: 'month',
			  views: {
				month: { columnHeaderFormat: 'ddd', displayEventEnd: true, eventLimit: 3 },
				week: { columnHeaderFormat: 'ddd DD', titleRangeSeparator: ' \u2013 ' },
				day: { columnHeaderFormat: 'dddd' },
			},
			selectable: true,
			events: <?php echo json_encode(array_merge($calendar));?>,
			

			eventClick:  function(event, jsEvent, view) {
			   $('#calendarmodal').modal('show');
			    if(event.status=='event'){
					$('.modal').find('#name').html(''); 
					$('.modal').find('#appointments').html('');
					$('.modal').find('#time').html(''); 
					
					$('.modal').find('#title').html('Title : <br>' + event.title + '<br><br>');
					$('.modal').find('#description').html('Description : <br>' + event.description+ '<br><br>');
					$('.modal').find('#percentage').html('Discount : <br>' + event.percentage+ '% <br><br>');
					$('.modal').find('#services').html('Services : <br>' + event.services+ ' <br><br>');
					$('.modal').find('#starts1').html('Start : <br>' +$.fullCalendar.moment(event.start).format('YYYY/MM/DD')+ '<br><br>');
					$('.modal').find('#ends1').html('End : <br>' +$.fullCalendar.moment(event.end).format('YYYY/MM/DD')+ '<br><br>');
			   } else {
					 $('.modal').find('#name').html('Patient Name : <br>' + event.title + '<br><br>'); 
					 $('.modal').find('#appointments').html('Appointment Date : <br>' +$.fullCalendar.moment(event.start).format('YYYY/MM/DD')+ '<br><br>');
					 $('.modal').find('#time').html('Appointment Time : <br>' + event.time + '<br><br>'); 
					 
					 
					 $('.modal').find('#title').html('');
					 $('.modal').find('#description').html('');
					 $('.modal').find('#starts1').html('');
					 $('.modal').find('#ends1').html('');
					 $('.modal').find('#services').html('');
					 $('.modal').find('#percentage').html('');
			   }
        }, eventRender: function(info,cell) {
			if(info.count ==1){
				$('.fc-day[data-date="'+$.fullCalendar.moment(info.start).format()+'"]').css('background', "red");
			}
		  }
		});
		
	});

  </script>
    <?php
		$now = date('Y-m-d');
		$daily_report = $mysqli->query("SELECT COUNT(*) as total 
								from is_appointments  WHERE DATE(date_added) = '$now'
							");
		$dailyres = array();
		while($daily = $daily_report->fetch_object()){ 
			 $dailyres[] = array("name" => "Appointment",
								 "y" => $daily->total
							);
		}
		
		$weekly_report = $mysqli->query("select t.d,total , DAY   from 
									( select 'Saturday' as d union all select 'Sunday' 
									union all select 'Monday' union all select 'Tuesday' 
									union all select 'Wednesday' union all select 'Thursday' 
									union all select 'Friday' )t 
									left join ( SELECT DAYNAME(a.date_added) AS DAY, 
									 COUNT(*) as total FROM `is_appointments` a 
									WHERE a.date_added >= DATE(NOW()) - INTERVAL 7 DAY GROUP BY DAY )t1 on t.d=t1.day");
		$weeklyres = array();
		while($weekly = $weekly_report->fetch_object()){ 
			 $weeklyres[] = array("name" => $weekly->d,
								   "y" => $weekly->total
							);
		}
	
  	
		$approvedr	= $mysqli->query("
			SELECT SUM(IF(month = 'Jan', total, 0)) AS 'Jan', 
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
			COUNT(*) as total FROM is_appointments 
			WHERE date_added <= NOW() and date_added >= Date_add(Now(),interval - 12 month) and status = 0 
			GROUP BY DATE_FORMAT(date_added, '%m-%Y')) as sub
		");
		$approw    = $approvedr->fetch_assoc();

			foreach($approw as $val => $res){
					$month[]  =  $val;
					$value1[] =  $res;
			}
  
	    $approvedc	= $mysqli->query("
			SELECT SUM(IF(month = 'Jan', total, 0)) AS 'Jan', 
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
			COUNT(*) as total FROM is_appointments 
			WHERE date_added <= NOW() and date_added >= Date_add(Now(),interval - 12 month) and status = 3 
			GROUP BY DATE_FORMAT(date_added, '%m-%Y')) as sub
		");
		$canrow    = $approvedc->fetch_assoc();

			foreach($canrow as $val1 => $res1){
					$value2[] =  $res1;
			}
  
		$approvedd	= $mysqli->query("
			SELECT SUM(IF(month = 'Jan', total, 0)) AS 'Jan', 
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
			COUNT(*) as total FROM is_appointments 
			WHERE date_added <= NOW() and date_added >= Date_add(Now(),interval - 12 month) and status = 1 
			GROUP BY DATE_FORMAT(date_added, '%m-%Y')) as sub
		");
		$decrow    = $approvedd->fetch_assoc();

			foreach($decrow as $val2 => $res2){
					$value3[] =  $res2;
			}
  
       $approvedone	= $mysqli->query("
			SELECT SUM(IF(month = 'Jan', total, 0)) AS 'Jan', 
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
			COUNT(*) as total FROM is_appointments 
			WHERE date_added <= NOW() and date_added >= Date_add(Now(),interval - 12 month) and status = 2 
			GROUP BY DATE_FORMAT(date_added, '%m-%Y')) as sub
		");
		$donerow    = $approvedone->fetch_assoc();

			foreach($donerow as $val3 => $res3){
					$value4[] =  $res3;
			}
      
	  
	  $patients_records	= $mysqli->query("
			SELECT SUM(IF(month = 'Jan', total, 0)) AS 'Jan', 
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
			COUNT(*) as total FROM is_patients 
			WHERE date_added <= NOW() and date_added >= Date_add(Now(),interval - 12 month) 
			GROUP BY DATE_FORMAT(date_added, '%m-%Y')) as sub
		");
		$pa_res    = $patients_records->fetch_assoc();

			foreach($pa_res as $valp => $resp){
					$monthp[]  =  $valp;
					$valuep[] =  $resp;
			}
  
  
  ?>
    <script>
	// DAILY
	Highcharts.chart('container-daily', {
		chart: {
			type: 'column'
		},
		title: {
			align: 'center',
			text: 'Daily  Report'
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
				text: 'Total Appointment'
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
			text: 'Weekly  Report'
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
				text: 'Total Appointment'
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
	Highcharts.chart('container-1', {
		chart: {
			type: 'column'
		},
		title: {
			text: 'Appointments Status Chart'
		},
		subtitle: {
			text: 'Source: ' + 'DATABASE'

		},
		xAxis: {
			categories: <?php echo json_encode($month);?>
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Data'
			}
		},
		plotOptions: {
			line: {
				dataLabels: {
					enabled: true
				},
			}
		},
		plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
		},
		series: [{
			name: 'Pending',
			 data: <?php echo json_encode($value1,JSON_NUMERIC_CHECK);?>

		},{
			name: 'Done',
			 data: <?php echo json_encode($value4,JSON_NUMERIC_CHECK);?>

		},{
			name: 'Declined',
			 data: <?php echo json_encode($value2,JSON_NUMERIC_CHECK);?>

		},{
			name: 'Approved',
			 data: <?php echo json_encode($value3,JSON_NUMERIC_CHECK);?>

		}]
	});

 </script>
   <script>
	Highcharts.chart('container-2', {
		chart: {
			type: 'column'
		},
		title: {
			text: 'Patients Monitoring'
		},
		subtitle: {
			text: 'Source: ' + 'DATABASE'

		},
		xAxis: {
			categories: <?php echo json_encode($monthp);?>
		},
		yAxis: {
			min: 0,
			title: {
				text: 'Data'
			}
		},
		plotOptions: {
			line: {
				dataLabels: {
					enabled: true
				},
			}
		},
		plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
		},
		series: [{
			name: 'Pending',
			 data: <?php echo json_encode($valuep,JSON_NUMERIC_CHECK);?>

		}]
	});

 </script>
 <script>
var link = 'http://localhost/healthpoint/';

 $('#date_appointment').on('change', function() {
	 var doc_id =  $("#doctor_id").val();
				$.ajax({
				   type: "POST",
				   url: link + 'controller/user-appointments.php',
				   data : {
							 'date'        : this.value , 
							 'doctor_id'   : doc_id, 
							 'check-date': 'check',
						
					},
				   success: function(data)
				   {
						if(data == 'yes'){
							$("#process").show();
							$("#not-available").hide();
						} else {
							$("#not-available").show();
							$("#process").hide();
						}
				   }
			   });	
	});
	$('#time-appointments').on('change', function() {
				var doc_id =  $("#doctor_id").val();
				var date = $('#date_appointment').val();
				$.ajax({
				   type: "POST",
				   url: link + 'controller/user-appointments.php',
				   data : {
							 'time'      : this.value , 
							 'date'      : date ,
							  'doctor_id': doc_id, 
							 'check-time': 'check',
						
					},
				   success: function(data)
				   {
						if(data == 'yes'){
							$("#process").show();
							$("#not-available").hide();
						} else {
							$("#not-available").show();
							$("#process").hide();
						}
				   }
			   });	
	});
 </script>
 <script>
	$('.orderqoutes').on('shown.bs.modal', function() {
	  $('.summernote').summernote({
		  height: 200,
		  focus: true
		});
	})
	 $('#summernote1').summernote({
		  height: 400,
		  focus: true
	});
	$('#summernote2').summernote({
		  height: 400,
		  focus: true
	});
	$('#summernote3').summernote({
		  height: 400,
		  focus: true
	});
	</script>
	<script>
	$(document).ready(function() {
            $('#table_id').DataTable({

                dom: 'Bfrtip',
                responsive: true,
                pageLength: 25,
                // lengthMenu: [0, 5, 10, 20, 50, 100, 200, 500],

                buttons: [
                     'csv', 'excel', 'pdf', 'print'
                ]

            });
        });
	</script>
  <script type="text/javascript">
        function PrintElem(elem) {
            Popup($(elem).html());
        }

        function Popup(data) {
            var myWindow = window.open('', 'my div', 'height=400,width=600');
            myWindow.document.write('<html><head><title>my div</title>');
            /*optional stylesheet*/ //myWindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
            myWindow.document.write('</head><body >');
            myWindow.document.write(data);
            myWindow.document.write('</body></html>');
            myWindow.document.close(); // necessary for IE >= 10

            myWindow.onload=function(){ // necessary if the div contain images

                myWindow.focus(); // necessary for IE >= 10
                myWindow.print();
                myWindow.close();
            };
        }
    </script>
  	<div class="modal" id="calendarmodal" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Calendar Details</h5>
              
              </div>
              <div class="modal-body">
											
						 <div id="name"></div>
						 <div id="appointments"></div>
						 <div id="time"></div>
						 <div id="title"></div>
						 <div id="description"></div>
						 <div id="services"></div>
						 <div id="percentage"></div>
						 <div id="starts1"></div>
						 <div id="ends1"></div>
					
											
              </div>
			   <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" id="closecalendar" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
		
  </body>
  
  <!-- END: Body-->
</html>