<?php
	// a6
	// uncheck.php
	//fall 2016
	// James Qian
	
	//connect to db
	include('server-connect.php');
	
	//get username
	$uname = mysqli_real_escape_string($dbc, $_POST['uname']);

	//build a query
	$check = mysqli_query($dbc, "select id from customer where uname = '$uname'");
	
	//check to see if rows
	if (mysqli_num_rows($check) == 0)
		header("Location: checkUsername.php?&uname=$uname&status=AVAILABLE");
	else 
		header("Location: checkUsername.php?&uname=$uname&status=UNAVAILABLE");
?>