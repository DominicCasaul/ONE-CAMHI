<?php
include('../home/index.php');
if(isset($_POST['submit'])){
	$ContentID = $_POST['ContentID'];
$Title = $_POST['Title'];
$Content = $_POST['Content'];
$ContentType = $_POST['ContentType'];
$PublicationDate = $_POST['PublicationDate'];

$query = mysqli_query($con,"INSERT INTO home(ContentID,Title,Content,ContentType,PublicationDate) 
values ('$ContentID','$Title','$Content','$ContentType','$PublicationDate')");
}

