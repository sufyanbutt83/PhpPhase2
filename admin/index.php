<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/index.css">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body style="background-image: url('../assets/images/loginbg.jpg');">



<div id="adminloginBox">
    <div style="margin-top: 50px;">
      <h2 class="display-4">Admin</h2><br>
      <form action="index.php" method="post">
        <input class="designInput" type="text" name="user" placeholder="Enter your name" ><br><br>
        <input class="designInput" type="password" name="pass" placeholder="Enter your password"><br><br>
        <button type="submit" name="submit" class="btn btn-success">Login</button>
      </form>
    </div>
  </div>



<?php
require("../required/connectdb.php");

if(isset($_POST['submit'])){

	$name = $_POST['user'];
	$pass = $_POST['pass'];

	$_SESSION['username'] = $name;
	$_SESSION['password'] = $pass;


	$query = "SELECT * FROM admin WHERE username='$name' AND pass='$pass' ";

	$result = mysqli_query($connect,$query);

	$total = mysqli_num_rows($result);
    
    if($total==1){
    	header("location: welcome.php");
    }
    else{
    	echo "<script>alert('Wrong Username or Password')</script>";
    }



}




?>


</body>
</html>