<?php

require "connect.php";
$pdo = Database::letsconnect();


if (isset($_POST['StudentID'])) {
    $StudentID = $_POST['StudentID'];
    Database::WriteLog($StudentID);
}

if (isset($_POST['FirstName'])) {
    $FirstName = $_POST['FirstName'];
    Database::WriteLog($FirstName);
}

if (isset($_POST['LastName'])) {
    $LastName = $_POST['LastName'];
    Database::WriteLog($LastName);
}

if (isset($_POST['Section'])) {
    $Section = $_POST['Section'];
    Database::WriteLog($Section);
}

if (isset($_POST['Age'])) {
    $Age = $_POST['Age'];
    Database::WriteLog($Age);
}

if (isset($_POST['Bday'])) {
    $Bday = $_POST['Bday'];
    Database::WriteLog($Bday);
}

if (isset($_POST['Gender'])) {
    $Gender = $_POST['Gender'];
    Database::WriteLog($Gender);
}

if (isset($_POST['task'])) {
    $task = $_POST['task'];
    Database::WriteLog($task);
}

// $StudentID = "124";
// $FirstName = "124";
// $LastName = "124";
// $Section = "124";
// $Age = 124;
// $Bday = "12/4/2012";
// $Gender = "Male123";
// $task = "UPDATE_RECORD";


switch ($task) {
    case "GET_STUDENTLIST":
        GetData($pdo);
        break;
    case "SAVE RECORD":
        $sql = "insert into dbonecamhi(StudentID,FirstName,LastName,Section,Age,Bday,Gender)" .
            "values('$StudentID','$FirstName','$LastName','$Section','$Age','$Bday', '$Gender')";
        $data = Database::ManageRecord($pdo, $sql);
        GetData($pdo);
        break;
    case "UPDATE RECORD":
        $sql = "update dbonecamhi " .
            " set FirstName = '$FirstName'" .
            " , LastName = '$LastName'" .
            " , Section = '$Section'" .
            " , Age = '$Age'" .
            " , Bday = '$Bday'" .
            " , Gender = '$Gender'" .
            " where  StudentID = '$StudentID'" ;
            $data = Database::ManageRecord($pdo, $sql);
        GetData($pdo); 
        break;    

        case "DELETE RECORD":
            $sql = "delete from  dbonecamhi " .
                " where  StudentID = '$StudentID'" ;
                $data = Database::ManageRecord($pdo, $sql);
            GetData($pdo);     
}


function GetData($pdo)
{
    $sql = "select * from dbonecamhi";
    $data = Database::GetAllData($pdo, $sql);
    echo json_encode($data);
}




