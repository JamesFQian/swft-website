<?php
	// project
	// local-connect.php
	// fall 2016
	// James Qian
	
	// Initialize local connect variables
	$host	= 'localhost';
	$user	= 'root';
	$pw		= '';
	$db		= 'fall2167';
	
	// connect to database
	$dbc = mysqli_connect($host, $user, $pw, $db)
		or die('LOCAL CONNECT ERROR: ' . mysqli_connect_error());
	
?>