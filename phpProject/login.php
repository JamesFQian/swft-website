<!DOCTYPE html>
<!--STEP 1-->

<!--
project
login.php
CIS 425 Morning
James Qian
-->

<?php
	// Start a PHP session
	session_id('jfqian');
	session_name('jfqian');
	session_start('jfqian');
	
	//if not logged in, send them back to login page
	if (isset($_SESSION['jfqian']))
	{
		header('Location: welcome.php');
		exit;
	}
	
?>

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
    <title>Qian Login</title>

  </head>

  <body>
	<div id="wrapper">
		<?php include('header.php');?>
		<?php include('sidebar.php'); ?>
			<div id="bodyDiv">
				<p class="bodyTitle">
					Enter your Username and Password below to login.
				</p>
					
			<!-- Form -->
			<form id="loginForm" action="phpProject/process.php" method="post">
				<p class="bodyTitle">Login Form</p>
				<p class="logerr">
					<?php
						if (isset($_GET['rc']))
						{
							// check return code from process.php
							if ($_GET['rc'] == 1)
								echo 'Invalid Username or Password!';
							if ($_GET['rc'] == 2)
								echo 'Invalid Username or Password!';
							if ($_GET['rc'] == 3)
								echo 'Process worked...!';
						}
					?>
				</p>
					<p>
						<!-- username -->
						<label for="uname">Username:</label>
						<input type="text" id="uname" name="uname" 
						required
						autofocus
						title="Username: 5-15 characters, letters, numbers, _, -, $, ! only, no spaces."
						pattern="[a-zA-Z0-9-_!$]{5,15}"
						placeholder="Username"
						/>
						<br />
						
						<!-- password -->
						<label for="pword">Password:</label>
						<input type="password" id="pword" name="pword" 
						required
						title="Password: 5-15 characters, letters, numbers, _, -, $, ! only, no spaces."
						pattern="[a-zA-Z0-9-_!$]{5,15}"
						placeholder="Password"
						/>
						<br />
					</p>
					
						<!-- submit and clear buttons -->
					<p class="submit">
						<input type="submit" value="SUBMIT" />
						<span class="reset">
							<input type="reset" value="CLEAR" onclick="history.go(0)"/>
						</span>
						<span class="check">
							<input type="submit" value="BACK TO REGISTER" onclick="window.location.href='register'"/>
						</span>
					</p>
			</form>
			</div>
		</div>
  </body>

</html>