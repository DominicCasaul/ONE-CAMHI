<?php


require "connect.php";
$pdo= Database::letsconnect();

$transaction = $_POST["transaction"];


// echo $transaction;
switch ($transaction) {
    case "LOAD_DATA":
        LoadData();
        break;
    case "ADD_RECORD":
        AddRecord();
        break;
    case "DELETE_INFO":
        DELETE_INFO();
        break;
    case "GET_ONE_INFO":
        GET_ONE_INFO();
        break;
    case "GET_NEW_ID":
        NEW_ID();
        break;
    case "LOAD_DATA_FOR_MAIN_PAGE":
        ForMAinPage();
        break;
    default:
        echo "Can't find Transaction";
        # code...
        break;
        
}

function LoadData(){
    $sql = "select * from contact"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function AddRecord(){
    
    $ContactID = $_POST["ContactID"];
    $OfficeType = $_POST["OfficeType"];
    $ContactType = $_POST["ContactType"];
    $Contact = $_POST["Contact"];
    $ContactPerson = $_POST["ContactPerson"];
    $UpdateOrAdd = $_POST["UpdateOrAdd"];

    if($UpdateOrAdd == "Save"){
        $sql = "INSERT INTO contact(ContactID, OfficeType, ContactValue, ContactPerson, ContactType)
        values('$ContactID', '$OfficeType', '$Contact', '$ContactPerson', '$ContactType'); ";
        Database::ManageRecord($GLOBALS['pdo'], $sql);
    }elseif($UpdateOrAdd == "Update"){
        $sql = "UPDATE contact SET  OfficeType = '$OfficeType', ContactValue = '$Contact', ContactPerson ='$ContactPerson', ContactType ='$ContactType' WHERE ContactID = '$ContactID';";
        Database::ManageRecord($GLOBALS['pdo'], $sql);
    }
}

function DELETE_INFO(){
    $ContactID = $_POST["ContactID"];
    $sql = "DELETE FROM contact WHERE ContactID = '$ContactID';";
    Database::DeleteRecord($GLOBALS['pdo'], $sql);

}

function GET_ONE_INFO(){
    $ContactID = $_POST["ContactID"];
    $sql = "SELECT * FROM contact WHERE ContactID ='$ContactID';" ;
    $data = Database::GetOneData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function NEW_ID()
{
    Database::WriteLog(100);
    $sql = "SELECT * FROM contact order by ContactID desc";
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);

    if (isset($data[0])) {
        $s =  explode('-', $data[0]['ContactID']);
        $num = sprintf('%04d',  $s[1] + 1);
        $newID = "C-$num";
        echo $newID;
        return ($newID);
    } else {
        // $s =  explode('-', $data[0]['TeacherID']);
        // $num = sprintf('%04d',  $s[1] + 1);
        $newID = "C-0001";
        echo $newID;
        return ($newID);
    }

}

function ForMAinPage(){

    $sql = "select * from contact ORDER BY ContactType DESC"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

?>
