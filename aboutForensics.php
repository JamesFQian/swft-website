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
    <title>James Qian Project</title>
    </head>
	
    <body>
	<!-- header -->
	<?php include('phpProject/header.php'); ?>
	
	<!-- sidebar to be put in a separate file -->
	<?php include('phpProject/sidebar.php'); ?>
	
	<div id="bodyDiv">
		<div class="bodyContent">
			<p>
				<span class="bodyTitle">What is Forensics?</span>
				<br /> <br />
				Speech and Debate, also known as forensics, is a competitive activity at the High School, Middle School, and collegiate levels. Competitors deliver memorized speeches or debate a topic with another competitor in front of a judge, who then ranks the competitors. Forensics encompasses thousands of students across the United States, who compete almost every weekend at tournaments. Colleges and universities see forensics as a useful extracurricular, and college teams frequently offer scholarships to compete. Many successful individuals have competed in speech and debate, like Hillary Clinton, media personality Oprah Winfrey, and talk show host Stephen Colbert.
				<br /> <br />
				Southwest Forensics Tutoring is a startup focused on offering educational services and one-on-one coaching at an hourly rate. This coaching can take place in person, in the Phoenix metro area, or online over services like Skype. 
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