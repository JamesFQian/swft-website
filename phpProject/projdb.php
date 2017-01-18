<?php
	// Project
	// projdb.php
	// fall 2016
	// James Qian
	
	// Initialize local connect variables
	$host	= 'localhost';
	$user	= 'jfqian';
	$pw		= 'kenyaBODYhurry';
	$db		= 'jfqian';
	
	// connect to database
	$dbc = mysqli_connect($host, $user, $pw, $db)
		or die('SERVER CONNECT ERROR: ' . mysqli_connect_error());
	
	session_start();
	
?>