<?php

require "connect.php";
$pdo= Database::letsconnect();

$sql = "select * from geninfo"; 
$data = Database::GetAllData($pdo, $sql);
echo json_encode($data);


?>