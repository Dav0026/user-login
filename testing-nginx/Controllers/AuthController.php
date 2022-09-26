<?php

namespace Controllers;

use Controllers\Controller;
use Exception;
use Model\Users;

class AuthController extends Controller
{
    public function __construct()
    {



    }

    public function postLogin()
    {
    $username=$_POST["username"];
    $password=$_POST["password"];

        if ($username and $password !== null) {
        $userModel=new Users();
        $user=$userModel->getByEmail($username)->fetch_assoc();
            if (password_verify($password, $user['password']))
    {
        $_SESSION["username"]=$username;
        header('Location: /users/profile');

    } else
    {
        $_SESSION["error"]='invalid login or password';
        header('Location: / ');
    }
}
    }

    public function register()
    {
        return include 'View/login/registration.php';
    }

    /**
     * @throws Exception
     */
    public function postRegister()
    {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $phone_number = $_POST['phone_number'];
        $userModel = new Users();

        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            throw new Exception('uncorrected name');
        }

        if (!preg_match("/^[a-zA-Z-' ]*$/", $surname)) {
            throw new Exception('uncorrected surname ');
        }

        if (!preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*)(?=\S*\d)\S*$/", $password)) {
            throw  new Exception('uncorrected password');
        }

        if ($_POST['password'] !== $_POST['submitPassword']) {
            throw new Exception('password not verify');
        }
        $mail = $userModel->getByEmail($email)->fetch_assoc();

        if (!empty($mail)) {
            throw new Exception('mail used');
        }
        //if (!preg_match('/^\+[0-9]{1,2}-[0-9]{3}-[0-9]{7}$/',$_POST["phoneNumber"])){
        //throw new Exception('uncorrected phone number');
        //}
        $user = new Users();
        $user->createUser($name, $surname, $email, $hashed_password, $phone_number);

        header('Location: /users/profile');

    }

    public function logAuth()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /View/home.php');
    }
}