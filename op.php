<?php
require_once "connection.php";


$obj = new Database("localhost", "student", "root", "");


$data = $obj->display('studata');

echo "<pre>";
print_r($data);
echo "</pre>";




// try
// {
//     $host="localhost";
//     $dbname="student";
//     $dbuser="root"; 
//     $dbpass="";  

//     $conn = new PDO("mysql:host=$host;dbname=$dbname",$dbuser,$dbpass);
//     // "mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass


//     $query="select * from studata";
//     $result=$conn->query($query);


//     while ($data= $result->fetch(PDO::FETCH_ASSOC)) {
//         echo "<pre>";
//         print_r($data);
//         echo "</pre>";
//     }

// }
// catch (PDOException $e)
// {
//     echo "Error : " . $e->getMessage() . "<br/>";
//         die();
// }
