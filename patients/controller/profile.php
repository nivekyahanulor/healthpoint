<?php
include('../controller/database.php');

$user = $_SESSION['id'];

$account   = $mysqli->query("SELECT * from is_patients where patient_id ='$user' ");



if(isset($_POST['update-profile'])){
	
	
	$firstname   = $_POST['firstname'];
	$lastname	 = $_POST['lastname'];
	$contact	 = $_POST['contact'];
	$username	 = $_POST['username'];
	$password	 = $_POST['password'];
	$email	     = $_POST['email'];
	$name        = $firstname .' '. $lastname;
	$mysqli->query("UPDATE 
					is_patients set 
					firstname='$firstname' ,
					lastname='$lastname' ,
					contact='$contact' ,
					username='$username' ,
					password='$password',
					email='$email'
					where patient_id='$user'");
		
	$mysqli->query("INSERT INTO is_logs		(name,logs,patient_id) 
								VALUES ('$name','Update Profile','$user ')");		
	 echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Profile Data Successfully Updated",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "profile";
							});
							});
			</script>';
		
	
}

if(isset($_POST['process-payment-method'])){
	
		
	$gcash_name   		  = $_POST['gcash_name'];
	$gcash_number	      = $_POST['gcash_number'];
	$bank_name			  = $_POST['bank_name'];
	$bank_account_name	  = $_POST['bank_account_name'];
	$bank_account_number  = $_POST['bank_account_number'];
	
	$mysqli->query("UPDATE 
					is_customer set 
					gcash_name='$gcash_name' ,
					gcash_number='$gcash_number' ,
					bank_name='$bank_name' ,
					bank_account_name='$bank_account_name' ,
					bank_account_number='$bank_account_number'
					where customer_id='$user'");
		
		
	 echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Payment method Data Successfully Updated",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "profile";
							});
							});
			</script>';
		
	
}