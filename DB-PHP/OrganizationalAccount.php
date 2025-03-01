<?php
    
require "connect.php";
$pdo = Database::letsconnect();


$transaction = $_POST["transaction"];
$adminID = $_POST["adminID"];



switch ($transaction) {
    case "GET_DATA_ADMIN":
        GetAllAdmin();
        break;
    case "ADD_RECORD":
        NewRecord();
        break;
    case "DELETE_ADMIN":
        DeleteAdmin();
        break;
    case "GET_ONE_ADMIN":
        GetOneAdmin();
        break;
    case "GET_NEW_ID":
        NEW_ID();
        break;
    default:
        echo "kffjfjjfj";
        # code...
        break;
}

function GetAllAdmin(){
    

    $sql = "select * from admin;";
//   $sql = "INSERT INTO admin(AdminID, Username, SchoolDept, Email, LogInDate)  VALUES ('$admin','$username','$schooldept', '$email', '$logindate' );";
  
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);


}

function NewRecord(){
    $AdminID = $_POST["AdminIDOG"];
    $username = $_POST["username"];
    $schooldept = $_POST["schooldept"];
    $txtEmail = $_POST["txtEmail"];
    $NewOrUpdate = $_POST["NewOrUpdate"];


    if($NewOrUpdate == "Submit"){
        $sql = "INSERT INTO `admin`(`AdminID`, `Username`, `Organization`, `Password`) 
        VALUES ('$AdminID','$username','$schooldept','$txtEmail')";
        Database::ManageRecord($GLOBALS['pdo'], $sql);
    }elseif($NewOrUpdate == "Update"){
        $sql = "UPDATE `admin` SET `Username`='$username',`Organization`='$schooldept',
        `Password`='$txtEmail' WHERE AdminID = '$AdminID'";
        Database::ManageRecord($GLOBALS['pdo'], $sql);
    }


    // echo json_encode($data);
}

function DeleteAdmin(){
    $sql = "DELETE FROM admin WHERE adminID = '" . $GLOBALS['adminID'] . "';";
    $data = Database::DeleteRecord($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function GetOneAdmin(){
    $sql = "select * from admin where adminID ='" . $GLOBALS['adminID'] . "' ;";
    // $sql = "INSERT INTO admin(AdminID, Username, SchoolDept, Email, LogInDate)  VALUES ('$admin','$username','$schooldept', '$email', '$logindate' );";
  
    $data = Database::GetOneData($GLOBALS['pdo'], $sql);
    echo json_encode($data);

}

function NEW_ID()
{
    Database::WriteLog(100);
    $sql = "SELECT * FROM admin order by AdminID desc";
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);

    if (isset($data[0])) {
        $s =  explode('-', $data[0]['AdminID']);
        $num = sprintf('%04d',  $s[1] + 1);
        $newID = "A-$num";
        echo $newID;
        return ($newID);
    } else {
        // $s =  explode('-', $data[0]['TeacherID']);
        // $num = sprintf('%04d',  $s[1] + 1);
        $newID = "A-0001";
        echo $newID;
        return ($newID);
    }

}








    ?>