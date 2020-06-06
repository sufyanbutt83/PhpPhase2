<?php
session_start();
require("../required/connectdb.php");

if(isset($_SESSION['username'])===false){
      header("location: index.php");
      die();
}

?>
<!DOCTYPE html>
<html>
<head>
      <title>Friends Cafe</title>
      <link rel="icon" type="image/png" href="../assets/images/logo.png">
  <link rel="stylesheet" type="text/css" href="../assets/css/index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<header>
      <div class="container container-fluid">
            <div class="row">
      <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
          <div class="col-md-4">
               <a href="index.php"><img id="designImage" src="../assets/images/lo.png"></a>
           </div>
          <div class="col-md-8">
          <button type="button" class="navbar-toggler  bg-light" data-toggle="collapse" data-target="#nav">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="nav">
           
          <ul id="desingUl" class="navbar-nav">
              <li class="nav-item"><a href="../index.php">Home</a></li>
              <li class="nav-item"><a href="../aboutus.php">About Us</a></li>
              <li class="nav-item"><a href="../products.php">Products</a></li>
              <li class="nav-item"><a href="../products_detail.php">Products Details</a></li>
              <li class="nav-item"><a href="../contact.php">Contact Us</a></li>
          </ul>
          </div>
          </div>
      </nav>
            </div>
      </div>
</header>


<div id="dashboard" style="text-align: center;">
  <h2>Welcome Admin: <?php echo $_SESSION['username']; ?></h2>
  <br>
  <ul class="adminlist">
      <li><a href="addpage.php">Add Page</a></li>
      <li><a href="view.php">View Page</a></li>
      <form action="logout.php" method="post">
      <button type="submit" class="btn btn-success btn-lg" 
      style="display:block; position: absolute; margin-left: 20%; margin-top: 1%;" name="logout">Logout</button>
    </form>
  </ul>
<br><br>

<div id="pages">

      <form action="addprocess.php" method="post" enctype="multipart/form-data">
            <input type="text" class="designInput inputSpecial" name="pname" placeholder="Enter product name" required><br><br>
            <input type="text" class="designInput inputSpecial" name="pprice" placeholder="Enter product price"><br><br>
            <input type="text" class="designInput inputSpecial" name="pCode" placeholder="Enter product code"><br><br>
            <input type="text" class="designInput inputSpecial" name="pdiscount" placeholder="Enter product Discount"><br><br>
            <input type="text" class="designInput inputSpecial" name="pdetail" placeholder="Enter product Detail"><br><br>
            <input type="text" class="designInput inputSpecial" name="psize" placeholder="Enter product Size"><br><br>
            <input type="text" class="designInput inputSpecial" name="pstock" placeholder="Enter product Stock"><br><br>

            <input type="file" name="pimage" ><br><br>

            <input type="submit" class="btn btn-success" name="submit">
      </form>
</div>

 
</div><!--end of dashboard-->










<?php

include("../includes/footer.php");

?>