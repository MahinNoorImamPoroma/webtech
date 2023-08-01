<?php 

require_once 'controller/productInfo.php';
$product = fetchproduct($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateproduct.php" method="POST" enctype="multipart/form-data">
 
  <input value="<?php echo $_GET['id'] ?>"  type="hidden" id="productId" name="id">

  <label for="name">Name:</label><br>
  <input value="<?php echo $product['name'] ?>" type="text" id="id_name" name="name"><br>
  <label for="Buying price">Buying price:</label><br>
  <input value="<?php echo $product['buying_price'] ?>" type="text" id="id_buying_price" name="name_buying_price"><br>
  <label for="Selling price">Selling price:</label><br>
  <input value="<?php echo $product['selling_price'] ?>" type="text" id="id_selling_price" name="name_selling_price"><br> 
  <input type="checkbox" id="id_display" name="name_display" value="<?php echo $_GET['id'] ?>"> <br>                   
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 



</form> 

</body>
</html>
