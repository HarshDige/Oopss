<?php
require_once "./Database.php";
try {
  $dbhost = 'localhost';
  $dbname = 'student';
  $dbuser = 'root';
  $dbpass = '';
  $conn = new PDO(
    "mysql:host=$dbhost;dbname=$dbname",
    $dbuser,
    $dbpass
  );

  $query = "SELECT * FROM `studata` ";
  $res = $conn->query($query);


  while ($data = $res->fetch(PDO::FETCH_ASSOC)) {
    echo "<pre>";
    print_r($data);
  }
} catch (PDOException $e) {
  echo "Error : " . $e->getMessage() . "<br/>";
  die();
}
