<?php

require "database_php/connect.php";
$pdo= Database::letsconnect();

$transaction = $_POST["transaction"];




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
    default:
        echo "Can't find Transaction";
        # code...
        break;
        
}

function LoadData(){
    $sql = "select * from geninfo"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function AddRecord(){
    $InfoID = $_POST["InfoID"];
    $Title = $_POST["Title"];
    $Content = $_POST["Content"];
    $DateUpdate = $_POST["DateUpdate"];
    $Author = $_POST["Author"];
    $UpdateOrAdd = $_POST["UpdateOrAdd"];




    $targetDir = "../UploadsImages/"; 
    $statusMsg = "";

    $fileName = basename($_FILES["imageUploadInput"]["name"]); 
    $targetFilePath = $targetDir . $fileName; 
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION); 
     
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            // Upload file to server 
            if(move_uploaded_file($_FILES["imageUploadInput"]["tmp_name"], $targetFilePath)){ 
                // Insert image file name into database
                
                // Upload to database
                // Check if new or existiing data
                if($UpdateOrAdd == "Save"){
                    $sql = "INSERT INTO geninfo(InfoID, Title, Content, DateUpdate, Author, ImageLink) values('$InfoID', '$Title', '$Content', '$DateUpdate', '$Author', '$targetFilePath'); ";
                    Database::ManageRecord($GLOBALS['pdo'], $sql);
                }elseif($UpdateOrAdd == "Update"){
                    $sql = "UPDATE geninfo SET InfoID = '$InfoID', Title = '$Title', Content = '$Content', DateUpdate = '$DateUpdate', Author = '$Author', ImageLink = '$targetFilePath' WHERE InfoID = '$InfoID';";
                    Database::ManageRecord($GLOBALS['pdo'], $sql);
                }
                else{
                    $statusMsg = "UpdateorAdd not defined"; 
                }




               


                // $insert = $db->query("INSERT INTO images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())"); 
                 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    echo $statusMsg;



}

function DELETE_INFO(){
    $InfoID = $_POST["InfoID"];
    $sql = "DELETE FROM geninfo WHERE InfoID = '$InfoID';";
    Database::DeleteRecord($GLOBALS['pdo'], $sql);

}

function GET_ONE_INFO(){
    $InfoID = $_POST["InfoID"];
    $sql = "SELECT * FROM geninfo WHERE InfoID ='$InfoID';" ;
    $data = Database::GetOneData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function NEW_ID()
{
    Database::WriteLog(100);
    $sql = "SELECT * FROM geninfo order by InfoID desc";
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);

    if (isset($data[0])) {
        $s =  explode('-', $data[0]['InfoID']);
        $num = sprintf('%04d',  $s[1] + 1);
        $newID = "Info-$num";
        echo $newID;
        return ($newID);
    } else {
        // $s =  explode('-', $data[0]['TeacherID']);
        // $num = sprintf('%04d',  $s[1] + 1);
        $newID = "Info-0001";
        echo $newID;
        return ($newID);
    }

}


?>
