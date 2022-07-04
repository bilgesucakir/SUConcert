<?php


include "config.php";

if(!empty($_POST['stuID'])){
	$stuID = $_POST['stuID'];
	$stuName = $_POST['stuName'];
	$stuSurname = $_POST['stuSurname'];
	$stuClass = $_POST['stuClass'];
	$sql_statement = "INSERT INTO students(stuID, stuName, stuSurname, stuClass) VALUES ('$stuID', '$stuName', '$stuSurname', '$stuClass')"; 
	
	
	$result = mysqli_query($db, $sql_statement);
	echo "Your insertion has been done successfully into students table in SUConcert database.<br>Your result is: " . $result . '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
	
}
else{
	echo "You did not enter your student ID.";
}

?>

