<?php


include "config.php";

if(!empty($_POST['genreID'])){
	$genreID = $_POST['genreID'];
	$gName = $_POST['gName'];

	
	$sql_statement = "INSERT INTO genres(genreID, gName) VALUES ('$genreID', '$gName')"; 
	
	
	$result = mysqli_query($db, $sql_statement);
	echo "Your insertion has been done successfully into genres table in SUConcert database.<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
	
}
else{
	echo "You did not enter your genre name.";
}

?>