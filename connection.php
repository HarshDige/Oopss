<?php

class Database
{
    private $conn;
    private $host;
    private $dbname;
    private $dbuser;
    private $pass;

    private function __construct($h, $db, $user, $password)
    {
        $this->host = $h;
        $this->dbname = $db;
        $this->dbuser = $user;
        $this->pass = $password;
    }

    private function datacon()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->dbuser, $this->pass);
        } catch (PDOException $e) {
            echo $e;
        }
    }




    function display($tablename)
    {

        $this->datacon();
        $query = "select * from `$tablename`";
        $result = $this->conn->query($query);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public function insert($query)
    {
        $this->datacon();
        // $query="insert ";
        $result1 = $this->conn->query($query);
        if($result1)
        {
            echo "Success";
        }
        else
        {
            echo "Query Failed...";
             die();
        }   
    }
}

// $dbhost = 'localhost';
// $dbname = 'student';
// $dbuser = 'root';
// $dbpass = '';

// $database = new DATABASE($dbhost, $dbname, $dbuser, $dbpass);
// $data =   $database->getdata('studata');

// echo "<pre>";
// foreach ($data as $key => $value) {
//     // echo $value['sid'];

//     // print_r($key);
//     echo "<pre>";
//     print_r($value);
// }
// print_r($data);
