<?php

include "config.php";

if(!empty($_GET['stagesPerformInRel']) && !empty($_GET['performersPerformInRel']))
{
	$stageIDV = $_GET['stagesPerformInRel'];
	$pIDV = $_GET['performersPerformInRel'];
	
	$sql_statement = "INSERT INTO perform_in(stageID, pID) VALUES ('$stageIDV', '$pIDV')";
	$result = mysqli_query($db, $sql_statement);
	
	echo "Your insertion has been done successfully to perform_in relation in SUConcert database.<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
}
else{
	echo "error somewhere.";
}


?>