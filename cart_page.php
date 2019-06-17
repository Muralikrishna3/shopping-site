<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Cart Page</title>
	<link rel="stylesheet" type="text/css" href ="index1.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Lifestyle Store</a>

			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li >
						<a href="cart_page.php"><span class=" glyphicon glyphicon-user"></span>Cart</a>
					</li>
					<li>
						<a href="setting.php"><span class="glyphicon-log-in"></span>Settings</a>
					</li>
					<li>
						<a href="logout.php">
							<span class="glyphicon-log-out">
								
							</span>
							Logout
						</a>
					</li>
				</ul>
				
			</div>
		</div>
		
	</nav>
	<div class="container " id="cart">
		<table class="table table-bordered table-hover ">
			<tbody>
				<tr>
					<th>
						item Number
					</th>
					<th>
						Item Name
					</th>
					<th>
						Price
					</th>
					<th>
						
					</th>


				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					<td>
						
					</td>
					
				</tr>
				<tr>
					<td>
						
					</td>
					<td>
						Total
					</td>
					<td>
						Rs 0/-
					</td>
					<td>
						<a href="success.php" class="btn btn-primary">Confirm Order</a>
					</td>
				</tr>
			</tbody>
		</table>
		
	</div>
	<footer>
		<div class="container">
			<center>
				<p>Copyright @ Lifestyle Store. All Rights Reserved| Contact Us:+91 89194848408 </p>
			</center>
		</div>
	</footer>
</body>
</html>