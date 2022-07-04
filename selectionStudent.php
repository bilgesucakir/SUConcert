<?php

include "config.php";



if(!empty($_GET['selStu']))
{
	$stuClassName = $_GET['selStu'];
	echo "All students who are $stuClassName:<br><br>";
	$sql = "SELECT * FROM students WHERE stuClass = '$stuClassName'";
	if($theresult = mysqli_query($db, $sql)){
	
	
		if (mysqli_num_rows($theresult) > 0) {
			while($rows = mysqli_fetch_array($theresult)){
				//echo $rows['stuID']. " - " . $rows['stuName'] . " - " . $rows['stuSurname'] . '<br>';
				echo "<tr>";
                echo "<td>" . $rows['stuID']  . "</td>&nbsp";
                echo "<td>" . $rows['stuName'] . "</td>&nbsp";
                echo "<td>" . $rows['stuSurname']  . "</td>";
				echo "<br>";
            echo "</tr> ";
			}
			echo '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
		}
		else{
			echo "There are no students in the database who is a $stuClassName";
		}
	}
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
	

}

?>


