<?php

include "config.php";

if(!empty($_GET['deleteGenre']))
{
	$genreID = $_GET['deleteGenre'];
	$sql_statement = "DELETE FROM genres WHERE genreID = '$genreID'";
	$result = mysqli_query($db, $sql_statement);
	
	echo "Your deletion has been done successfully from genres table in SUConcert database (also related relation instances are deleted too).<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
}


?>