<?php
	mysql_connect("localhost", "root", "");
	mysql_select_db("spiker");
	
	$username = mysql_real_escape_string($_POST["username"]);
	$password = mysql_real_escape_string($_POST["password"]);
	
	$sql = "SELECT count(*) FROM user WHERE(username='".$username."' AND password='".$password."')";
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res);
	
	
	
	if($row[0]>0){
			echo "login success!";
		}
	else{
			echo "login failed";
		}

?>