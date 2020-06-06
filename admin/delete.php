<?php
session_start();
require("../required/connectdb.php");

if(isset($_SESSION['username'])===false){
	header("location: index.php");
	die();
}


require("../required/connectdb.php");

if($_GET){
	$id = $_GET['Deleteid'];


	$query = "DELETE FROM tblporducts WHERE productId='$id' ";

	if(mysqli_query($connect,$query)){
		header("location: view.php");
	}

}






















?>