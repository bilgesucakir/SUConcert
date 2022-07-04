<!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset-utf-8" />
<link rel="shortcut icon" href="favicon.ico" />
<title>SUConcert</title>

<style>
a:link {
  color: blue;
  background-color: transparent;
  text-decoration: underline;
}
a:visited {
  color: purple;
  background-color: transparent;
  text-decoration: underline;
}
a:hover {
  color: pink;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>

<style>
body {
  font-family: Verdana, sans-serif;
}
</style>


</head>

<body>
	
	<table align="center">
		<tr>
			<td align="center">
				<table width="30%" border="0" cellspacing="0" cellpadding="0">
					<td>
						<tr align="center"><img src="SUConcertLogo.png" width="30%"/></tr>
						<tr align="center"><h2>Welcome to SUConcert Database Website!</h2></tr>
						<tr align="center"><table><td width="33%"></td><td width="33%" align="center"><h5>In this website, you can find information about latest concerts of various artists, 
							you can look up which students from Sabanci University are going to which concerts,
							which songs will be singed in these concerts, and a lot more!</h5></td><td width="33%"></td><table></tr>
					</td>
				</table>
			</td>
		</tr>
	<table>
	<table align="center" width="100%">
		<tr>
			<td align="center" width="100%">
				<table align="center">
					<td align="center">
						<tr align="center">
							<h3>Contribute to our database!</h3>
						</tr>
						<tr>
							<table  border="1" bordercolor="#002776" border cellpadding="5" width="100%">
								<tr align="center">
									<td width="10%"><h4>Insert a student</h4></td>
									<td width="10%"><h4>Insert a performer</h4></td>
									<td width="10%"><h4>Insert a song</h4></td>
									<td width="10%"><h4>Insert a genre</h4></td>
									<td width="10%"><h4>Insert a stage</h4></td>
									<td width="10%"><h4>Insert a location</h4></td>
								</tr>
								<tr align="center">
									<td>
										<form action = "insertstudent.php" method = "POST">
											Student ID:<br>
											<input type="text" id="stuID" name = "stuID"><br><br>
											Student Name:<br>
											<input type="text" id="stuName" name = "stuName"><br><br>
											Student Surname:<br>
											<input type="text" id="stuSurname" name = "stuSurname"><br><br>
											Student Class:<br>
											<input type="text" id="stuClass" name = "stuClass"><br><br>
											<input type = "submit" value = "Submit">											
										</form>
									</td>
									<td>
										<form action = "insertperformer.php" method = "POST">
											Performer ID:<br>
											<input type="text" id="pID" name = "pID"><br><br>
											Performer Name:<br>
											<input type="text" id="pName" name = "pName"><br><br>
											Performer Amount:<br>
											<input type="text" id="amount" name = "amount"><br><br>
											Show Length:<br>
											<input type="text" id="showLen" name = "showLen"><br><br>
											<input type = "submit" value = "Submit">											
										</form>
									</td>
									<td>
										<form action = "insertsong.php" method = "POST">
											Song ID:<br>
											<input type="text" id="sID" name = "sID"><br><br>
											Song Name:<br>
											<input type="text" id="sName" name = "sName"><br><br>
											Song Duration:<br>
											<input type="text" id="duraion" name = "duration"><br><br>
											<input type = "submit" value = "Submit">											
										</form>
									</td>
									<td>
										<form action = "insertgenre.php" method = "POST">
											Genre ID:<br>
											<input type="text" id="genreID" name="genreID"><br><br>
											Genre Name:<br>
											<input type="text" id="gName" name = "gName"><br><br>
											
											<input type = "submit" value = "Submit">											
										</form>
									</td>
									<td>
										<form action = "insertstage.php" method = "POST">
											Stage ID:<br>
											<input type="text" id="stageID" name = "stageID"><br><br>
											Stage Name:<br>
											<input type="text" id="stageName" name = "stageName"><br><br>
											Stage Type:<br>
											<input type="text" id="stageType" name = "stageType"><br><br>
											<input type = "submit" value = "Submit">											
										</form>
									</td>
									<td>
										<form action = "insertlocation.php" method = "POST">
											Coordiantes:<br>
											<input type="text" id="coordinate" name = "coordinate"><br><br>
											Location Name:<br>
											<input type="text" id="locName" name = "locName"><br><br>
											Location Type:<br>
											<input type="text" id="locType" name = "locType"><br><br>
											<input type = "submit" value = "Submit">											
										</form>
									</td>
								</tr>
								<tr align="center">
									<td width="10%"><h4>Delete a student</h4></td>
									<td width="10%"><h4>Delete a performer</h4></td>
									<td width="10%"><h4>Delete a song</h4></td>
									<td width="10%"><h4>Delete a genre</h4></td>
									<td width="10%"><h4>Delete a stage</h4></td>
									<td width="10%"><h4>Delete a location<h4></td>
								</tr>
								<tr align="center">
									<td>
										<h5>ID - name - surname</h5>
										<?php include "config.php"; ?>
										<form action="deleteStudent.php" method="GET">
											<select name="deleteStudent">

											<?php
												$sql_command = "SELECT stuID, stuName, stuSurname, stuClass FROM students";
												$myresult = mysqli_query($db, $sql_command);

												while($id_rows = mysqli_fetch_assoc($myresult))
												{
													$stuIDVar = $id_rows['stuID'];
													$stuNameVar= $id_rows['stuName'];
													$stuSurnameVar = $id_rows['stuSurname'];
													$stuClassVar = $id_rows['stuClass'];
													echo "<option value=$stuIDVar>". $stuIDVar . " - " . $stuNameVar . " - " . $stuSurnameVar . "</option>";
												}
											?>
											</select><br>
											<button>Delete</button>
										</form>
									</td>
									<td align="center">
										<h5>name - amount - show length(minutes)</h5>
										<?php include "config.php"; ?>
										<form action="deletePerformer.php" method="GET">
											<select name="deletePerformer">

											<?php
												$sql_command2 = "SELECT pID, pName, amount, showLen FROM performers";
												$myresult2 = mysqli_query($db, $sql_command2);

												while($id_rows2 = mysqli_fetch_assoc($myresult2))
												{
													$pIDVar = $id_rows2['pID'];
													$pNameVar= $id_rows2['pName'];
													$amountVar = $id_rows2['amount'];
													$showLenVar = $id_rows2['showLen'];
													echo "<option value=$pIDVar>". $pNameVar . " - " . $amountVar . " - " . $showLenVar . "</option>";
												}
											?>
											</select><br>
											<button>Delete</button>
										</form>
									</td>
									<td align="center">
										<h5>name - duration(seconds)</h5>
										<?php include "config.php"; ?>
										<form action="deleteSong.php" method="GET">
											<select name="deleteSong">

											<?php
												$sql_command3 = "SELECT sID, sName, duration FROM songs";
												$myresult3 = mysqli_query($db, $sql_command3);

												while($id_rows3 = mysqli_fetch_assoc($myresult3))
												{
													$sIDVar = $id_rows3['sID'];
													$sNameVar= $id_rows3['sName'];
													$durationVar = $id_rows3['duration'];
													
													echo "<option value=$sIDVar>".  $sNameVar . " - " . $durationVar .  "</option>";
												}
											?>
											</select><br>
											<button>Delete</button>
										</form>
									</td>
									<td align="center">
										<h5>name</h5>
										<?php include "config.php"; ?>
										<form action="deleteGenre.php" method="GET">
											<select name="deleteGenre">

											<?php
												$sql_command4 = "SELECT genreID, gName FROM genres WHERE 1";
												$myresult4 = mysqli_query($db, $sql_command4);

												while($id_rows4 = mysqli_fetch_assoc($myresult4))
												{
													$genreIDVar = $id_rows4['genreID'];
													$gNameVar = $id_rows4['gName'];
													
													echo "<option value=$genreIDVar>" . $gNameVar . "</option>";
												}
											?>
											</select><br>
											<button>Delete</button>
										</form>
									</td>
									<td align="center">
										<h5>name - type</h5>
										<?php include "config.php"; ?>
										<form action="deleteStage.php" method="GET">
											<select name="deleteStage">

											<?php
												$sql_command5 = "SELECT stageID, stageName, stageType FROM stages";
												$myresult5 = mysqli_query($db, $sql_command5);

												while($id_rows5 = mysqli_fetch_assoc($myresult5))
												{
													$stageIDVar = $id_rows5['stageID'];
													$stageNameVar= $id_rows5['stageName'];
													$stageTypeVar = $id_rows5['stageType'];
												
													echo "<option value=$stageIDVar>" . $stageNameVar . " - " . $stageTypeVar . "</option>";
												}
											?>
											</select><br>
											<button>Delete</button>
										</form>
									</td>
									<td align="center">
										<h5>name - type</h5>
										<?php include "config.php"; ?>
										<form action="deleteLocation.php" method="GET">
											<select name="deleteLocation1">

											<?php
												$sql_command6 = "SELECT coordinate, locName, locType FROM locations";
												$myresult6 = mysqli_query($db, $sql_command6);

												while($id_rows6 = mysqli_fetch_assoc($myresult6))
												{
													$coordinateVar = $id_rows6['coordinate'];
													$locNameVar= $id_rows6['locName'];
													$locTypeVar = $id_rows6['locType'];
													
													echo "<option value=$coordinateVar>".  $locNameVar . " - " . $locTypeVar ."</option>";
												}
											?>
											</select><br>
											<button>Delete</button>
										</form>
									</td>
								</tr>
								<tr align="center">
									<td width="10%"><h4>Select students</h4></td>
									<td width="10%"><h4>Select performers</h4></td>
									<td width="10%"><h4>Select songs</h4></td>
									<td width="10%"><h4>Select genres</h4></td>
									<td width="10%"><h4>Select stages</h4></td>
									<td width="10%"><h4>Select locations</h4></td>
								</tr>
								<tr align="center">
									<td>
										<form action="selectionStudent.php" method="GET">
											<select name="selStu">

											<?php

												$sql_command = "SELECT DISTINCT stuClass FROM students";
												$myresult = mysqli_query($db, $sql_command);

												while($id_rows = mysqli_fetch_assoc($myresult))
												{
													$stuClassVar = $id_rows['stuClass'];
													echo "<option value=$stuClassVar>". $stuClassVar . "</option>";
												}

											?>

											</select>
											<button>FILTER</button>
											</form>
									</td>
									
									<td>
										<form action="selectionPerformer.php" method="GET">
											<select name="selPerf">

											<?php

												$sql_command7 = "SELECT DISTINCT pName FROM performers";
												$myresult7 = mysqli_query($db, $sql_command7);

												while($id_rows7 = mysqli_fetch_assoc($myresult7))
												{
													$pNameVar = $id_rows7['pName'];
													
													echo "<option value=$pNameVar>". $pNameVar . "</option>";
												}

											?>

											</select>
											<button>FILTER</button>
											</form>
									</td>
									
									<td>
										<form action="selectionSong.php" method="GET">
											Duration less than:
											<input type="text" id="selSong" name = "selSong"><br>
											
											<button>FILTER</button>
											</form>
									</td>
									
									<td><h6>See display information below</h6>
									</td>
									
									<td>
										<form action="selectionStage.php" method="GET">
											<select name="selSta">
											<?php
												$sql_command = "SELECT DISTINCT stageType FROM stages";
												$myresult = mysqli_query($db, $sql_command);

												while($id_rows = mysqli_fetch_assoc($myresult))
												{
													$stageTypeVar = $id_rows['stageType'];
													echo "<option value=$stageTypeVar>". $stageTypeVar . "</option>";
												}
											?>
											</select>
											<button>FILTER</button>
											</form>
									</td>
									
									<td>
										<form action="selectionLocation.php" method="GET">
											<select name="selLoc">
											<?php
												$sql_command = "SELECT DISTINCT locType FROM locations";
												$myresult = mysqli_query($db, $sql_command);

												while($id_rows = mysqli_fetch_assoc($myresult))
												{
													$locTypeVar = $id_rows['locType'];
													echo "<option value=$locTypeVar>". $locTypeVar . "</option>";
												}
											?>
											</select>
											<button>FILTER</button>
											</form>
									</td>
								</tr>
							</table>
						</tr>
						
					</td>
				</table>
			</td>
		</tr>
		<tr align="center">
			<td align="center">
				<table align="center" width="100%">
					<tr align="center">
						<td align="center">
							<h3>Relations</h3>
						</td>
					<tr>
						<table  align="center" border="1" bordercolor="#002776" cellpadding="5" width="100%">
							<tr align="center">
								<td width="20%"><h4>buy_ticket_to_see</h4>(student and performer relation)</td>
								<td width="20%"><h4>sing</h4>(performer and song relation)</td>
								<td width="20%"><h4>have</h4>(song and genre relation)</td>
								<td width="20%"><h4>perform_in</h4>(performer and stage realtion)</td>
								<td width="20%"><h4>contain</h4>(location and stage relation)</td>
							</tr>
								
							<tr align="center">
								<td>
									<form action="insert_relation_buy_ticket.php" method="GET">
										<select name="studentsBuyTicketRel">
										<?php
											$sql_command = "SELECT stuID, stuName, stuSurname FROM students WHERE 1";
											$myresult = mysqli_query($db, $sql_command);

											while($id_rows = mysqli_fetch_assoc($myresult))
											{
												$stuIDVar = $id_rows['stuID'];
												$stuNameVar= $id_rows['stuName'];
												$stuSurnameVar = $id_rows['stuSurname'];
												
												echo "<option value=$stuIDVar>". $stuIDVar . " - " . $stuNameVar . " - " . $stuSurnameVar . "</option>";
											}
										?>
										</select>
										<br>
										<select name="performersBuyTicketRel">
										<?php
											$sql_command = "SELECT * FROM performers WHERE 1";
											$myresult = mysqli_query($db, $sql_command);

											while($id_rows = mysqli_fetch_assoc($myresult))
											{
												$pIDVar = $id_rows['pID'];
												$pNameVar= $id_rows['pName'];
												$amountVar = $id_rows['amount'];
												$showLenVar = $id_rows['showLen'];
												echo "<option value=$pIDVar>". $pIDVar . " - " . $pNameVar .  "</option>";
											}
										?>
										</select>
										<br>
										<input type="text" name="ticketsNumber" id="ticketsNumber" size="25" placeholder="# of tickets"></input>
										<br>
										<button>Insert</button>
									</form>
								</td>
									
								<td>
									<form action="insert_relation_sing.php" method="GET">
										<select name="songsSingRel">
										<?php
											$sql_command2 = "SELECT sID, sName, duration FROM songs WHERE 1";
											$myresult2 = mysqli_query($db, $sql_command2);

											while($id_rows2 = mysqli_fetch_assoc($myresult2))
											{
												$sIDVar = $id_rows2['sID'];
												$sNameVar= $id_rows2['sName'];
												$durationVar = $id_rows2['duration'];
												
												echo "<option value=$sIDVar>" . $sNameVar . " - " . $durationVar . "</option>";
											}
										?>
										</select>
										<br>
										<select name="performersSingRel">
										<?php
											$sql_command = "SELECT * FROM performers WHERE 1";
											$myresult = mysqli_query($db, $sql_command);

											while($id_rows = mysqli_fetch_assoc($myresult))
											{
												$pIDVar = $id_rows['pID'];
												$pNameVar= $id_rows['pName'];
												$amountVar = $id_rows['amount'];
												$showLenVar = $id_rows['showLen'];
												echo "<option value=$pIDVar>". $pIDVar . " - " . $pNameVar .  "</option>";
											}
										?>
										</select>
										<br>
										<input type="text" name="repetitionNumber" id="repetitionNumber" size="25" placeholder="# of repetitions"></input>
										<br>
										<button>Insert</button>
									</form>
								</td>
								<td>
									<form action="insert_relation_have.php" method="GET">
										<select name="songsHaveRel">
										<?php
											$sql_command2 = "SELECT sID, sName, duration FROM songs WHERE 1";
											$myresult2 = mysqli_query($db, $sql_command2);

											while($id_rows2 = mysqli_fetch_assoc($myresult2))
											{
												$sIDVar = $id_rows2['sID'];
												$sNameVar= $id_rows2['sName'];
												$durationVar = $id_rows2['duration'];
												
												echo "<option value=$sIDVar>" . $sNameVar . " - " . $durationVar . "</option>";
											}
										?>
										</select>
										<br>
										<select name="genresHaveRel">
										<?php
											$sql_command = "SELECT * FROM genres WHERE 1";
											$myresult = mysqli_query($db, $sql_command);

											while($id_rows = mysqli_fetch_assoc($myresult))
											{
												$genreIDVar = $id_rows['genreID'];
												$gNameVar = $id_rows['gName'];
												
												echo "<option value=$genreIDVar>". $gNameVar . "</option>";
											}
										?>
										</select>
										<br>
										<button>Insert</button>
									</form>
								</td>
								<td>
									<form action="insert_relation_perform_in.php" method="GET">
										<select name="stagesPerformInRel">
										<?php
											$sql_command2 = "SELECT * FROM stages WHERE 1";
											$myresult2 = mysqli_query($db, $sql_command2);

											while($id_rows2 = mysqli_fetch_assoc($myresult2))
											{
												$stageIDVar = $id_rows2['stageID'];
												$stageNameVar= $id_rows2['stageName'];
												$stageTypeVar = $id_rows2['stageType'];
												
												echo "<option value=$stageIDVar>". $stageIDVar . " - " . $stageNameVar . " - " . $stageTypeVar . "</option>";
											}
										?>
										</select>
					
				
										<br>
										<select name="performersPerformInRel">
										<?php
											$sql_command = "SELECT * FROM performers WHERE 1";
											$myresult = mysqli_query($db, $sql_command);

											while($id_rows = mysqli_fetch_assoc($myresult))
											{
												$pIDVar = $id_rows['pID'];
												$pNameVar= $id_rows['pName'];
												echo "<option value=$pIDVar>". $pIDVar . " - " . $pNameVar .  "</option>";
											}
										?>
										</select>
										<br>
										<button>Insert</button>
									</form>
								</td>
						
								<td>
									<form action="insert_relation_contain.php" method="GET">
										<select name="stagesContainRel">
										<?php
											$sql_command2 = "SELECT * FROM stages WHERE 1";
											$myresult2 = mysqli_query($db, $sql_command2);

											while($id_rows2 = mysqli_fetch_assoc($myresult2))
											{
												$stageIDVar = $id_rows2['stageID'];
												$stageNameVar= $id_rows2['stageName'];
												$stageTypeVar = $id_rows2['stageType'];
												
												echo "<option value=$stageIDVar>". $stageIDVar . " - " . $stageNameVar . " - " . $stageTypeVar . "</option>";
											}
										?>
										</select>
										<br>
										<select name="locationsContainRel">
										<?php
											$sql_command = "SELECT * FROM locations WHERE 1";
											$myresult = mysqli_query($db, $sql_command);

											while($id_rows = mysqli_fetch_assoc($myresult))
											{
												$coordinateVar = $id_rows['coordinate'];
												$locNameVar= $id_rows['locName'];
												$locTypeVar = $id_rows['locType'];
												echo "<option value=$coordinateVar>". $locNameVar . " - " . $locTypeVar . "</option>";
											}
										?>
										</select>
										<br>
										
										<input type="text" name="permanentInfo" id="permanentInfo" size="25" placeholder="Permanent (type 'Yes' or 'No')"></input>
										
										<br>
										<button>Insert</button>
									</form>
								</td>
							</tr>
						</table>
					</tr>
					
				</table>
			</td>
		</tr>
		
		<tr align="center">
			<td align="center">
				<table align="center" width="100%">
					<tr align="center">
						<td align="center">
							<h3>Display Information From Our Database</h3>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<table  border="1" bordercolor="#002776" border cellpadding="5">
								<tr align="center">
									<td width="10%"><h4>Student entries</h4></td>
									<td width="10%"><h4>Performer entries</h4></td>
									<td width="10%"><h4>Song entries</h4></td>
									<td width="10%"><h4>Genre entries</h4></td>
									<td width="10%"><h4>Stage entries</h4></td>
									<td width="10%"><h4>Location entries</h4></td>
								</tr>
								<tr align="top">
									<td align="top">
										<h5>ID name surname class</h5>
											<?php
												$sql_command = "SELECT stuID, stuName, stuSurname, stuClass FROM students";
												$myresult = mysqli_query($db, $sql_command);

												while($id_rows = mysqli_fetch_assoc($myresult))
												{
													$stuIDVar = $id_rows['stuID'];
													$stuNameVar= $id_rows['stuName'];
													$stuSurnameVar = $id_rows['stuSurname'];
													$stuClassVar = $id_rows['stuClass'];
													echo "<h6>" .  $stuIDVar . " " . $stuNameVar . " " . $stuSurnameVar . " " . $stuClassVar . "</h6>";
												}
											?>
											
									</td>
									<td align="top">
										<h5>name amount show length</h5>
										<?php
											$sql_command2 = "SELECT pID, pName, amount, showLen FROM performers";
											$myresult2 = mysqli_query($db, $sql_command2);

											while($id_rows2 = mysqli_fetch_assoc($myresult2))
											{
												$pIDVar = $id_rows2['pID'];
												$pNameVar= $id_rows2['pName'];
												$amountVar = $id_rows2['amount'];
												$showLenVar = $id_rows2['showLen'];
												echo "<h6>" . $pNameVar . " " . $amountVar . " " . $showLenVar . "</h6>";
											}
										?>
									
									</td>
									<td align="top">
										<h5>name duration</h5>
										<?php
											$sql_command3 = "SELECT sID, sName, duration FROM songs";
											$myresult3 = mysqli_query($db, $sql_command3);

											while($id_rows3 = mysqli_fetch_assoc($myresult3))
											{
												$sIDVar = $id_rows3['sID'];
												$sNameVar= $id_rows3['sName'];
												$durationVar = $id_rows3['duration'];
													
												echo "<h6>".  $sNameVar . " " . $durationVar .  "</h6>";
											}
										?>
									</td>	
									<td align="top">
										<h5>name</h5>
										<?php
											$sql_command4 = "SELECT gName FROM genres WHERE 1";
											$myresult4 = mysqli_query($db, $sql_command4);
											
											while($id_rows4 = mysqli_fetch_assoc($myresult4))
											{
												$gNameVar = $id_rows4['gName'];					
												echo "<h6>" . $gNameVar . "</h6>";
											}
										?>
									
									</td>	
									<td align="top">
										<h5>name type</h5>
										<?php
											$sql_command5 = "SELECT stageID, stageName, stageType FROM stages";
											$myresult5 = mysqli_query($db, $sql_command5);

											while($id_rows5 = mysqli_fetch_assoc($myresult5))
											{
												$stageIDVar = $id_rows5['stageID'];
												$stageNameVar= $id_rows5['stageName'];
												$stageTypeVar = $id_rows5['stageType'];
												
												echo "<h6>" . $stageNameVar . " " . $stageTypeVar . "</h6>";
											}
										?>
									
									</td>
									<td align="top">
										<h5>name type</h5>
										<?php
											$sql_command6 = "SELECT coordinate, locName, locType FROM locations";
											$myresult6 = mysqli_query($db, $sql_command6);

											while($id_rows6 = mysqli_fetch_assoc($myresult6))
											{
												$coordinateVar = $id_rows6['coordinate'];
												$locNameVar= $id_rows6['locName'];
												$locTypeVar = $id_rows6['locType'];
													
												echo "<h6>".  $locNameVar . " " . $locTypeVar ."</h6>";
											}
										?>
										
									</td>
								</tr>
							</table>
			
		</tr>
		<tr align="center">
			<td align="center">
				<table align="center" width="100%">
					<tr align="center">
						<td align="center">
						<br><br>
							Brought to You By:
							<br>
							27889 Bilgesu Cakir<br>
							27960 Selin Naz Ilhan
							<br><br>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
		<tr align="center">
			<td align="center">
				<table align="center" width="100%">
					<tr align="center">
						<td align="center">
						
							For help you can use <a href="http://localhost/suconcert/live_chat.php">Live Chat</a>
							
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
		
		<tr align="center">
			<td align="center">
				<table align="center" width="100%">
					<tr align="center">
						<td align="center">
						
							If you are the admin, reach admin chat page <a href="http://localhost/suconcert/admin_chat.php">here</a>
							
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
	</table>
	

</body>
</html>