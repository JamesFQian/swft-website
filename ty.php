<!DOCTYPE html>

<!--
Assignment: Project
ty.php
Fall 2016
James Qian
-->

<html lang="en" >

  <head>
    <?php
	if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
		echo '<base href="http://localhost/CIS-425/2167-Fall/Assignments/project/" />';
	else 
		echo '<base href="http://cis425.wpcarey.asu.edu/jfqian/project/" />';
    ?>
	
    <!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	<meta http-equiv="refresh" content="5; url=index"/>
	
    <!-- Favicon link -->
    <link type="image/gif" rel="icon" href="images/swft.ico" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheetsProject/text.css" />

    <!-- Web Page Title -->
    <title>Thanks for Contacting</title>
    </head>
	
    <body>
	<!-- header -->
	<?php include('header.php'); ?>
	
	<!-- sidebar to be put in a separate file -->
	<?php include('sidebar.php'); ?>
	
	<div id="bodyDiv">
		<div class="bodyContent">
			<p>
				<span class="bodyTitle">Thank you for your comments!</span>
				<br/> <br/>
				<p>This page will redirect you to the home page in 5 seconds.</p>
				</div>
	</div> 
	
	<div id="footer">
		<p>
			James Qian - CIS 425
			<br />
			2016 - All Rights Reserved
		</p>
	</div>
		
  </body>

</html>