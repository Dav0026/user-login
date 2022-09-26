<?php
require_once '../Model/DB.php';
require_once '../Model/Users.php';

$conn = include 'conn.php';
$users=$conn->query('SELECT * FROM users ');
$name = $_POST['name'];
//$surname = $_POST['surname'];
$username = $_POST['email'];
//$phone_number = $_POST['phone_number'];


//$userModel=new Users();
//$user=$userModel->getByEmail($username)->fetch_assoc();
// include_once 'newPassword.php';
//if ( $username=$user){
//    $to = $username;
//    $subject = include_once 'newPassword.php';
//    $headers = "From: webmaster@example.com" . "\r\n" .
//        "CC: somebodyelse@example.com";
//
//    mail($subject,$headers);
//
//}else {
//    var_dump('wrong email');
//}

