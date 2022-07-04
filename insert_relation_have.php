<?php

include "config.php";

if(!empty($_GET['songsHaveRel']) && !empty($_GET['genresHaveRel']))
{
	$sIDV = $_GET['songsHaveRel'];
	$genreIDV = $_GET['genresHaveRel'];
	$sql_statement = "INSERT INTO have(sID, genreID) VALUES ('$sIDV', '$genreIDV')";
	$result = mysqli_query($db, $sql_statement);
	
	echo "Your insertion has been done successfully to have relation in SUConcert database.<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
}
else{
	echo "error somewhere.";
}


?>