

<?php
session_start();

if(isset($_POST['logout'])){
	session_destroy();
	unset($_SESSION["username"]);
	header("location: index.php");
	
	die();
	
}


?>
