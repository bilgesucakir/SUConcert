<?php

    $URL = "https://suconcert-71089-default-rtdb.firebaseio.com/Chats.json";

    header("refresh: 60");

    function get_messages() { 
        global $URL;
        $ch = curl_init();
        curl_setopt_array($ch, [ CURLOPT_URL => $URL,
                                CURLOPT_POST => FALSE, // It will be a get request 
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_SSL_VERIFYPEER => false, ]);
        $response = curl_exec($ch); 
        curl_close($ch);
        return json_decode($response, true); 
    }
    
    function send_msg($msg, $name) { 
        global $URL;
        $ch = curl_init();
        $msg_json = new stdClass();
		//$msg_json->msg = new stdClass();
        $msg_json->msg = $msg;
		//$msg_json->name = new stdClass();
        $msg_json->name = $name;
		//$msg_json->timeof = new stdClass();
        $msg_json->timeof = date('H:i');
        $encoded_json_obj = json_encode($msg_json); 
        curl_setopt_array($ch, array(CURLOPT_URL => $URL,
                                    CURLOPT_POST => TRUE,
                                    CURLOPT_RETURNTRANSFER => TRUE,
                                    CURLOPT_HTTPHEADER => array('Content-Type: application/json' ),
                                    CURLOPT_POSTFIELDS => $encoded_json_obj ));
        $response = curl_exec($ch); 
		if(curl_errno($ch))
		{
			echo 'Curl error: ' . curl_error($ch);
		}
		curl_close($ch);
        return $response;
    }

    $msg_res_json = get_messages();

    if (isset($_POST['usermsg'])) {
        $user_msg = $_POST['usermsg'];
		$adminname = "admin";
        $responsevar = send_msg($user_msg, $adminname);
        echo $responsevar;
    }

?>


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
  text-align: right;
}

.leftdiv{
	text-align: left;
}

.rightdiv{
	text-align: right;
}

</style>
</head>

<body>




<table align="center">
		<tr>
			<td align="center">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<td>
						<tr align="center"><img src="SUConcertLogo.png" width="30%"/></tr>
						<tr align="center"><h5>SUConcert Database Admin Page</h5></tr>
						
					</td>
				</table>
			</td>
		</tr>
	</table>



<ol >
<?php
    $keys = array_keys($msg_res_json);
	echo '<br><br>';
    for ($i = 0; $i < count($keys); $i++){
        $chat_msg = $msg_res_json[$keys[$i]];
		
        $name = $chat_msg['name'];
        $msg = $chat_msg['msg'];
        $timeof = $chat_msg['timeof'];
		
        if ($name != 'admin') {
			echo 
			'	<div class="leftdiv">
					<table align="left" width="30%">
						<tr align="left">
							
							' . $name . ':&nbsp;' . $msg .'&nbsp;(' . $timeof . ')
										
						</tr>
					</table>
				</div>
			';
        } else {
           echo 
		   '
				<div class="rigthdiv">
					<table align="right" width="30%">
						<tr align="right">
								
							' . $name . ':&nbsp;' . $msg .'&nbsp;(' . $timeof . ')
											
						</tr>
					</table>
				</div>
		   ';
        }
		echo'<br>';
    }
?>
</ol>




<table align="right">
	<tr>
		<td align="right">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<td>
					<tr>
						<form name="form" action = "admin_chat.php" method="POST">
							<input name="usermsg" type="text" placeholder="Type response"/>
							<input type="submit" style="Submit"/>
						</form>
					</tr>	
				</td>
			</table>
		</td>
	</tr>
</table>

<div class="leftdiv" cellpadding="5" cellspacing="10">
	<table align="left">
		<tr>
			<td align="left">
				<table width="100%" border="0" cellspacing="10" cellpadding="10">
					<td>
						<tr><br>
						</tr>
						<tr>
							<a href= "http://localhost/suconcert/main_page.php">Return to main page</a>
						</tr>	
					</td>
				</table>
			</td>
		</tr>
	</table>
</div>



</body>