<?php 

require_once '../model/model.php';

if (deleteproducts($_GET['id'])) {
    header('Location: ../showAllproducts.php');
}

 ?>