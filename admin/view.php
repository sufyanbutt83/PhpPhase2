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

<div id="Viewpages">
  <table class="table table-bordered table-striped table-dark">
    <tr>
      <th>Product Id</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <th>Product Code</th>
      <th>Product In Stock</th>
      <th>Product Discount</th>
      <th>Product Size</th>
      <th>Product Detail</th>
      <th>Product Image</th>
      <th>Delete Record</th>
      <th>Edit Record</th>
    </tr>
<?php
require("../required/connectdb.php");

$query = "SELECT * FROM tblporducts";
$result = mysqli_query($connect,$query);

$total = mysqli_num_rows($result);

if($total>0){

  while($row = mysqli_fetch_assoc($result)){
    $id = $row['productId'];
    $name = $row['productName'];
    $price = $row['productPrice'];
    $code = $row['productCode'];
    $stock = $row['productInStock'];
    $discount = $row['productDiscount'];
    $size = $row['productSizes'];
    $detail = $row['productDetails'];
    $image = $row['pimage'];
?>

<tr>
  <td><?php echo $id; ?></td>
  <td><?php echo $name; ?></td>
  <td><?php echo $price; ?></td>
  <td><?php echo $code; ?></td>
  <td><?php echo $stock; ?></td>
  <td><?php echo $discount; ?></td>
  <td><?php echo $size; ?></td>
  <td><?php echo $detail; ?></td>
  <td><img src="../assets/upload/<?php echo $image; ?>" alt="image here" width="60px" height="60px" ></td>
  <td><a href="delete.php?Deleteid=<?php echo $id; ?>">Delete</a></td>
  <td><a href="update.php?Updateid=<?php echo $id; ?>">Update</a></td>
</tr>












<?php }} ?>





  </table>
</div><!--end of viewpage-->

 
</div><!--end of dashboard-->









<?php

include("../includes/footer.php");

?>