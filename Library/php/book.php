<?php

require "connect.php";
$pdo= Database::letsconnect();

$sql = "select * from tbbook_query "; 
$data = Database::GetAllData($pdo, $sql);
echo json_encode($data);
?>
