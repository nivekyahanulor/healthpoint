<?php
include('../controller/database.php');

error_reporting(0);
$doctors_id = $_GET['data'];
$aname  = $_SESSION['name'];

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
		$monday       = $_POST['monday'];
		$tuesday      = $_POST['tuesday'];
		$wednesday    = $_POST['wednesday'];
		$thursday     = $_POST['thursday'];
		$friday       = $_POST['friday'];
		$saturday     = $_POST['saturday'];
		$sunday       = $_POST['sunday'];
		$times        = $_POST['times'];
		$timee        = $_POST['timee'];
		
		$mysqli->query("INSERT INTO is_doctors		(firstname,
													 lastname,
													 email,
													 contact,
													 password,
													 username,
													 speciality,
													 monday,
													 tuesday,
													 wednesday,
													 thursday,
													 friday,
													 saturday,
													 sunday,
													 times,
													 timee,
													 is_active) 
										VALUES      ('$firstname',
													 '$lastname',
													 '$email',
													 '$contact',
													 '$password',
													 '$username',
													 '$speciality',
													 '$monday',
													 '$tuesday',
													 '$wednesday',
													 '$thursday',
													 '$friday',
													 '$saturday',
													 '$sunday',
													 '$times',
													 '$timee',
													 '1')");
								
		$mysqli->query("INSERT INTO is_logs		(name,logs) 
								VALUES ('$aname','Add New Doctor')");								
								
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
