<?php

require "connect.php";
$pdo= Database::letsconnect();

$transaction = $_POST["transaction"];


// echo $transaction;
switch ($transaction) {
    case "LOAD_DATA":
        LoadData();
        break;
    case "DELETE_INFO":
        DELETE_INFO();
        break;
    default:
        echo "Can't find Transaction";
        # code...
        break;
        
}

function LoadData(){
    $sql = "select * from post WHERE Status = 'Approved' Order by ContentType Asc"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function DELETE_INFO(){
    $ContentID = $_POST["ContentID"];
    $sql = "UPDATE post SET  Status = 'Disapproved' WHERE ContentID = '$ContentID';";
    $data = Database::ManageRecord($GLOBALS['pdo'], $sql);
    // $sql = "DELETE FROM post WHERE ContentID = '$ContentID';";
    // Database::DeleteRecord($GLOBALS['pdo'], $sql);

}



?>

