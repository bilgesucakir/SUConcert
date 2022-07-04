<?php

include "config.php";

if(!empty($_GET['songsSingRel']) && !empty($_GET['performersSingRel']) && !empty($_GET['repetitionNumber']))
{
	$sIDV = $_GET['songsSingRel'];
	$pIDV = $_GET['performersSingRel'];
	$repetitionV = $_GET['repetitionNumber'];
	$sql_statement = "INSERT INTO sing(sID, pID, repetition) VALUES ('$sIDV', '$pIDV', '$repetitionV')";
	$result = mysqli_query($db, $sql_statement);
	
	echo "Your insertion has been done successfully to sing relation in SUConcert database.<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
}
else{
	echo "error somewhere.";
}


?>