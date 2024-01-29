<?php
include('../controller/database.php');

$aname  = $_SESSION['name'];

$is_speciality = $mysqli->query("SELECT * from is_speciality");



if(isset($_POST['process'])){
	
	$speciality  = $_POST['speciality'];
	
	$mysqli->query("INSERT INTO is_speciality 
						(
							speciality 
						) 
						VALUES 
						(
							'$speciality'
						)
					");
					
	$mysqli->query("INSERT INTO is_logs		(name,logs) 
								VALUES ('$aname','Added New Speciality')");						
  	       echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Speciality Data Successfully Added",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "speciality";
							});
							});
			</script>';
		
	
}


if(isset($_POST['process-update'])){
	
	
	$speciality  = $_POST['speciality'];
	$id  	     = $_POST['id'];
	
	$mysqli->query("UPDATE  is_speciality 
						SET
							speciality = '$speciality' 
						WHERE
						id = '$id'
						
					");
					
	$mysqli->query("INSERT INTO is_logs		(name,logs) 
								VALUES ('$aname','Update Speciality Details')");					
  	       echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Speciality Data Successfully Updated",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "speciality";
							});
							});
			</script>';
		
	
}

if(isset($_POST['process-delete'])){
	
	
	$id  	   = $_POST['id'];
	
	$mysqli->query("DELETE FROM  is_speciality 
						WHERE
						id = '$id'
						
					");
					
	$mysqli->query("INSERT INTO is_logs		(name,logs) 
								VALUES ('$aname','Delete Speciality Details')");					
  	       echo '<script>
			  $(document).ready(function() {
					Swal.fire({
							title: "Success! ",
							text: "Speciality Data Successfully Deleted",
							icon: "success",
							type: "success"
							}).then(function(){
								window.location = "speciality";
							});
							});
			</script>';
		
	
}