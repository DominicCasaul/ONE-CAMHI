<?php

require "connect.php";
$pdo= Database::letsconnect();

$sql = "select * from post Order by ContentType DEsc"; 
$data = Database::GetAllData($pdo, $sql);
echo json_encode($data);


?>

