<?php
	// project
	// confirmPcode.php
	// fall 2016
	// James Qian
	
	//pull the element values in from the html
	//name
	$oname = $_POST['name'];
	$name = mysqli_real_escape_string($dbc, $oname);
	
	//username
	$uname = mysqli_real_escape_string($dbc, $_POST['uname']);
	
	//pword
	$pword = mysqli_real_escape_string($dbc, $_POST['pword']);
	
	//salt and hash password
	$pword = password_hash($pword, PASSWORD_DEFAULT);
	
	//email
	$email = mysqli_real_escape_string($dbc, $_POST['email']);
	
	//phone number
	$pNumber = mysqli_real_escape_string($dbc, $_POST['pNumber']);
	
	//verify unique usernames
	$check = mysqli_query($dbc, "select id from customer where uname = '$uname'")
		or die('confirmP read error: '.mysqli_error($dbc));
	if (mysqli_num_rows($check)!=0)
	{
		header("Location: usernameNotAvail.php?&uname=$uname");
		exit;
	}
	
	//build query
	$query = 
	"insert into customer(name,email,uname,pword,phone)" . 
	"values('$name', '$email', '$uname', '$pword', '$pNumber')";
	
	//run the query
	$result = mysqli_query($dbc, $query)
	or die('DB Write Error: ' .mysqli_error($dbc));
	
	//close the db connection
	mysqli_close($dbc);
?>