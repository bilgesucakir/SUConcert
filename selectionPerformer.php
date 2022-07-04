<?php

include "config.php";



if(!empty($_GET['selPerf']))
{
	$pName = $_GET['selPerf'];
	echo "All performers who are $pName:<br><br>";
	$sql = "SELECT * FROM performers WHERE pName = '$pName'";
	if($theresult = mysqli_query($db, $sql)){
	
	
		if (mysqli_num_rows($theresult) > 0) {
			while($rows = mysqli_fetch_array($theresult)){
		
				echo "<tr>";
                echo "<td>" . $rows['pID']  . "</td>&nbsp";
                echo "<td>" . $rows['pName'] . "</td>&nbsp";
                echo "<td>" . $rows['amount']  . "</td>&nbsp;";
				echo "<td>" . $rows['showLen'] . "</td>";
				echo "<br>";
            echo "</tr> ";
			}
			echo '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
		}
		else{
			echo "There are no performers in the database who is a $pName";
		}
	}
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
	
	//echo $theresult;
}

?>


