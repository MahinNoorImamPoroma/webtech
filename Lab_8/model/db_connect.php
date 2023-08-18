  
<?php

function db_connect(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my_data";


    $connect = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $connect;
}

?>