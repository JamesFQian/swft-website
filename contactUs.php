<!DOCTYPE html>

<!--
Assignment: Project
index.htm
Fall 2016
James Qian
-->

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

  <head>
    <?php
	if (substr($_SERVER['HTTP_HOST'],0,9) == 'localhost')
		echo '<base href="http://localhost/CIS-425/2167-Fall/Assignments/project/" />';
	else 
		echo '<base href="http://cis425.wpcarey.asu.edu/jfqian/project/" />';
    ?>
	
    <!-- Meta tag -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="robots" content="noindex,nofollow" />
	
    <!-- Favicon link -->
    <link type="image/gif" rel="icon" href="images/swft.ico" />
	
    <!-- Link tag for CSS -->
    <link type="text/css" rel="stylesheet" href="stylesheetsProject/register.css" />

    <!-- Web Page Title -->
    <title>Contact Us!</title>
    </head>
	
    <body>
	<!-- header -->
	<?php include('phpProject/header.php'); ?>
	
	<!-- sidebar -->
	<?php include('phpProject/sidebar.php'); ?>
	
	<div id="bodyDiv">
		<p id="formTitle">
			Please reach out to us with any concerns.
		</p>
		<!-- Form -->
		<form id="regform" action="https://webapp4.asu.edu/pubtools/Mail" method="post">
				<p>Enter your information below!</p>
					<p>
						<!-- 3 hidden elements for SMTP email processing -->
						<!-- This element controls where the email goes -->
						<input type="hidden" name="sendto" value="james.qian@asu.edu" />
						
						<!-- This element controls the subject line of the email -->
						<input type="hidden" name="subject" value="Website Inquiry" />
						
						<!-- This element controls where the smtp processor replies -->
						<input type="hidden" name="location"
						value="http://cis425.wpcarey.asu.edu/jfqian/project/ty.php" />
						
						<!-- name -->
						<label for="name">Name:</label>
						<input type="text" id="name" name="name" 
						autofocus
						required
						title="Name: 3-30 characters, letters and -, spaces, and apostrophes."
						pattern="[a-zA-Z-' ]{3,30}"
						/>
						<br />
						
						<!-- email -->
						<label for="email">Email:</label>
						<input type="email" id="email" name="email" 
						title="Email: 6-50 characters, valid email only." 
						pattern="[a-z0-9-_!$.]+@[a-z0-9-_]+\.[a-z]{2,16}"
						maxlength="50"
						required
						/>
						<br />
						<br />

						<!--Comments -->
						<label for="comments">Comments:</label><br />
						<textarea id="comments" name="comments" rows="3" cols="48" 
						required title="Please enter your comments: 500 characters max." 
						maxlength="500" onfocus="hint(this.id)"></textarea>
						<br />
						
					</p>
					
						<!-- submit and clear buttons -->
					<p class="submit">
						<input type="submit" value="SEND EMAIL"/>
						<span class="reset">
							<input type="reset" value="CLEAR" onclick="history.go(0)"/>
						</span>
					</p>
			</form>
	</div> 
	
	<div id="footer">
		<p>
			James Qian - CIS 425
			</br>
			2016 - All Rights Reserved
		</p>
	</div>
		
  </body>

</html>
