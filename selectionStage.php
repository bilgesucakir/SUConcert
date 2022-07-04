<?php

include "config.php";



if(!empty($_GET['selSta']))
{
	$stageType = $_GET['selSta'];
	echo "All stages which are $stageType<br><br>";
	$sql = "SELECT * FROM stages WHERE stageType = '$stageType'";
	if($theresult = mysqli_query($db, $sql)){
	
	
		if (mysqli_num_rows($theresult) > 0) {
			while($rows = mysqli_fetch_array($theresult)){
			
				echo "<tr>";
          
                echo "<td>" . $rows['stageName'] . "</td>";
          
				echo "<br>";
            echo "</tr> ";
			}
			echo '<br> <a href="http://localhost/suconcert/main_page.php">Back to main page</a>';
		}
		else{
			echo "There are no stages in the database which is a $stageType";
		}
	}
	else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
	}
	
	//echo $theresult;
}

?>


