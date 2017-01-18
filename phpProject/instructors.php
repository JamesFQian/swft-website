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
  


	<?php
	include("projdb.php");
	include("projectproductfunctions.php");
	
	if(isset($_REQUEST['command']) && $_REQUEST['command'] == 'add' && $_REQUEST['productid'] > 0)
	{
		$product_id = $_REQUEST['productid'];
		add_to_cart($product_id, 1);
		header("Location:projcart.php");
		exit();
	}
	?>
	
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
    <link type="text/css" rel="stylesheet" href="stylesheetsProject/shopping.css" />
	<script type="text/javascript">
		//determining which button was clicked
		function addtocart(prod_id)
		{
			document.productform.productid.value = prod_id;
			document.productform.command.value = 'add';
			document.productform.submit();
		}
	</script>
	
	
    <!-- Web Page Title -->
    <title>Instructors</title>

  </head>

  <body>
	<div id="wrapper">
		<?php include('header.php');?>
		<?php include('sidebar.php');?>
		<div id="bodyDiv">
			<form name="productform" >
				<input type="hidden" name="productid" />
				<input type="hidden" name="command" />
			</form>
			
			<table id="product_table">
				<?php
					$query = "SELECT * FROM proj_products";
					$result = mysqli_query($dbc, $query) or die("Error querying database");
					while($row = mysqli_fetch_array($result))
					{
						echo '
						<tr>
							<td><img class="shopping_img" alt="Coach Photo" src="' . $row['image'] . '" ></td>	
							<td><p><strong>' . $row['name'] . '</strong></p>
							<p>' . $row['description'] . '</p>
							<p>Hourly Rate: <strong>&#36;' . $row['price'] . '</strong></p>
							</td>
							<td><input type="button" class="cart_buttons" value="Schedule a Session" onclick="addtocart(' . $row['id'] . ')" />
							</td>
						</tr>
						';
					}
				?>
			</table>
		</div>
	</div>
  </body>

</html>