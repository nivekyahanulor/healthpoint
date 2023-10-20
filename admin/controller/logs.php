<?php
include('../controller/database.php');
error_reporting(0);

$user = $_GET['data'];

$is_logs = $mysqli->query("SELECT * from is_logs");
