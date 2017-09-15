<?php
	$username = $_REQUEST ['username'];
	$password = $_REQUEST ['pwd'];
	
	$db = mysql_connect( "localhost", "root", "123" );
	$db = mysql_select_db ( "library", $db );
	$query = "select username,password from login where (name='$username'and password='$password')";
	
	$answer = mysql_query($query); 
		if (mysql_num_rows($answer)==1) {
			echo "user valid go on";
		}
		else {
			echo "Invalid Login";
		}
?>