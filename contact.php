<?php
include("includes/header.php");

?>



<div id ="bgcontact"></div>




<div id="contactusform">

  <div class="container">
    <h2 class="designHeading">CONTACT US</h2>
    <div class="row">

          <form action="contact.html" method="post">
            <input class="designInput inputSpecial" type="text" name="fname" placeholder="Enter your Name" >
            <input class="designInput inputSpecial" type="email" name="email" placeholder="Enter your Email"><br><br>
            <input class="designInput inputSpecial1" type="number" name="number" placeholder="Enter your Number"><br><br>
            <textarea rows="8" cols="140" placeholder="Enter your Queries"></textarea><br><br>
            <input class="designInput inputSpecial1" type="text" name="address" placeholder="Enter your Address"><br><br>
            <input class="designInput inputSpecial1" type="text" name="postalcode" placeholder="Enter your Postalcode"><br><br>
            <button type="button" name="submit" class="btn btn-lg bg-success align_center">Submit</button>
          </form>
    </div>
  </div>
  
</div>




<?php
include("includes/footer.php");

?>







</body>
</html>