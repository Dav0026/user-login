<?php
require_once 'Users.php';

class DB
{
//    private  $conn;
    private $conn;


    public function __construct()
    {
        $env=include '.env.php';
        $this->conn=new mysqli('***ost','*****ad','********t','testing_nginx');
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
