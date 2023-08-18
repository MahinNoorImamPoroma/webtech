<?php
$name = $_POST['name'];
$email = $_POST['email'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];

echo $name;
echo $gender;

setcookie('name', $name, time() + 3600, '/');
setcookie('email', $email, time() + 3600, '/');
setcookie('user_name', $user_name, time() + 3600, '/');