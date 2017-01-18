<!DOCTYPE html>
<!--STEP 1-->

<!--
Assignment #7
welcome.php
CIS 425 Morning
James Qian
-->
<?php
	// Start a PHP session
	session_id('jfqian');
	session_name('jfqian');
	session_start('jfqian');
	
	//if not logged in, send them back to login page
	if (!isset($_SESSION['jfqian']))
	{
		header('Location: login.php');
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
	<meta http-equiv="refresh" content="5; url=index"/>
	
	<!-- Favicon link -->
	<link type="image/gif" rel="icon" href="images/favicon.ico" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheetsProject/register.css" />
	
    <!-- Web Page Title -->
    <title>Qian Welcome</title>

  </head>

  <body>
	<div id="wrapper">
		<?php include('header.php');?>
		<?php include('sidebar.php');?>
			<div id="bodyDiv">
				<p class="bodyTitle">
					Hello! You are logged in as <?php echo $_SESSION['jfqian']; ?>.
				</p>		
				<p class="bodyTitle">
					This page will redirect you to the home page in 5 seconds.
				</p>
			</div>
			
		</div>
  </body>

</html>