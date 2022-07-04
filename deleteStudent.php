<?php

include "config.php";

if(!empty($_GET['deleteStudent']))
{
	$stuID = $_GET['deleteStudent'];
	$sql_statement = "DELETE FROM students WHERE stuID = $stuID";
	$result = mysqli_query($db, $sql_statement);
	
	echo "Your deletion has been done successfully from students table in SUConcert database (also related relation instances are deleted too).<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
}


?>