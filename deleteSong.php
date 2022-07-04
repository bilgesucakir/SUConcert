<?php

include "config.php";

if(!empty($_GET['deleteSong']))
{
	$sID = $_GET['deleteSong'];
	$sql_statement = "DELETE FROM songs WHERE sID = $sID";
	$result = mysqli_query($db, $sql_statement);
	
	echo "Your deletion has been done successfully from songs table in SUConcert database (also related relation instances are deleted too).<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
}


?>