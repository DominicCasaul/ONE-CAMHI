<?php

require "connect.php";
$pdo= Database::letsconnect();

$sql = "select * from post WHERE ContentType = 'News'"; 
$data = Database::GetAllData($pdo, $sql);
echo json_encode($data);


?>

