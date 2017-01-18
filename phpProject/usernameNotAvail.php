<!DOCTYPE html>
<!--STEP 1-->

<!--
Project
usernameNotAvail.php
CIS 425 Morning
James Qian
-->

<html lang="en">
  	<!--STEP 2-->

  <head>
    <!-- Establish correct base from URI -->
	<?php
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
			echo '<base href="http://localhost/CIS-425/2167-Fall/Assignments/Project/">';
		else 
			echo '<base href="http://cis425.wpcarey.asu.edu/jfqian/Project/">';
	?> 
	
	<!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
	<!-- Favicon link -->
	<link type="image/gif" rel="icon" href="images/favicon.ico" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheetsProject/register.css" />
	
    <!-- Web Page Title -->
    <title>Username Not Available</title>

  </head>

  <body>
	<div id="wrapper">
		<?php include('header.php');?>
		<?php include('sidebar.php');?>
			<div id="bodyDiv">
				<div id="confirmationBody">
					<p class="confirmation">
						SORRY!
					</p>
					
					<p class="confirmation">
						Username [
						<span class="red"><?php echo @$_GET['uname']; ?> </span>
						] is not available!
					</p>
					<p class="confirmation">
						Please click <a href="phpProject/checkUsername.php">HERE</a> to see if your desired username is available, or click <a href="register.php">HERE</a> to return to the registration form and try again.
				</p>
				</div>
			</div>
		</div>
  </body>

</html>