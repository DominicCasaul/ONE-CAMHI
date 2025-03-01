<?php

require "connect.php";
$pdo = Database::letsconnect();


if (isset($_POST['ContentID'])) {
    $ContentID = $_POST['ContentID'];
    Database::WriteLog($ContentID);
}

if (isset($_POST['Title'])) {
    $Title = $_POST['Title'];
    Database::WriteLog($Title);
}

if (isset($_POST['Content'])) {
    $Content = $_POST['Content'];
    Database::WriteLog($Content);
}

if (isset($_POST['ContentType'])) {
    $ContentType = $_POST['ContentType'];
    Database::WriteLog($ContentType);
}

if (isset($_POST['PublicationDate'])) {
    $PublicationDate = $_POST['PublicationDate'];
    Database::WriteLog($PublicationDate);
}



// $ContentID = "124";
// $Title = "124";
// $Content = "124";
// $ContentType = "124";
// $PublicationDate = 124;



switch ($task) {
    case "GET_STUDENTLIST":
        GetData($pdo);
        break;
    case "SAVE RECORD":
        $sql = "insert into dbonecamhi(ContentID,Title,Content,ContentType,PublicationDate)" .
            "values('$ContentID','$Title','$Content','$ContentType','$PublicationDate')";
        $data = Database::ManageRecord($pdo, $sql);
        GetData($pdo);
        break;
    case "UPDATE RECORD":
        $sql = "update dbonecamhi " .
            " set FirstName = '$ContentID'" .
            " , LastName = '$Title'" .
            " , Section = '$Content'" .
            " , Age = '$ContentType'" .
            " , Bday = '$PublicationDate'" .
            " , Gender = '$Gender'" .
            " where  ContentID = '$ContentID'" ;
            $data = Database::ManageRecord($pdo, $sql);
        GetData($pdo); 
        break;    

        case "DELETE RECORD":
            $sql = "delete from  dbonecamhi " .
                " where  StudentID = '$ContentID'" ;
                $data = Database::ManageRecord($pdo, $sql);
            GetData($pdo);     
}


function GetData($pdo)
{
    $sql = "select * from dbonecamhi";
    $data = Database::GetAllData($pdo, $sql);
    echo json_encode($data);
}




