<?php 
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$DB_name = "registration";
	// creating connection
	$connection = mysqli_connect($serverName, $userName, $password, $DB_name);
	if(!$connection)
		die("Not Connected! There is some problem with server");
	
?>