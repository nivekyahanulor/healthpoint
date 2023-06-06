<?php
include('../controller/database.php');

if($_GET['data'] == 'pending'){
		$status = 0;
}
else if($_GET['data'] == 'approved'){
		$status = 1;
}
else if($_GET['data'] == 'done'){
		$status = 2;
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
				
		     echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Appointment Successfully Added",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "appointments";
							});
							});
			</script>';
		
	
	
}
