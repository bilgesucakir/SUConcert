<?php


include "config.php";

if(!empty($_POST['stageID'])){
	$stageID = $_POST['stageID'];
	$stageName = $_POST['stageName'];
	$stageType = $_POST['stageType'];
	
	$sql_statement = "INSERT INTO stages(stageID, stageName, stageType) VALUES ('$stageID', '$stageName', '$stageType')"; 
	
	
	$result = mysqli_query($db, $sql_statement);
	echo "Your insertion has been done successfully into stages table in SUConcert database.<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
	
}
else{
	echo "You did not enter your stage ID.";
}

?>