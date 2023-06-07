<?php
include('database.php');

if(isset($_POST['check-date'])){
	
	$date 	   =  $_POST['date'];
	$doctor_id =  $_POST['doctor_id'];
	$tbl_appointments = $mysqli->query("SELECT * FROM is_appointments where appointment_date = '$date' and status!=3 and doctors_id = '$doctor_id'");
	$count  = $tbl_appointments->num_rows;
	
	if($count != 35){
		echo 'yes';
	} else {
		echo 'no';
	}
}

if(isset($_POST['check-time'])){
	
	$date =  $_POST['date'];
	$time =  $_POST['time'];
	$doctor_id =  $_POST['doctor_id'];
	$tbl_appointments = $mysqli->query("SELECT * FROM is_appointments where appointment_date = '$date' and appointment_time = '$time'  and status!=3 and doctors_id = '$doctor_id'");
	$count  = $tbl_appointments->num_rows;
	
	if($count == 0){
		echo 'yes';
	} else {
		echo 'no';
	}
}

