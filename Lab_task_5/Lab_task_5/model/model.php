<?php 

require_once 'db_connect.php';



function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `products` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProduct($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `products` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}



function addProduct($data){
	$conn = db_conn();
    $selectQuery = "INSERT into  products (name, buying_price, selling_price, display)
VALUES (:name, :buying_price, :selling_price, :display )";

    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':buying_price' => $data['buying_price'],
        	':selling_price' => $data['selling_price'],
        	':display' => $data['display']
        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
        $conn = null;
        return false;
    }
    
    $conn = null;
    return true;
}

function updateProduct($id, $data){

    echo $id;
    echo $data['name']; 
    echo $data['buying_price']; 
    echo $data['selling_price']; 
    echo $data['display']; 


    $conn = db_conn();
    $selectQuery = "UPDATE products set Name = ?, buying_price = ?, selling_price = ?, display = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['buying_price'], $data['selling_price'],$data['display'],  $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProducts($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `products` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

