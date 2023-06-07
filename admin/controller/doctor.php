<?php
include('../controller/database.php');

error_reporting(0);
$doctors_id = $_GET['data'];

$is_doctors = $mysqli->query("SELECT * from is_doctors");

$is_appointments = $mysqli->query("SELECT a.*, b.firstname as p_fname , b.lastname as p_lastname , c.firstname as d_fname , c.lastname as d_lname from is_appointments a
								   LEFT JOIN is_patients b on b.patient_id  = a.patient_id
								   LEFT JOIN is_doctors c on c.doctor_id   = a.doctors_id 
								   where a.doctors_id  = '$doctors_id'
									");

if(isset($_POST['process'])){
	
		$firstname    = $_POST['firstname'];
		$lastname     = $_POST['lastname'];
		$email        = $_POST['email'];
		$contact 	  = $_POST['mobile'];
		$password     = $_POST['password'];
		$username     = $_POST['username'];
		$speciality   = $_POST['speciality'];
		
		$mysqli->query("INSERT INTO is_doctors		(firstname,lastname,email,contact,password,username,speciality,is_active) 
								VALUES ('$firstname','$lastname','$email','$contact','$password','$username','$speciality','1')");
								
								
								
		 echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Doctor Data Successfully Registered",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "doctors";
							});
							});
			</script>';
		
}
