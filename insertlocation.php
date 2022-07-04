<?php


include "config.php";

if(!empty($_POST['coordinate'])){
	$coordinate = $_POST['coordinate'];
	$locName = $_POST['locName'];
	$locType = $_POST['locType'];
	
	$sql_statement = "INSERT INTO locations(coordinate, locName, locType) VALUES ('$coordinate', '$locName', '$locType')"; 
	
	
	$result = mysqli_query($db, $sql_statement);
	echo "Your insertion has been done successfully into locations table in SUConcert database.<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
	
}
else{
	echo "You did not enter your coordinate.";
}

?>