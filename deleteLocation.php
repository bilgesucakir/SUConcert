<?php

include "config.php";

if(!empty($_GET['deleteLocation1']))
{
	$coordinateV = $_GET['deleteLocation1'];
	$sql_statement = "DELETE FROM locations WHERE coordinate = '$coordinateV'";
	$result = mysqli_query($db, $sql_statement);
	
	echo "Your deletion has been done successfully from locations table in SUConcert database (also related relation instances are deleted too).<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
}


?>