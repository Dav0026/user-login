<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

//require_once '../../Model/DB.php';
//require_once '../../Model/Users.php';
//include_once 'Controllers/registrationController.php';
//$conn=new DB;
//$users=$conn->query('SELECT * FROM users ');
//$name = $_POST['name'];
//$surname = $_POST['surname'];
//$email = $_POST['email'];
//$password = $_POST['password'];
//$hashed_password=password_hash($password, PASSWORD_DEFAULT);
//$phone_number = $_POST['phone_number'];
//$userModel=new Users();



//if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['name'])) {
// throw new Exception('uncorrected name');
//}

//if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['surname'])) {
//throw new Exception('uncorrected surname ');
//}

//if (!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*)(?=\S*\d)\S*$/", $_POST['password'])) {
//throw  new Exception('uncorrected password');
//}

//if ($_POST['password'] !== $_POST['submitPassword']) {
//throw new Exception('password not verify');
//}
//$mail=$userModel->getByEmail($email)->fetch_assoc();

//$mail=$conn->query("select email from users where email = '$email'")->fetch_assoc();//old version
//if (!empty($mail)){
//    throw new Exception('mail used');
//}

//if (!preg_match('/^\+[0-9]{1,2}-[0-9]{3}-[0-9]{7}$/',$_POST["phoneNumber"])){
//throw new Exception('uncorrected phone numbber');
//}

//$sql="INSERT INTO users (name,surname, email,password,phone_number)
//                VALUES ('$name','$surname','$email','$hashed_password','$phone_number')";
//$result=$conn->query($sql);

//include_once "logined.php";
//var_dump($hashed_password);
//var_dump($_POST['email']);
//var_dump(  $mail);


//             if (preg_match('/^\+[0-9]{1,2}-[0-9]{3}-[0-9]{7}$/',$_POST["phoneNumber"])){