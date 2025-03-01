<?php
    
require "database_php/connect.php";
$pdo = Database::letsconnect();

    $username = $_POST['username'];
   $Password = $_POST['Password'];
//    echo $currentDate->format('Y-m-d H:i:s');
   $sql = "SELECT Password, Organization, AdminID FROM admin WHERE Username = '$username';";
//    $sql = "select Password from tbteacher where Lastname='$Username'";
   $data = Database::GetOneData($pdo, $sql);
   $Psdb;
    try{
        $Psdb = $data['Password'];
        $ORG = $data['Organization'];
        // echo $data['AdminID']  .  "<<<<<da>>>>";
        // echo $Password . " " . $Psdb . "<<<<<<<<<<<>>>>>>>>>>";
        // if(strcmp($Password, ".md5($Psdb).")){
        if($Password == $Psdb){

            if($ORG == "Admin"){
                // echo json_encode("");
                echo json_encode("Admin");
            }else{
                echo json_encode("Organization" . ", " . $data['AdminID']);
            }

        }else{
            echo json_encode(false);
        }
    }catch (Exception){
        $Psdb = $data;
        // echo $Password . " " . $Psdb;
        // if(strcmp($Password, ".md5($Psdb).")){
        if($Password == $Psdb){
            echo json_encode(true);
        }else{
            echo json_encode(false);
        }
    }
//    $Psdb = $data['Password'];
//    echo $Password . " " . $Psdb;








    ?>