<?php

require "database_php/connect.php";
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
    default:
        echo "Can't find Transaction";
        # code...
        break;
        
}

function LoadData(){
    $sql = "select * from post Order by ContentType Asc"; 
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function AddRecord(){
    $targetDir = "../UploadsImages/"; 


    $ContentID = $_POST["ContentID"];
    $Title = $_POST["Title"];
    // $imageUploadInput = $_POST["imageUploadInput"];
    $PublicationDate = $_POST["PublicationDate"];
    $txtEventStart = $_POST["txtEventStart"];
    $txtEventEnds = $_POST["txtEventEnds"];
    $Content = $_POST["Content"];
    $ContentType = $_POST["ContentType"];
    $AdminID = $_POST["AdminID"];
    $UpdateOrAdd = $_POST["UpdateOrAdd"];
    echo $UpdateOrAdd . "\n\n\n\n\n";
    
    

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
                if($UpdateOrAdd == "Submit"){
                    $sql = "INSERT INTO post(ContentID, Title, Content, ImageURL, PublicationDate, AdminID, EventStarts, EventsEnds, ContentType)
                    values('$ContentID', '$Title', '$Content', '$targetFilePath', '$PublicationDate', '$AdminID', '$txtEventStart', '$txtEventEnds', '$ContentType'); ";
                    $data = Database::ManageRecord($GLOBALS['pdo'], $sql);
                }elseif($UpdateOrAdd == "Update"){
                    $sql = "UPDATE post SET  Title = '$Title', Content = '$Content', ImageURL = '$targetFilePath' ,PublicationDate = '$PublicationDate', AdminID = '$AdminID', EventStarts = '$txtEventStart', EventsEnds = '$txtEventEnds', ContentType = '$ContentType' WHERE ContentID = '$ContentID';";
                    $data = Database::ManageRecord($GLOBALS['pdo'], $sql);
                }else{
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


    // $sql = "INSERT INTO post(ContentID, Title, Content, ImageURL, PublicationDate, AdminID, EventStarts, EventsEnds, ContentType)
    //  values('$ContentID', '$Title', '$Content', '$imageUploadInput', '$PublicationDate', '$AdminID', '$txtEventStart', '$txtEventEnds', '$ContentType'); ";
    // echo $sql; 
    // Database::ManageRecord($GLOBALS['pdo'], $sql);
}

function DELETE_INFO(){
    $ContentID = $_POST["ContentID"];
    $sql = "DELETE FROM post WHERE ContentID = '$ContentID';";
    Database::DeleteRecord($GLOBALS['pdo'], $sql);

}

function GET_ONE_INFO(){
    $ContentID = $_POST["ContentID"];
    $sql = "SELECT * FROM post WHERE ContentID ='$ContentID';" ;
    $data = Database::GetOneData($GLOBALS['pdo'], $sql);
    echo json_encode($data);
}

function NEW_ID()
{
    Database::WriteLog(100);
    $sql = "SELECT * FROM post order by ContentID desc";
    $data = Database::GetAllData($GLOBALS['pdo'], $sql);

    if (isset($data[0])) {
        $s =  explode('-', $data[0]['ContentID']);
        $num = sprintf('%04d',  $s[1] + 1);
        $newID = "P-$num";
        echo $newID;
        return ($newID);
    } else {
        // $s =  explode('-', $data[0]['TeacherID']);
        // $num = sprintf('%04d',  $s[1] + 1);
        $newID = "P-0001";
        echo $newID;
        return ($newID);
    }

}


?>

