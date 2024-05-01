<?php

$db_name = "mysql:host=localhost;dbname=student";
$user = "root";
$pass = "";

$conn = new PDO($db_name, $user, $pass);


$sql = $conn->query("SELECT * FROM stud");

// while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";

//     echo $row['sid'] . " " . $row['sname'];
// }

$data = $sql->fetchAll(PDO::FETCH_ASSOC);

if (count($data)) {
    foreach ($data as $row) {
        echo $row['sid'] . " " . $row['sname'];
    }
}

// echo "<pre>";
// print_r($data);
// echo "</pre>";
