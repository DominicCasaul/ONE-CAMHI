<?php

require "connect.php";
$pdo= Database::letsconnect();

$sql = "select * from dbonecamhi"; 
$data = Database::GetAllData($pdo, $sql);
echo json_encode($data);
?>
