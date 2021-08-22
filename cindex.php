<?php include('config.php');
if(isset($_SESSION['pizza'])){
 header("location:homepage.html");
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login to dashboard
	</title>
	<title>IHD Pizza | Home Page</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1><a href="#">LOGIN HERE </a></h1>
				<nav id="nav">
					<ul>
						<li><a href="homepage.php">Home</a></li>
						<li><a href="cart.php">Menu</a></li>
					    <li><a href="cregister.php" class="button special"> Sign-up</a></li>

					</ul>
				</nav>
			</header>

</head>
<body>
		
	<table>
		<form action="clogin.php" method="post">
			<tr>
				<td>Email </td>
				<td><input type="Email" name="email"></td>
			</tr>
			<tr>
				<td>Password </td>
				<td><input type="Password" name="pwd"></td>
			</tr>
				<td>
					<input type="submit" name="btn" value="Login">
				</td>
			</tr>
		</form>
	</table>
</form>


<?php
if(isset($_GET['err']))
{
	echo $_GET['err'];
}
?>
<div class="6u">
							
							<ul class="icons">
								<li><a href="https://twitter.com/abhishekkiawaz" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="https://www.facebook.com/officialabhishekthakur" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/abhishekthakur_insta/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="https://www.linkedin.com/in/abhishek-thakur-007076148/" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="https://in.pinterest.com/officialabhishekthakur/" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</footer>

	</body>
</html>
</body>
</html>