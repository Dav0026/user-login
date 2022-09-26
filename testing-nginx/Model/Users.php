<?php
namespace Model;
use DB;

class Users
{
    private  $db;
//    private DB $db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getByEmail(string $email)
    {
        return $this->db->query((" SELECT * FROM users WHERE email ='$email'"));
    }
    function createUser($name,$surname,$email,$hashed_password,$phone_number)
    {
        $sql="INSERT INTO users (name,surname, email,password,phone_number)
                VALUES ('$name','$surname','$email','$hashed_password','$phone_number')";
        $this->db->query($sql);
    }

}