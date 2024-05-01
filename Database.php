<?php
    class DATABASE
    {
        private $conn;
        function __construct($dbhost, $dbname,    $dbuser, $dbpass)
        {
            try {
                $this->conn = new PDO(
                    "mysql:host=$dbhost;dbname=$dbname",
                    $dbuser,
                    $dbpass
                );
            } catch (\Throwable $th) {
                //throw $th;
            }
        }

        function getdata($tablename)
        {
            $query = "SELECT * FROM  `$tablename` ";
            $res = $this->conn->query($query);
            return $res->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>