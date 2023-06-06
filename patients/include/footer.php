

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
	
	
    <script>
	$(".alt-pagination").DataTable({pagingType:"full_numbers"});
	</script>
	<script>
	  (function(b,i,t,C,O,I,N) {
		window.addEventListener('load',function() {
		  if(b.getElementById(C))return;
		  I=b.createElement(i),N=b.getElementsByTagName(i)[0];
		  I.src=t;I.id=C;N.parentNode.insertBefore(I, N);
		},false)
	  })(document,'script','https://widgets.bitcoin.com/widget.js','btcwdgt');
	</script>
	<script type="text/javascript">
					function minmax(value, min, max) 
					{
						if(parseInt(value) < min || isNaN(parseInt(value))) 
							return min; 
						else if(parseInt(value) > max) 
							return max; 
						else return value;
					}
	</script>
	<script>
	function CopyToClipboard(containerid) {
		  if (document.selection) {
			var range = document.body.createTextRange();
			range.moveToElementText(document.getElementById(containerid));
			range.select().createTextRange();
			document.execCommand("copy");
		  } else if (window.getSelection) {
			var range = document.createRange();
			range.selectNode(document.getElementById(containerid));
			window.getSelection().addRange(range);
			document.execCommand("copy");
				alert("URL Copied! Share to your friends now.")
		  }
		}
	</script>
	  <?php 
  
		$calendar = array();
		$appointments = array();
	
			
			$is_appointments = $mysqli->query("SELECT a.*, b.firstname as p_fname , b.lastname as p_lastname , c.firstname as d_fname , c.lastname as d_lname from is_appointments a
								   LEFT JOIN is_patients b on b.patient_id  = a.patient_id
								   LEFT JOIN is_doctors c on c.doctor_id   = a.doctors_id 
								   where c.doctor_id  = '$user'");
								   
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