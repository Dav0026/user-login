<?php

namespace Controllers;

class UserController extends Controller
{
public function __construct()
{

}
public function users()
{

 return include 'View/user/profile.php';
}
}