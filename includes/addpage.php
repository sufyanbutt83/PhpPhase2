<form action="welcome.php" method="post" enctype="multipart/form-data">
    		<input type="text" class="designInput inputSpecial" name="pname" placeholder="Enter product name"><br><br>
    		<input type="text" class="designInput inputSpecial" name="pprice" placeholder="Enter product price"><br><br>
    		<input type="text" class="designInput inputSpecial" name="pCode" placeholder="Enter product code"><br><br>
    		<input type="text" class="designInput inputSpecial" name="pdiscount" placeholder="Enter product Discount"><br><br>
    		<input type="text" class="designInput inputSpecial" name="pdiscount" placeholder="Enter product Detail"><br><br>

    		<span style="display: inline-block;"><h4>Product in Stock :</h4></span>
    		<input type="radio" name="stock" value="Y"> Yes
    		<input type="radio" name="stock" value="N"> No
    		<br><br>


    		<span style="display: inline-block;"><h4>Product Sizes : </h4></span>
    		<input type="checkbox" name="small" value="small"> Small
    		<input type="checkbox" name="mediam" value="mediam"> Mediam
    		<input type="checkbox" name="large" value="large"> Large
    		<br><br>

    		<input type="file" name="pimage" ><br><br>

    		<input type="submit" class="btn btn-success" name="submit" value="Add Record">


    	</form>