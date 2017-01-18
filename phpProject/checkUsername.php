<!DOCTYPE html>
<!--STEP 1-->

<!--
Project
checkusername.php
CIS 425 Morning
James Qian
-->

<html lang="en">
  	<!--STEP 2-->

  <head>
    <!-- Establish correct base from URI -->
	<?php
		if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
			echo '<base href="http://localhost/CIS-425/2167-Fall/Assignments/project/">';
		else 
			echo '<base href="http://cis425.wpcarey.asu.edu/jfqian/project/">';
	?> 
	
	<!-- Meta tag -->
    <meta charset="utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
	<!-- Favicon link -->
	<link type="image/gif" rel="icon" href="images/favicon.ico" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheetsProject/register.css" />
	
    <!-- Web Page Title -->
    <title>Qian Check Username</title>

  </head>

  <body>
	<div id="wrapper">
		<?php include('header.php');?>
		<?php include('sidebar.php');?>
			<div id="bodyDiv">
				<p class="bodyTitle">
					Enter your desired Username below and we'll tell you if it's available.
				</p>
			<!-- Form -->
			<form id="regform" action="phpProject/uncheck.php" method="post">
				<p class="bodyTitle">Check Username Form</p>
					<p>
						<!-- username -->
						<label for="uname">Username:</label>
						<input type="text" id="uname" name="uname" 
						autofocus
						required
						title="Username: 5-15 characters, letters, numbers, _, -, $, ! only, no spaces."
						pattern="[a-zA-Z0-9-_!$]{5,15}"
						placeholder="Username to Check"
						/>
						<br />
						
						<!-- Username checked -->
						<label for="unchecked">Username Checked:</label>
						<input type="text" id="unchecked" name="unchecked"
						disabled
						placeholder="Username Checked"
						value="<?php echo @$_GET['uname']; ?>"
						/>
						<br />
						
						<!-- Username stats -->
						<label for="unstatus">Username Status:</label>
						<input type="text" id="unstatus" name="unstatus" 
						disabled
						placeholder="Username Status"
						value="<?php echo @$_GET['status']; ?>"
						/>
						<br />
						
					</p>
					
						<!-- submit and clear buttons -->
					<p class="submit">
						<input type="submit" value="CHECK" />
						
						<span class="check">
							<input type="submit" value="BACK TO REGISTER" onclick="window.location.href='register.php'"/>
						</span>
					</p>
			</form>
		</div>
		</div>
  </body>

</html>