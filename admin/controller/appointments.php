<?php
include('../controller/database.php');

$aname  = $_SESSION['name'];

if($_GET['data'] == 'pending'){
		$status = 0;
}
else if($_GET['data'] == 'approved'){
		$status = 1;
}
else if($_GET['data'] == 'done'){
		$status = 2;
}
else if($_GET['data'] == 'declined'){
		$status = 3;
}
else if($_GET['data'] == 'missed'){
		$status = 4;
}

$is_appointments = $mysqli->query("SELECT a.*, b.firstname as p_fname , b.lastname as p_lastname , c.firstname as d_fname , c.lastname as d_lname from is_appointments a
								   LEFT JOIN is_patients b on b.patient_id  = a.patient_id
								   LEFT JOIN is_doctors c on c.doctor_id   = a.doctors_id 
								   where  a.status = '$status'
									");


if(isset($_POST['process'])){
	
	$patients_id    = $_POST['patients_id'];
	$doctor_id      = $_POST['doctor_id'];
	$a_date 		= $_POST['a_date'];
	$a_time         = $_POST['a_time'];
	
	$mysqli->query("INSERT INTO is_appointments		(patient_id,doctors_id,appointment_time,appointment_date,status) 
								VALUES ('$patients_id','$doctor_id','$a_time','$a_date',0)");
	$mysqli->query("INSERT INTO is_logs		(name,logs) 
								VALUES ('$aname','Add New Appointment')");			
		     echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Appointment Successfully Added",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "appointments?data=pending";
							});
							});
			</script>';
		
	
	
}
if(isset($_POST['process-approval'])){
	
	$appointment_id      = $_POST['appointment_id'];
	
	$mysqli->query("UPDATE is_appointments set status = 1 where appointment_id = '$appointment_id'");
	
	$mysqli->query("INSERT INTO is_logs		(name,logs) 
								VALUES ('$aname','Approved Appointment')");			
		     echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Appointment Successfully Approved",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "appointments?data=pending";
							});
							});
			</script>';
		
	
	
}
if(isset($_POST['process-declined'])){
	
	$appointment_id      = $_POST['appointment_id'];
	
	$mysqli->query("UPDATE is_appointments set status = 3 where appointment_id = '$appointment_id'");
	$mysqli->query("INSERT INTO is_logs		(name,logs) 
								VALUES ('$aname','Declined Appointment')");			
		     echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Appointment Successfully Declined",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "appointments?data=pending";
							});
							});
			</script>';
		
	
	
}
if(isset($_POST['process-missed'])){
	
	$appointment_id      = $_POST['appointment_id'];
	$reason     		 = $_POST['reason'];
	
	$mysqli->query("UPDATE is_appointments set status = 4 , reason='$reason' where appointment_id = '$appointment_id'");
	$mysqli->query("INSERT INTO is_logs		(name,logs) 
								VALUES ('$aname','Process Missed Appointment')");			
		     echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Appointment Successfully Declined",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "appointments?data=pending";
							});
							});
			</script>';
		
	
	
}
