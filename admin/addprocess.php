<?php
session_start();
require("../required/connectdb.php");

if(isset($_SESSION['username'])===false){
	header("location: index.php");
	die();
}

require("../required/connectdb.php");


if(isset($_POST['submit'])){
	$pname = $_POST['pname'];
	$pprice = $_POST['pprice'];
	$pcode = $_POST['pCode'];
	$stock = $_POST['pstock'];
	$pdiscount = $_POST['pdiscount'];
	$size = $_POST['psize'];
	$pdetail = $_POST['pdetail'];
	$pimage = $_FILES['pimage']['name'];


	$query = "INSERT INTO tblporducts(productName,productPrice,productCode,productInStock,
	productDiscount,productSizes,productDetails,pimage)
	VALUES('$pname','$pprice','$pcode','$stock','$pdiscount','$size','$pdetail','$pimage')";
	echo $query;
	if(mysqli_query($connect,$query)){
		move_uploaded_file($_FILES['pimage']['tmp_name'], "../assets/upload/".$pimage);
		header("location: welcome.php");
	}
	else{
		echo "Not inserted";
	}

}













?>