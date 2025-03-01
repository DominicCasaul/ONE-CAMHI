<?php

require "connect.php";
$pdo= Database::letsconnect();

$sql = "select * from news"; 
$data = Database::GetAllData($pdo, $sql);
echo json_encode($data);
?>
