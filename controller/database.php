<?php
date_default_timezone_set('Asia/Manila'); 

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');


// define('DB_USERNAME', 'u582317762_admission');
// define('DB_PASSWORD', '@Programmer2013');
// define('DB_NAME', 'u582317762_admission');

define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_compendium');

/* Attempt to connect to MySQL database */
$mysqli = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


