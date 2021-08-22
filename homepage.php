<?php 
	session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
		<style type="text/css">
			.footer {
			background-color: red;
			color:white;
			padding:5px;
			text-align: center;
		}
		</style>
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
				<h1><a href="homepage.php">HOME PAGE</a></h1>
				<nav id="nav">
					<ul>
						<?php if(!isset($_SESSION['user'])) { ?>
						<li><a href="cindex.php" class="button special"> Login </a></li>
					    <li><a href="cregister.php" class="button special"> Sign-up</a></li>
					    <?php } else { $user = $_SESSION['user']; ?>
					    <li><a class="button special" href="view.php"><?php echo $user["name"]; ?></a>
						<li><a href="cart.php" class="button special"> Order </a></li>
					    <li><a href="#" class="button special"> Track</a></li>
					    <li><a href="clogout.php" class="button special"> Logout</a></li>
					    <li><a href="feedback/index.php" class="button special">FEEDBACK</a></li>


						<?php } ?>
					

						<li><a href="index_admin.php" class="button special">ADMIN</a></li>

					</ul>
				</nav>
			</header>
			<?php if(!isset($_SESSION['user'])) { ?>
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2> Welcome </h2>
					<ul class="actions">
						<li><a href="cindex.php" class="button big special">LOGIN</a></li>
						<li><a href="cregister.php" class="button big alt">REGISTER</a></li>
					</ul>
				</div>
			</section>
			<?php } else {  ?>
			<section id="banner">
				<div class="inner">
					<h2> <?php echo "Welcome, " . $user["name"]; ?>  </h2>
					<ul class="actions">
						<li><a href="cart.php" class="button big special">Order Now</a></li>
						<li><a href="track.php" class="button big alt">Track</a></li>
					</ul>
				</div>
			</section>	
			<?php } ?>		
			<p>
				<h1>IHD Pizza: Delivering Happiness</h1>
What’s better than having a crispy melty pizza, you ask?

Having that crispy and melty pizza in the comfort of your own home with the ones you love, we say.

With IHD it is always “Rishton ka time”. Whether it's a treat for your promotion, a kid topping his class or winning the heart of your wife who is too tired to cook after a long day at work! A cheesy slice of the best pizza is all one needs to put things into perspective and start any celebration. Plus, you do not even need to rush to the restaurant to have one now. A call, a few clicks on our website or a few touches on the mobile screen is all you have to do to have that tempting, light-on-the-pocket pizza at your doorstep.

There is something for everyone here. The vegetarians, non-vegetarians, the sides’ lovers and also the ones who love to have something sweet by the time they reach the last bite of the last slice of pizza slice.</p>




			
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
			<div class="footer">
		&copy; Indian Hot Deals Pvt Ltd &trade; &reg;
	</div>

	</body>
</html>