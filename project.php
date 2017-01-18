<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
				<span class="bodyTitle">Southwest Forensics Tutoring - Overview</span>
				<br/> <br/>
				Speech and Debate, also known as forensics, is a competitive activity at the High School, Middle School, and collegiate levels. Competitors deliver memorized speeches or debate a topic with another competitor in front of a judge, who then ranks the competitors. Forensics encompasses thousands of students across the United States, who compete almost every weekend at tournaments. Colleges and universities see forensics as a useful extracurricular, and college teams frequently offer scholarships to compete. Many successful individuals have competed in speech and debate, like Hillary Clinton, media personality Oprah Winfrey, and talk show host Stephen Colbert.
				<br/> <br/>
				Southwest Forensics Tutoring is a startup focused on offering educational services and one-on-one coaching at an hourly rate. This coaching can take place in person, in the Phoenix metro area, or online over services like Skype. 
				<br/> <br/>
				Take a look at the links below to see our business proposal!
				<br/> <br/>
			</p>
			<p>
				<span class="bodyTitle">Project Links</span>
			</p>
			<table>
				<tr>
					<td class="projectTableData"><a class="projectLink" href="QianERD.pdf">Entity Relationship Diagram</a></td>
					<td class="projectTableData"><a class="projectLink" href="QianProjectPlan.pdf">Project Plan</a></td>
					<td class="projectTableData"><a class="projectLink" href="QianProjectReport.pdf">Project Report</a></td>
				</tr>
			</table>
			<p>
				<span class="bodyTitle">Competitor Links</span>
			</p>
			<table class="col-10">
				<tr class="col-10">
					<td class="col-03">
						<a href="http://www.3pspeech.com/">
							<img class="competitorImageSquare" src="images/3PLogo.jpg" alt="3P Speech"/>
						</a>
					</td>
					<td class="col-03">
						<a href="http://summitdebateonline.com/">
							<img class="competitorImage" src="images/summitDebate.png" alt="Summit Debate"/>
						</a>
					</td>
					<td class="col-03">
						<a href="http://travisherche.com/">
							<img class="competitorImageSquare" src="images/acePeak.png" alt="Ace Peak Coaching"/>
						</a>
					</td>
				</tr>
			</table>
		</div>
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