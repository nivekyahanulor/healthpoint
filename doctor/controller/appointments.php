<?php
include('../controller/database.php');

$user = $_SESSION['id'];

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
								   where c.doctor_id  = '$user' and a.status = '$status'");
								   
								


if(isset($_POST['process-approval'])){
	
	$appointment_id      = $_POST['appointment_id'];
	
	$mysqli->query("UPDATE is_appointments set status = 1 where appointment_id = '$appointment_id'");
				
		     echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Appointment Successfully Approved",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "appointments";
							});
							});
			</script>';
		
	
	
}
