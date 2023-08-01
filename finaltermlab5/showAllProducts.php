<?php  
require_once 'controller/productInfo.php';

$products = fetchAllProducts();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Buying price</th>
			<th>Selling price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $i => $product): ?>
			<tr>

				<td><a href="showproduct.php?id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></td>
				<td><?php echo $product['buying_price'] ?></td>
				<td><?php echo $product['selling_price'] ?></td>			
				<td><a href="editproduct.php?id=<?php echo $product['id'] ?>">Edit</a>&nbsp<a href="controller/deleteproduct.php?id=<?php echo $product['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>