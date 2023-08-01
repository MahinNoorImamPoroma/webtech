<?php  
require_once '../model/model.php';




if (isset($_POST['updateProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buying_price'] = $_POST['name_buying_price'];
	$data['selling_price'] = $_POST['name_selling_price'];



	if(isset($_POST['name_display'])){
		$data['display'] = 1;
	}else {
		$data['display'] = 0;
	}

  if (updateProduct($_POST['id'],$data)) {
  	echo 'Successfully updated!!';
    echo  $_POST['id'];
    header('Location: ../showProduct.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>
