<!DOCTYPE html>

<!--
Assignment: Project
index.htm
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
	
    <!-- Favicon link -->
    <link type="image/gif" rel="icon" href="images/swft.ico" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheetsProject/text.css" />

    <!-- Web Page Title -->
    <title>Southwest Forensics Tutoring</title>
    </head>
	
    <body>
	<!-- header -->
	<?php include('phpProject/header.php'); ?>
	
	<!-- sidebar to be put in a separate file -->
	<?php include('phpProject/sidebar.php'); ?>
	
	<div id="bodyDiv">
		<div class="bodyContent">
				<p><img id="headPhoto" src="images/trophies.jpg" alt="Trophies" /></p>
				<p>
				<span class="bodyTitle">Why trust Southwest Forensics Tutoring?</span>
				</p>
				<p>Because we approach forensics with passion. Unlike other online coaching services that simply want to make a profit, our goal is to provide cost-effective, one-on-one tutoring to students in the Phoenix Metro Area. Our goal is to improve Arizona as a region. Because Arizona's educational system has been defunded and treated as a political issue, extracurricular activities like Speech and Debate are vital. It's our ethical goal to help further the cause of forensics in the Southwest.</p>
				
				<p>
					Please, reach out to us by contacting us or scheduling a session. We look forward to seeing you online or in person!
				</p>
				<p>
					&nbsp;&nbsp;&nbsp;- James Qian
				</p>
				<br />
				<p class="bodyTitle">Follow us on twitter!</p>
				<p><a href="https://twitter.com/SWForensicsC"><img src="images/twitter.png" alt="Twitter" id="twitterLogo" /></a></p>
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