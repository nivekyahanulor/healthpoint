<?php
include('../controller/database.php');


$settings1 = $mysqli->query("SELECT * from is_settings");

$aname  = $_SESSION['name'];


if(isset($_POST['update-settings'])){
	
	$systemname    = $_POST['systemname'];
	$email         = $_POST['email'];
	$facebook      = $_POST['facebook'];
	$contact       = $_POST['contact'];
	$address       = $_POST['address'];
	$terms         = htmlspecialchars($_POST['terms']);
	$about         = htmlspecialchars($_POST['about']);
	$faq           = htmlspecialchars($_POST['faq']);

	// $letter  	    = $_POST['image1'];

	// if ($letter == "") {
		// $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		// $image_name = addslashes($_FILES['image']['name']);
		// $image_size = getimagesize($_FILES['image']['tmp_name']);
		// move_uploaded_file($_FILES["image"]["tmp_name"], "assets/logo/" . $_FILES["image"]["name"]);
		// $location   =  $_FILES["image"]["name"];
	// } else {
		// if ($_FILES["image"]["name"] == "") {
			// $location = $letter;
		// } else {
			// $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
			// $image_name = addslashes($_FILES['image']['name']);
			// $image_size = getimagesize($_FILES['image']['tmp_name']);
			// move_uploaded_file($_FILES["image"]["tmp_name"], "assets/logo/" . $_FILES["image"]["name"]);
			// $location   =  $_FILES["image"]["name"];
		// }
	// }

	$mysqli->query("UPDATE  is_settings SET 
						title ='$systemname' ,
						contact ='$contact' ,
						address ='$address' , 
						facebook = '$facebook' , 
						mission='$terms',
						vision='$faq',
						email='$email',
						about='$about'
					");
	// echo "UPDATE  is_settings SET 
						// title ='$systemname' ,
						// contact ='$contact' ,
						// address ='$address' , 
						// facebook = '$facebook' , 
						// mission='$terms',
						// vision='$faq',
						// email='$email',
						// about='$about'
					// ";				
	$mysqli->query("INSERT INTO is_logs		(name,logs) 
								VALUES ('$aname','Update System Settings')");								
									
	echo '  <script>
				
								window.location = "settings.php";
						
			</script>';
	
}