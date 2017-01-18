<?php 
	// project
	// process.php
	// Fall 2016
	// James Qian
	
	//connect to DB (LOCAL or SERVER)
	include('server-connect.php');
	
	//get username and password from form
	$uname = mysqli_real_escape_string($dbc, $_POST['uname']);
	$pword = mysqli_real_escape_string($dbc, $_POST['pword']);
	
	//build a query
	$query = "select * from customer where uname = '$uname'";
	
	//run the query
	$result = mysqli_query($dbc, $query) 
		or die('process.php read error: ' + mysqli_error($dbc));
	
	//check results of query
	if (mysqli_num_rows($result) == 0)
	{
		header('Location: login.php?rc=1');
		exit;
	}
	
	//if we got to here we can validate username
	//store the results of the username query to verify password
	$row = mysqli_fetch_array($result);
	
	//salt and hash
	if(password_verify($pword, $row['pword']) == $row['pword'])
	{
		//let them in
		//start php session
		session_id('jfqian');
		session_name('jfqian');
		session_start('jfqian');
		
		//set the session variable
		$_SESSION['jfqian'] = $row['name'];
		
		//close db connection
		mysqli_close($dbc);
		
		//send to welcome page
		header('Location: welcome.php');
		exit;
	}
	else
	{
		//password invalid
		header('Location: login.php?rc=2');
		exit;
	}
	
	
	//This code needs to be at the bottom
	//pass a 3 back to login.php for testing
	header('Location: login.php?rc=3');
	
?>