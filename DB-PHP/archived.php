<?php

require "connect.php";
$pdo= Database::letsconnect();

$transaction = $_POST["transaction"];


// echo $transaction;
switch ($transaction) {
    case "LOAD_DATA":
        LoadData();
        break;
    case "APPROVE":
        APPROVE();
        break;
    case "DISAPPROVE":
        DISAPPROVE();
        break;
    case "GET_ODISAPPROVENE_INFO":
        GET_ONE_INFO();
        break;
    case "GET_NEW_ID":
        NEW_ID();
        break;
    default:
        echo "Can't find Transaction";
        # code...
        break;
        
}

function LoadData(){
    $sql = "select * from post WHERE Status = 'Disapproved' Order by ContentType Asc"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function APPROVE(){
    
    $ContentID = $_POST["ContentID"];
    $sql = "UPDATE post SET  Status = 'Approved' WHERE ContentID = '$ContentID';";
    $data = Database::ManageRecord($GLOBALS['pdo'], $sql);
               
}

function DISAPPROVE(){
    
    $ContentID = $_POST["ContentID"];
    $sql = "UPDATE post SET  Status = 'Disapproved' WHERE ContentID = '$ContentID';";
    $data = Database::ManageRecord($GLOBALS['pdo'], $sql);
               
}


?>

