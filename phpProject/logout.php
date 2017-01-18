<?php
	// project
	// logout.php
	// Fall 2016
	// James Qian
	
	session_id("jfqian");
	session_name("jfqian");
	session_start();
	session_unset("jfqian");
	session_destroy("jfqian");
	$_SESSION = array();
	header('Location: ../');
	exit;
?>