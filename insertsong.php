<?php


include "config.php";

if(!empty($_POST['sID'])){
	$sID = $_POST['sID'];
	$sName = $_POST['sName'];
	$duration = $_POST['duration'];
	
	$sql_statement = "INSERT INTO songs(sID, sName, duration) VALUES ('$sID', '$sName', '$duration')"; 
	
	
	$result = mysqli_query($db, $sql_statement);
	echo "Your insertion has been done successfully into songs table in SUConcert database.<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
	
}
else{
	echo "You did not enter your student ID.";
}

?>