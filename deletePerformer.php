<?php

include "config.php";

if(!empty($_GET['deletePerformer']))
{
	$pID = $_GET['deletePerformer'];
	$sql_statement = "DELETE FROM performers WHERE pID = $pID";
	$result = mysqli_query($db, $sql_statement);
	
	echo "Your deletion has been done successfully from performers table in SUConcert database (also related relation instances are deleted too).<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
}


?>