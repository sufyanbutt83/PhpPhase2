<?php
include("includes/header.php");
?>

<div class="productsDesign">
  <div class="container">
    <h2  style="text-align: center; color: firebrick; border-bottom: 3px solid firebrick;">OUR PRODUCTS</h2>
    <div class="row">
<?php    
require("required/connectdb.php");



$query = "SELECT * FROM tblporducts";

$result = mysqli_query($connect,$query);

$total = mysqli_num_rows($result);

if($total>0){

  while($row = mysqli_fetch_assoc($result)){
    $id = $row['productId'];
    $name = $row['productName'];
    $detail = $row['productDetails'];
    $image = $row['pimage'];
?>

      <div class="col-md-4 desingproductBox">
        <a href="products_detail.php?id=<?php echo $id ?>">
          <img src="assets/upload/<?php echo $image; ?>" alt="product's image" title="Click for product detail">
        </a>
          <h3><?php echo $name; ?></h3>
          <p><?php echo $detail; ?></p>
      </div>

<?php }} ?>
</div>

  </div>
  
</div>





<?php
include("includes/footer.php");

?>