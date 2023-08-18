<?php  
require_once '../model/model.php';


if(isset($_POST['update_profile'])){

    $username= $_POST['username'];
    $password= $_POST['password'];
    $email= $_POST['email'];
    $gender= $_POST['gender'];
    $dob1=$_POST['dob2'];
    $dob3=$_POST['dob1'];
    $dob2=$_POST['dob3'];
    $Are_You_a_Travel_Lover=$_POST['travel_lover'];

    $user =['username'=> $username, 'password'=> $password, 'email'=> $email,'gender'=> $gender,
    'dob1'=> $dob1 ,'dob3'=> $dob3,'dob2'=> $dob2, 'travel_lover'=> $Are_You_a_Travel_Lover];

  if (update_profile($_POST['id'],$user)) {
  	echo 'Successfully updated!!';

    session_start();
    session_destroy();

    session_start();
    unset($_SESSION['user']);
    $_SESSION['user'] = $user;
    $_SESSION['flag'] = 'true';

    echo $_SESSION['user']['username'];

    header('Location: ../view/View_profile.php');
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>