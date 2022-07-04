<?php

include "config.php";



if(!empty($_GET['selLoc']))
{
	$locType = $_GET['selLoc'];
	echo "All locations which are $locType:<br><br>";
	$sql = "SELECT * FROM locations WHERE locType = '$locType'";
	if($theresult = mysqli_query($db, $sql)){
	
	
		if (mysqli_num_rows($theresult) > 0) {
			while($rows = mysqli_fetch_array($theresult)){
				
				echo "<tr>";
                echo "<td>" . $rows['coordinate']  . "</td>&nbsp";
                echo "<td>" . $rows['locName'] . "</td>";
				echo "<br>";
            echo "</tr> ";
			}
			echo '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
		}
		else{
			echo "There are no locations in the database which is a $locType";
		}
	}
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
	
	//echo $theresult;
}

?>


