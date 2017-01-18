<!-- 
Project
header.php
Fall 2016
James Qian
-->

<?php
	// check to see if session active - if not, start it.
	if (!isset($_SESSION))
	{
		session_id("jfqian");
		session_name("jfqian");
		session_start("jfqian");
	}
	
?>

<table class="col-10" id="header"> <tr>
		<td class="topMenuItem" id="SWFTName"><a class="topMenuLink" href="index.php">Southwest Forensics Tutoring</a></td>
		<td class="topMenuItem"><a class="topMenuLink" href="phpProject/instructors.php">Purchase a Coaching Session</a></td>
		<td class="topMenuItem"><a class="topMenuLink" href="register.php">Register</a></td>
		<?php
			if (isset($_SESSION['jfqian']) && $_SESSION['jfqian'] != "")
				echo'<td class="topMenuItem"><a class="topMenuLink" href="phpProject/logout.php">Logout</a></td>';
			else
				echo'<td class="topMenuItem"><a class="topMenuLink" href="phpProject/login.php">Login</a></td>';
		?>
		<td class="topMenuItem"><img src="images/swft.gif" id="SWFTImage" alt="SWFT Logo"/></td></tr>
</table>