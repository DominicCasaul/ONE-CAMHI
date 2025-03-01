<?php
require "connect.php";
$pdo= Database::letsconnect();

$sql = "select * from admin"; 
$data = Database::GetAllData($pdo, $sql);
echo json_encode($data);

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

