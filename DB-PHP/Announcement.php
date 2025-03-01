<?php

require "connect.php";
$pdo= Database::letsconnect();

$sql = "select * from post WHERE ContentType = 'Announcement'"; 
$data = Database::GetAllData($pdo, $sql);
echo json_encode($data);


?>

