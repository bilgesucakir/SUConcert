<?php

include "config.php";

if(1 == 1)
{
	$stageV = $_GET['stagesContainRel'];
	$locV = $_GET['locationsContainRel'];
	$permanentV = $_GET['permanentInfo'];
	
	$sql_statement = "INSERT INTO contain (stageID, coordinate, permanently) VALUES ($stageV,'$locV', '$permanentV')";
	$result = mysqli_query($db, $sql_statement);
	
	echo "Your insertion has been done successfully to contain relation in SUConcert database.<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
}
else{
	echo "error somewhere.";
}


?>