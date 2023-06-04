<?php

$total_p = $mysqli->query("SELECT count(*)total_patients from c_trial_patient_record");
while($val_p = $total_p->fetch_object()){ 
		$total_patients =  $val_p->total_patients;
}
