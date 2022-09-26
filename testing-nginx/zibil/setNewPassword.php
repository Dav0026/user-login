<?php

require_once '../Model/DB.php';
require_once '../Model/Users.php';

$username = $_POST['email'];
$password=$_POST['password'];
$submitPassword=$_POST['submitPassword'];
$hashed_password=password_hash($password, PASSWORD_DEFAULT);

if ($password!==$submitPassword){
    throw new Exception('uncorrected password');

}else {
//    $password ;
    var_dump('work');
}
//UPDATE users
//SET password=$hashed_password;
//WHERE user='Mexico';