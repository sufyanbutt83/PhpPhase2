





<?php

$connect = mysqli_connect("localhost","root","","webdb");

if(!$connect){
	echo "<script>alert('The database cannot be connected')</script>";
}

?>