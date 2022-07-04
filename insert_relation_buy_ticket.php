<?php

include "config.php";

if(!empty($_GET['studentsBuyTicketRel']) && !empty($_GET['performersBuyTicketRel']) && !empty($_GET['ticketsNumber']))
{
	$stuIDV = $_GET['studentsBuyTicketRel'];
	$pIDV = $_GET['performersBuyTicketRel'];
	$numberV = $_GET['ticketsNumber'];
	$sql_statement = "INSERT INTO buy_ticket_to_see(stuID, pID, number) VALUES ('$stuIDV', '$pIDV', '$numberV')";
	$result = mysqli_query($db, $sql_statement);
	
	echo "Your insertion has been done successfully to buy_ticket_to_see relation in SUConcert database.<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
}
else{
	echo "error somewhere.";
}


?>