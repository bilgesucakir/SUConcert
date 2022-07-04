<?php

include "config.php";



if(!empty($_GET['selSong']))
{
	$duration = $_GET['selSong'];
	echo "All songs less than $duration:<br><br>";
	$sql = "SELECT * FROM songs WHERE duration < '$duration'";
	if($theresult = mysqli_query($db, $sql)){
	
	
		if (mysqli_num_rows($theresult) > 0) {
			while($rows = mysqli_fetch_array($theresult)){
				
				echo "<tr>";
                echo "<td>" . $rows['sID']  . "</td>&nbsp";
                echo "<td>" . $rows['sName'] . "</td>&nbsp";
                echo "<td>" . $rows['duration']  . "</td>";
				echo "<br>";
            echo "</tr> ";
			}
			echo '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
		}
		else{
			echo "There are no songs in the database smaller than $duration";
		}
	}
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
	
	//echo $theresult;
}

?>


