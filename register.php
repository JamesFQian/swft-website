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
    <link type="text/css" rel="stylesheet" href="stylesheetsProject/register.css" />

    <!-- Web Page Title -->
    <title>James Qian Project</title>
    </head>
	
    <body>
	<!-- header -->
	<?php include('phpProject/header.php'); ?>
	
	<!-- sidebar -->
	<?php include('phpProject/sidebar.php'); ?>
	
	<div id="bodyDiv">
		<p id="formTitle">
			Just one step left - Create your account!
		</p>
		<!-- Form -->
		<form id="regform" action="phpProject/confirmP.php" method="post">
			
			<p>
				<!-- name -->
				
				<input type="text" id="name" name="name" 
				autofocus
				required
				title="Name: 3-30 characters, letters and -, spaces, and apostrophes."
				pattern="[a-zA-Z-' ]{3,30}"
				placeholder=" Student's Name"
				/>
				<br />
				
				<!-- username -->
				<input type="text" id="uname" name="uname" 
				required
				title="Username: 5-15 characters, letters, numbers, _, -, $, ! only, no spaces."
				pattern="[a-zA-Z0-9-_!$]{5,15}"
				placeholder=" Username"
				/>
				<br />
				
				<!-- password -->
				<input type="password" id="pword" name="pword" 
				required
				title="Password: 5-15 characters, letters, numbers, _, -, $, ! only, no spaces."
				pattern="[a-zA-Z0-9-_!$]{5,15}"
				onchange="form.reenter.pattern=this.value"
				placeholder=" Password"
				/>
				<br />
			
				<!-- reenter password -->
				<input type="password" id="reenter" name="reenter"
				required						
				title="Passwords must match."
				placeholder=" Re-enter Password"
				/>
				<br />
				<!-- required pattern type title -->
				
				<!-- email -->
				<input type="email" id="email" name="email" 
				title="Email: 6-50 characters, valid email only." 
				pattern="[a-z0-9-_!$.]+@[a-z0-9-_]+\.[a-z]{2,16}"
				maxlength="50"
				required
				placeholder=" Email"
				/>
				<br />
				
				<input type="text" id="pNumber" name="pNumber" 
				required
				title="Phone number - must be a valid phone number without '-' or '()'."
				pattern="[0-9]{10,12}"
				placeholder=" Phone Number: ##########"
				/>
				<br />
				
			</p>
			<p class="submit">
				<input type="submit" value="SUBMIT" class="button"/>
				<span class="reset">
					<input type="reset" value="CLEAR" onclick="history.go(0)" class="button"/>
				</span>
				<span class="check">
					<input type="submit" value="CHECK USERNAME" onclick="window.location.href='phpProject/checkUsername.php'"  class="button"/>
				</span>
			</p>
		</form>
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