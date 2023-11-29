<?php
include('../controller/database.php');
error_reporting(0);

$user = $_SESSION['id'];
$is_logs = $mysqli->query("SELECT * from is_logs where doc_id='$user'");
