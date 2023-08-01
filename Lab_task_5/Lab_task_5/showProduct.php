<?php  
require_once 'controller/productInfo.php';

$product = fetchProduct($_GET['id']);


    include "nav.php";


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Buying price</th>
		<th>Selling price</th>

	</tr>
	<tr>
		<td><a href="showProduct.php?id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></td>
		<td><?php echo $product['buying_price'] ?></td>
		<td><?php echo $product['selling_price'] ?></td>
		
	</tr>

</table>


</body>
</html>