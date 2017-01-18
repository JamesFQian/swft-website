<!DOCTYPE html>

<!--
Assignment: Project
projcart.php
Fall 2016
James Qian
-->

<?php
	include("projdb.php");
	include("projectproductfunctions.php");
	
	
	if(isset($_REQUEST['command']) && $_REQUEST['command'] == 'delete' && $_REQUEST['product_id'] > 0)
	{
		remove_product($_REQUEST['productid']);
	}
	elseif(isset($_REQUEST['command']) && $_REQUEST['command'] == 'clear')
	{
		unset($_SESSION['cart']);
	}
	elseif(isset($_REQUEST['command']) && $_REQUEST['command'] == 'update')
	{
		$max = count($_SESSION['cart']);
		
		for($i = 0; $i < $max; $i++)
		{
			$product_id = $_SESSION['cart'][$i]['productid'];
			$quantity = intval($_REQUEST['product'.$product_id]);
			
			if($quantity > 0 && $quantity <= 1000)
			{
				$_SESSION['cart'][$i]['quantity'] = $quantity;
			}
			else 
			{
				$message = 'Some products were not updated! Item quantity must be between 1 and 1000.';
			}
		}
	}
	elseif(isset($_REQUEST['command']) && $_REQUEST['command'] == 'complete')
	{
		header("Location:thanksPurchasing.php");
	}
 
?>

<!--STEP 1-->

<!--
Project
projcart.php
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
    <link type="text/css" rel="stylesheet" href="stylesheetsProject/shopping.css" />
	<script type="text/javascript">
		function del(prod_id)
		{
			if(confirm('Are you sure you want to delete this item?'))
			{
				document.productform.productid.value = prod_id;
				document.productform.command.value = 'delete';
				document.productform.submit();
			}
		}
		
		function clear_cart()
		{
			if(confirm('Are you sure you wish to empty your cart?'))
			{
				document.cartform.command.value = 'clear';
				document.cartform.submit();
			}
		}
		
		function update_cart()
		{
			document.cartform.command.value = 'update';
			document.cartform.submit();
		}
		
		function complete_order()
		{
			document.cartform.command.value = 'complete';
			document.cartform.submit();
		}
	</script>
	
	
    <!-- Web Page Title -->
    <title>Confirm Session</title>

  </head>

  <body>
	<div id="wrapper">
		<?php include('header.php');?>
		<?php include('sidebar.php');?>
		<div id="bodyDiv">
			<p id="cartHeader">Selected Sessions</p>
			<form name="cartform" method="post" >
				<input type="hidden" name="productid" />
				<input type="hidden" name="command" />
				<span id="cont_shop">
					<input type="button" value="Continue Shopping" onclick="window.location.href='phpProject/instructors.php'" />
				</span>
				<div id="formerror"></div>
				<table id="cart_table">
				<?php
					if(isset($_SESSION['cart']) && count($_SESSION['cart']))
					{
						echo '<tr>
						<th>Name</th>
						<th>Price</th>
						<th>Qty</th>
						<th>Amount</th>
						<th>Options</th>
						</tr>';
						
						$max = count($_SESSION['cart']);
						for($i = 0; $i < $max; $i++)
						{
							$product_id = $_SESSION['cart'][$i]['productid'];
							$quantity = $_SESSION['cart'][$i]['quantity'];
							$product_name = get_product_name($dbc,$product_id);
							$product_price = get_price($dbc,$product_id);
							
							if($quantity == 0)
							{
								continue;
							}
							echo '<tr>
							<td>' . $product_name . '</td>
							<td>&#36; ' . $product_price 		. '</td>
							<td><input type="text" name="product' . $product_id . '" value="' .
											$quantity . '" maxlength="4" size="2" /></td>
							<td>&#36; ' . $product_price*$quantity . '</td>
							<td><a href="javascript:del(' . $product_id . ')">Remove Item</a></td>
							</tr>';
						}
						
						echo '<tr>
						<td colspan="2"><strong>Order Total: &#36;' . get_order_total($dbc) . '</strong></td>
						
						<td colspan="3" id="cart_buttons">
						<input type="submit" value="Clear Cart" onclick="clear_cart()">
						<input type="submit" value="Update Cart" onclick="update_cart()">
						<input type="submit" value="Complete Order" onclick="complete_order()">
						</td>
						</tr>';
					}
					else
					{
						echo '<tr><td>There are no items in your shopping cart.</td></tr>';
					}
				?>
				</table>
			</form>
			
			
			
		</div>
	</div>
  </body>

</html>