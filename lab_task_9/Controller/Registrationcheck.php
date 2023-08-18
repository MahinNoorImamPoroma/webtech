<?php
require_once '../model/model.php';
	session_start();
	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$email= $_POST['email'];
		$gender= $_POST['gender'];
		$dob1=$_POST['dob1'];
		$dob2=$_POST['dob2'];
		$dob3=$_POST['dob3'];
		$Are_You_a_Travel_Lover=$_POST['travel_lover'];


		if($username != '' && $password != '' && $email != ''){
			$user =['username'=> $username, 'password'=> $password, 'email'=> $email,'gender'=> $gender,'dob1'=> $dob1 ,'dob2'=> $dob2,'dob3'=> $dob3, 'travel_lover'=> $Are_You_a_Travel_Lover];
			//echo $user['username'];


			
      
			$myobj = new stdclass();
			$myobj ->name =  $username;
			$myobj ->password = $password;
			$myobj->email = $email;
			$myobj->dob1 = $dob1;
			$myobj->dob2 = $dob2;
			$myobj->dob3 = $dob3;
			$myobj->Are_You_a_Travel_Lover = $Are_You_a_Travel_Lover;

			$myjson = json_encode($myobj);
			file_put_contents('myfile.json', $myjson);
			//echo $myjson;

			$userInfo = getUserInfo($email);
			
			
	
	
	
			if ($userInfo==null) { 
				if(saveUserInfo ($user)){
					setcookie("cookie_value_email", $email, 2147483647, "/");

					//echo $_COOKIE["cookie_value_email"];

					header('location: ../view/Login.php');
				}
			}else{
				header('location: ../view/registration.php');
			}
			  
	
		}else{
			echo "null value found";
		}
	}else{
		echo "invalid request";
	}
?>