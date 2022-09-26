<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//
//session_start();
//require_once '../../Model/DB.php';
//require_once '../../Model/Users.php';
//$username=$_POST["username"];
//$password=$_POST["password"];
//$remember=$_POST['remember'];

//    if ($username and $password !== null) {
//        $userModel=new Users();
//        $user=$userModel->getByEmail($username)->fetch_assoc();

//////////////////////////////////////////////////////////////////////////////////
//    $sqlUser= (" SELECT * FROM users WHERE email ='$username'");
//    $db=new DB();
//    $user= $db->query($sqlUser)->fetch_assoc();
//////////////////////////////////////////////////////////////////////////////////
//    if (password_verify($password, $user['password']))
//    {
//        $_SESSION["username"]=$username;
//        header('Location:/View/login/logined.php ');
//    } else
//    {
//        $_SESSION["error"]='invalid login or password';
//        header('Location: / ');
//    }
//}