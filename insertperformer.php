<?php


include "config.php";

if(!empty($_POST['pID'])){
	$pID = $_POST['pID'];
	$pName = $_POST['pName'];
	$amount = $_POST['amount'];
	$showLen = $_POST['showLen'];
	$sql_statement = "INSERT INTO performers(pID, pName, amount, showLen) VALUES ('$pID', '$pName', '$amount', '$showLen')"; 
	
	
	$result = mysqli_query($db, $sql_statement);
	echo "Your insertion has been done successfully into performers table in SUConcert database.<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
	
}
else{
	echo "You did not enter your performer ID.";
}

?>