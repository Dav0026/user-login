<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'Controllers/Controller.php';
require_once 'Controllers/AuthController.php';
require_once 'Controllers/UserController.php';
require_once 'Model/Users.php';
require_once 'Model/DB.php';

$authControllers = new \Controllers\AuthController();
$userControllers=new \Controllers\UserController();

$rout =$_SERVER['REQUEST_URI'];
//var_dump($_SERVER);
var_dump($rout);
switch ($rout) {
    case '/post-login':
        $authControllers->postLogin();
        break;
    case '/register':
        $authControllers->register();
        break;
    case '/post-register':
        $authControllers->postRegister();
        break;
    case '/users/profile';
        $userControllers->users();
        break;
    case '/logout';
        $authControllers->logAuth();
        break;


        //        case '/users/home';
//        $authControllers->home();
//        break;
}


