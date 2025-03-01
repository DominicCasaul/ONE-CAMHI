<?php


require "connect.php";
$pdo= Database::letsconnect();

$transaction = $_POST["transaction"];


// echo $transaction;
switch ($transaction) {
    case "COUNT_ORGANIZATION":
        CountOrganization();
        break;
    case "COUNT_ANNOUNCEMENT_APPROVED":
        CountAnnouncementApproved();
        break;
    case "COUNT_ANNOUNCEMENT_DISAPPROVED":
        CountAnnouncementDisapproved();
        break;
    case "COUNT_NEWS_APPROVED":
        CountNewsApproved();
        break;
    case "COUNT_NEWS_DISAPPROVED":
        CountNewsDisapproved();
        break;
    case "COUNT_NEWS_PER_ORGANIZATION":
        CountNewsPerOrganization();
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

function CountOrganization(){
    $sql = "SELECT  COUNT(DISTINCT Organization) AS Total FROM admin;"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}


function CountAnnouncementApproved(){
    $sql = "SELECT COUNT(*) AS Total FROM post WHERE ContentType = 'Announcement' AND Status = 'Approved';"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}


function CountAnnouncementDisapproved(){
    $sql = "SELECT COUNT(*) AS Total FROM post WHERE ContentType = 'Announcement' AND Status = 'Disapproved';"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function CountNewsApproved(){
    $sql = "SELECT COUNT(*) AS Total FROM post WHERE ContentType = 'News' AND Status = 'Approved';"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function CountNewsDisapproved(){
    $sql = "SELECT COUNT(*) AS Total FROM post WHERE ContentType = 'News' AND Status = 'Disapproved';"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function CountNewsPerOrganization(){
    $sql = "SELECT adminId, Organization, COUNT(*) AS Total FROM vpostadmin WHERE Status = 'Approved' GROUP BY adminId;"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
  
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
