<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
						<a href="signup.php"><span class="glyphicon-user"></span>Sign Up</a>
					</li>
					<li>
						<a href="login.php"><span class="glyphicon-login"></span>Login</a>
					</li>
				</ul>
				
			</div> 
		</div>
	</nav>
	<br>
	<div class="container " id="log">
		<div class="row row_style">
			<div class="col-xs-4">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h6>LOGIN</h6>
					</div>
					<div class="panel-body">
						<p class="text-warming">Login to make a purchase</p>
						<form>
							<div class="form-group">
								<input type="text" name="Email" placeholder="Email" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" name="Password" placeholder="Password" class="form-control">
							</div>
							<input  type="submit" name="submit" class="btn btn-primary">
						</form>

					</div>
					<div class="panel-footer">
						<p>Dont have an account?Register</p>
					</div>
				</div>
				</div>
			</div>
		</div>		
	</div>	
	<?php
	include 'footer.php';
	?>

</body>
</html>