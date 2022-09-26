<?php
require_once 'Users.php';

class DB
{
//    private  $conn;
    private $conn;


    public function __construct()
    {
        $env=include '.env.php';
        $this->conn=new mysqli('localhost','homestead','secret','testing_nginx');
    }

    /**
     * @param string $sql
     * @return mysqli_result|bool
     */
    public function query (string $sql)
    {
        return $this->conn->query($sql);
    }

}