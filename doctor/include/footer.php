

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
    var link = 'http://localhost/healthpoint/';
	$('#doctor_id').on('change', function() {
		
	    var id = this.value;
		$.ajax({
			   type: "POST",
			   dataType: "json",
			   url:link+'/controller/get-doc-time.php',
			   data : {
					 'id'         : id, 
				},
			   success: function(data)
			   {
				
				 
				 if(data.monday == 0){
						var monday = 1;
				 } else {
						var monday = "";
				 } if(data.tuesday == 0){
						var tuesday = 2;
				 } else {
						var tuesday = "";
				 } if(data.wednesday == 0){
						var wednesday = 3;
				 } else {
						var wednesday = "";
				 } if(data.thursday == 0){
						var thursday = 4;
				 } else {
						var thursday = "";
				 } if(data.friday == 0){
						var friday = 5;
				 } else {
						var friday = "";
				 }if(data.saturday == 0){
						var saturday = 6;
				 } else {
						var saturday = "";
				 }if(data.sunday == 0){
						var sunday = 0;
				 } else {
						var sunday = "";
				 }
				 
				 if(data.monday == 1){
						var monday1 = "Monday,";
				 } else {
						var monday1 = "";
				 } if(data.tuesday == 0){
						var tuesday1 = "Tuesday,";
				 } else {
						var tuesday1 = "";
				 } if(data.wednesday == 0){
						var wednesday1 = "Wednesday,";
				 } else {
						var wednesday1 = "";
				 } if(data.thursday1 == 0){
						var thursday1 = "Thursday,";
				 } else {
						var thursday1 = "";
				 } if(data.friday == 0){
						var friday1 = "Friday,";
				 } else {
						var friday1 = "";
				 }if(data.saturday == 0){
						var saturday1 = "Saturday,";
				 } else {
						var saturday1 = "";
				 }if(data.sunday == 0){
						var sunday1 = "Sunday,";
				 } else {
						var sunday1 = "";
				 }
				 
				  $("#dc-res").show(); 
			   $("#dc-res").html("<br> <b> Doctor Schedule: </b> <br> Time : " + data.time +  "<br> Available Day : " + monday1 + tuesday1 + wednesday1 + thursday1 + friday1 + saturday1 + sunday1); 
				 const picker = document.getElementById('date_appointment');
					picker.addEventListener('input', function(e){
					  var day = new Date(this.value).getUTCDay();
					  if([monday,tuesday,wednesday,thursday,friday,saturday,sunday].includes(day)){
						e.preventDefault();
						this.value = '';
						alert('This Day is not allowed ! Doctor is unavailable!');
					  }
				});
			   }
		 });
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
	$(".alt-pagination").DataTable({pagingType:"full_numbers"});
	</script>
	


	  <?php 
  
		$calendar = array();
		$appointments = array();
	
			
			$is_appointments = $mysqli->query("SELECT a.*, b.firstname as p_fname , b.lastname as p_lastname , c.firstname as d_fname , c.lastname as d_lname from is_appointments a
								   LEFT JOIN is_patients b on b.patient_id  = a.patient_id
								   LEFT JOIN is_doctors c on c.doctor_id   = a.doctors_id 
								   where a.patient_id  = '$user'");
								   
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