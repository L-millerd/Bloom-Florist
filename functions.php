<?php

include("connect.php");


class Flowers
{

    private $host = '165.232.136.63';
    private $username  = 'myadmin';
    private $password = 'RainbowKat7149!';
    private $dbName = 'bloom';
    private $port = 3306;

    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbName);
        
        if (mysqli_connect_error()){
            trigger_error('Error in DB' . mysqli_connect_error()); //displays error with string
        } else{
            return $this->conn;
        }
    }

    public function viewFlowers()
    {
        //$sql = 'CALL all_flowers()';
        $sql = "SELECT * FROM flowers"; 
        $result = $this->conn->query($sql);


        if ($result->num_rows > 0){
            $data = array();
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }

            return $data; 
            echo ("hello");
        }

    }

    public function viewCategory($id)
    {
        $sql = 'CALL flowers_by_occasion('. $id . ')';
        //$sql = "SELECT * FROM flowers WHERE flowers.occasion = 1"; 
        $result = $this->conn->query($sql);


        if ($result->num_rows > 0){
            $data = array();
            while ($row = $result->fetch_assoc()){
                $data[] = $row;
            }

            return $data; 
        }

    }

}