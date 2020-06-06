<?php
include("includes/header.php");

?>

<div id="backgroundImage">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 id="HeadingDesign" class="display-1"><i>Friend's Cafe</i></h2>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p id="HeadingPara" style="color: white; text-align: left;">
           Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown 
           printer took a galley of type and scrambled it to make a type specimen book. It has survived not onlyfive centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
           It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
      </div>
    </div>
  </div>

  <div id="loginBox">
    <div style="margin-top: 50px;">
      <h2 class="display-4">Log In</h2><br>
      <form action="index.php" method="post">
        <input class="designInput" type="text" name="fname" placeholder="Enter your name" ><br><br>
        <input class="designInput" type="password" name="pass" placeholder="Enter your password"><br><br>
        <button type="submit" name="submit" class="btn btn-success">Login</button>
      </form>
    </div>
  </div>



</div>



<div id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/1st.png" alt="Los Angeles">
      </div>
      <div class="carousel-item">
        <img src="assets/images/2nd.png" alt="Los Angeles">
      </div>
      <div class="carousel-item">
        <img src="assets/images/3rd.png" alt="Los Angeles">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><!--end of slider-->



<div class="productsDesign">
  <div class="container">
    <h2  style="text-align: center; color: firebrick; border-bottom: 3px solid firebrick;">OUR PRODUCTS</h2>
    <div class="row">
<?php    
require("required/connectdb.php");



$query = "SELECT * FROM tblporducts ORDER BY productId ASC LIMIT 0,3";

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