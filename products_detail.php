<?php
include("includes/header.php");

?>

<div class="product_detail_box">
  <div class="container">
    <h2  style="text-align: center; color: firebrick; border-bottom: 3px solid firebrick; margin-bottom: 50px;">

       PRODUCTS DETAILS

    </h2>
    <div class="row">


<?php

require("required/connectdb.php");
if($_GET){
  $id = $_GET['id'];

$query = "SELECT * FROM tblporducts WHERE productId='$id' ";

$result = mysqli_query($connect,$query);

$total = mysqli_num_rows($result);

if($total>0){

  while($row = mysqli_fetch_assoc($result)){
    $name = $row['productName'];
    $detail = $row['productDetails'];
    $image = $row['pimage'];
    $price = $row['productPrice'];
    $size = $row['productSizes'];
    $stock = $row['productInStock'];
?>
      <div class="col-md-4">
        <img src="assets/upload/<?php echo $image; ?>" alt="product" style="width: 300px; height: 400px">
      </div>
      <div class="col-md-8">
        <h2><?php echo $name; ?></h2>
        <p><?php echo $detail; ?></p><br>
        Rating: <img src="assets/images/rating.png"><br>
        <span>Price USD: <?php echo $price; ?>$</span><br><br>
        <span>Availability: <?php echo $stock; ?></span><br><br>
        <span>Condition: New</span><br><br>
        <span>Size:  <?php echo $size; ?></span><br>
        <button type="button" name="addCart" class="btn btn-success">Add to Cart</button>
      </div>
<?php }}} ?>


    </div>
  </div>
</div>


<?php
include("includes/footer.php");

?>






