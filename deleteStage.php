<?php

include "config.php";

if(!empty($_GET['deleteStage']))
{
	$stageID = $_GET['deleteStage'];
	$sql_statement = "DELETE FROM stages WHERE stageID = $stageID";
	$result = mysqli_query($db, $sql_statement);
	
	echo "Your deletion has been done successfully from stages table in SUConcert database (also related relation instances are deleted too).<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
}


?>