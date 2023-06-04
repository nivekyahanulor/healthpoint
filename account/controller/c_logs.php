<?php

$trial_id    = $_SESSION['id'];

$c_logs = $mysqli->query("SELECT * from c_logs where account_id ='$trial_id' ");

