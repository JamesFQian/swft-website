<!DOCTYPE html>
<!--STEP 1-->

<!--
Assignment Project
confirmP.php
CIS 425 Morning Fall 2016
James Qian
-->

<?php
	//connect to the db
	//change this for local or server
	include('server-connect.php');
	
	//set time zone
	date_default_timezone_set('MST');
	
	//get and store the time of day in a var
	$time= date("G");
	
	//include rest of confirm code
	include('confirmPcode.php');
	
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
	<meta http-equiv="refresh" content="5; url=phpProject/login.php"/>
	
	<!-- Favicon link -->
	<link type="image/gif" rel="icon" href="images/favicon.ico" />
	
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheetsProject/register.css" />
	
    <!-- Web Page Title -->
    <title>Registration Confirmed</title>

  </head>
  <body>

	<?php include('header.php'); ?>
	
	<!-- sidebar -->
	<?php include('sidebar.php'); ?>
	<div id="bodyDiv">
	
			<div id="confirmationBody">
				
				<p class="confirmation">
					<?php
						if ($time < 12)
							echo "Good Morning " . $oname;
						elseif ($time < 17)
							echo "Good Afternoon " . $oname;
						else 
							echo "Good Evening " . $oname;
					?>
				    - Thank you for registering!
				</p>
				<p class="confirmation">
					Your information has been added to our database.
					<br />
					<br />
					You can click the "LOGIN" link above, or let this page
					automatically re-direct you to the LOGIN page in 5 seconds... 
				</p>
			</div>
		</div>
  </body>
</html>