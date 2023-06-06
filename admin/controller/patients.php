<?php
include('../controller/database.php');
error_reporting(0);

$user = $_GET['data'];

$is_patients = $mysqli->query("SELECT * from is_patients");
$is_patients_profile = $mysqli->query("SELECT * from is_patients where patient_id = '$user'");

$is_patients_history = $mysqli->query("SELECT a.*, b.firstname as p_fname , b.lastname as p_lastname , c.firstname as d_fname , c.lastname as d_lname from is_appointments a
								   LEFT JOIN is_patients b on b.patient_id  = a.patient_id
								   LEFT JOIN is_doctors c on c.doctor_id   = a.doctors_id 
								   where a.patient_id = '$user'
									");

if(isset($_POST['process'])){
	
		$firstname    = $_POST['firstname'];
		$lastname     = $_POST['lastname'];
		$email        = $_POST['email'];
		$contact 	  = $_POST['mobile'];
		$password     = $_POST['password'];
		$username     = $_POST['username'];
		$name         = $firstname .' '.$lastname;
		
		$mysqli->query("INSERT INTO is_patients		(firstname,lastname,email,contact,password,username,is_active) 
								VALUES ('$firstname','$lastname','$email','$contact','$password','$username','1')");
								
		 echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Patient Data Successfully Registered",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "patients";
							});
							});
			</script>';
		
}


if(isset($_POST['update-profile'])){
	
	
	$firstname   = $_POST['firstname'];
	$lastname	 = $_POST['lastname'];
	$contact	 = $_POST['contact'];
	$username	 = $_POST['username'];
	$password	 = $_POST['password'];
	$email	     = $_POST['email'];
	
	$mysqli->query("UPDATE 
					is_patients set 
					firstname='$firstname' ,
					lastname='$lastname' ,
					contact='$contact' ,
					username='$username' ,
					password='$password',
					email='$email'
					where patient_id='$user'");
		
		
	 echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Profile Data Successfully Updated",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "patient-profile?data='.$user.'";
							});
							});
			</script>';
		
	
}

if(isset($_POST['update-profile_1'])){
	
	
	$bp              = $_POST['bp'];
	$glucose	     = $_POST['glucose'];
	$heartrate	     = $_POST['heartrate'];
	$cholesterol	 = $_POST['cholesterol'];
	$symptoms	     = $_POST['symptoms'];
	$i_company	     = $_POST['i_company'];
	$i_number	     = $_POST['i_number'];
	$i_amount	     = $_POST['i_amount'];
	$i_expiry	     = $_POST['i_expiry'];
	
	$mysqli->query("UPDATE 
					is_patients set 
					bp='$bp' ,
					glucose='$glucose' ,
					heartrate='$heartrate' ,
					cholesterol='$cholesterol' ,
					symptoms='$symptoms',
					i_company='$i_company',
					i_number='$i_number',
					i_amount='$i_amount',
					i_expiry='$i_expiry'
					where patient_id='$user'");
		
		
	 echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Profile Data Successfully Updated",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "patient-profile?data='.$user.'";
							});
							});
			</script>';
		
	
}
