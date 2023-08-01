<?php  
require_once '../model/model.php';


if (isset($_POST['submit_create_product'])) {
	$data['name'] = $_POST['name'];
	$data['buying_price'] = $_POST['name_buying_price'];
	$data['selling_price'] = $_POST['name_selling_price'];


	if(isset($_POST['name_display'])){
		$data['display'] = 1;
	}else {
		$data['display'] = 0;
	}
   // $data['display'] = $_POST['name_display'];
	

	
  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>