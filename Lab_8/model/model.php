<?php

require_once 'db_connect.php';


function getUserInfo($email){
    $connect = db_connect();
    $selectquery = "SELECT * FROM `my_table` where email = ?";

    try {
        $stmt = $connect->prepare($selectquery);
        $stmt->execute([$email]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;                  
}

function saveUserInfo ($email){



	$connect = db_connect();
  //  $selectQuery ="INSERT INTO `my_table` ( `username`, `password`, `email`, `gender`, `dob1`, `dob2`, `dob3`, `travel_lover`)
   //  VALUES (:username, :password, :email, :gender, :dob1, :dob2, :dob3, :Are_You_a_Travel_Lover );";

$selectQuery = "INSERT into  my_table (username, password, email, gender, dob1, dob2, dob3, travel_lover)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    try{
        $stmt = $connect->prepare($selectQuery);

       
        $stmt->execute(
            [
                $email['username'], $email['password'], $email['email'], $email['gender'],
                $email['dob1'], $email['dob2'], $email['dob3'], $email['travel_lover']
            ]
        );

            return true;
    }catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
}

function update_profile($id, $email){

    echo $id;
    echo $email['username']; 
    echo $email['password']; 
    echo $email['email']; 
    echo $email['gender']; 
    echo $email['dob2']; 
    echo $email['dob1']; 
    echo $email['dob3']; 
    echo $email['travel_lover']; 
   


    $conn = db_connect();
    $selectQuery = "UPDATE my_table SET username = ?, password = ?, email = ?, gender = ?, dob2 = ?, dob1 = ?, dob3 = ?, travel_lover = ?  where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$email['username'], $email['password'], $email['email'],$email['gender'], 
            $email['dob2'],$email['dob1'],$email['dob3'],$email['travel_lover'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
        return false;
    }
    
    $conn = null;
    return true;
}





















 ?>