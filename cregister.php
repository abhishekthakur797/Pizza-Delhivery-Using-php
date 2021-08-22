<?php include('config.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | Pizza</title>
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
				<h1><a href="#">SIGN UP HERE </a></h1>
				<nav id="nav">
					<ul>
						<li><a href="homepage.php">Home</a></li>
						<li><a href="cart.php">Menu</a></li>
						<li><a href="cindex.php" class="button special"> Login </a></li>

					</ul>
				</nav>
			</header>

	
</head>
<body>
<form method="post">
	<table cellpadding="10">
			<table>
		<tr>
			<td>Name </td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Email </td>
			<td><input type="Email" name="email"></td>
		</tr>
		<tr>
			<td>Password </td>
			<td><input type="Password" name="pwd"></td>
		</tr>
		
		
		
			<td><input type="submit" name="ok" value="Sign up"></td>
		</tr>
	</table>
</form>
 

<?php
if(isset($_POST['ok']))
{
	# validate all data at once
	$err = 0;
	foreach ($_POST as $key => $value) {
		if(empty($value)){
			$err = 1;
		}
	}
	# check if any empty data found or not
	if($err)
	{
		echo "Empty fields found";
	} 
	else
	{
		# collect all post data in local variable
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pwd=$_POST['pwd'];
	

		# sanitize all data ( protect from SQL Injection )
		# connection object needs to be passed as argument 1 to the below function
		$name=mysqli_real_escape_string($connection,$name);
		$email=mysqli_real_escape_string($connection,$email);
		$pwd=mysqli_real_escape_string($connection,$pwd);
	


		# upper case first letter of every word in name
		$name = ucwords($name);

		# check if email already exists
		$check = mysqli_query($connection,"SELECT email FROM cuser WHERE email = '$email'") or die(mysqli_error($connection));
		# check if any user has the email
		if(mysqli_num_rows($check)==1){
			echo "Email already exists";
		}
		else
		{

		# prepare a SQL Command
        $preparestring="INSERT INTO cuser (name, email, password) VALUES ('$name','$email','$pwd')";
		#execute the above prepared statement
		if(mysqli_query($connection,$preparestring)){
			# check if executed and returns true
			echo "New Account Created";
		}else{
			echo mysqli_error($connection);
		}
	}
		}
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