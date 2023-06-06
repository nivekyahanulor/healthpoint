<?php
include('../controller/database.php');


$is_users = $mysqli->query("SELECT * from is_users");



if(isset($_POST['process'])){
	
	$firstname = $_POST['firstname'];
	$lastname  = $_POST['lastname'];
	$username  = $_POST['username'];
	$password  = md5($_POST['password']);
	
	$mysqli->query("INSERT INTO is_users 
						(
							firstname ,
							lastname ,
							username ,
							password 
						
						) 
						VALUES 
						(
							'$firstname',
							'$lastname',
							'$username',
							'$password'
						)
					");
					
					
  	       echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Administrator Data Successfully Added",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "admins";
							});
							});
			</script>';
		
	
}


if(isset($_POST['process-update'])){
	
	$firstname = $_POST['firstname'];
	$lastname  = $_POST['lastname'];
	$username  = $_POST['username'];
	$id  	   = $_POST['id'];
	
	$mysqli->query("UPDATE  is_users 
						SET
							firstname = '$firstname' ,
							lastname  = '$lastname',
							username  = '$username' 
						WHERE
						user_id = '$id'
						
					");
					
					
  	       echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Administrator Data Successfully Updated",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "admins";
							});
							});
			</script>';
		
	
}

if(isset($_POST['process-delete'])){
	
	
	$id  	   = $_POST['id'];
	
	$mysqli->query("DELETE FROM  is_users 
						WHERE
						user_id = '$id'
						
					");
					
					
  	       echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Administrator Data Successfully Deleted",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "admins";
							});
							});
			</script>';
		
	
}

