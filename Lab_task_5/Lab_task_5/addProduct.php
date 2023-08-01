<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
        include "nav.php";
     ?>
   
   

 <form action="controller/createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="id_name" name="name"><br>
  <label for="Buying price">Buying price:</label><br>
  <input type="text" id="id_buying_price" name="name_buying_price"><br>
  <label for="Selling price">Selling price:</label><br>
  <input type="text" id="id_selling_price" name="name_selling_price"><br>
  <label for="Display"> Display</label>
  <input type="checkbox" id="id_display" name="name_display" value="Display"><br>                   
  <input type="submit" name = "submit_create_product" value="submit">
  <input type="reset"> 
</form> 
</body>
</html>
