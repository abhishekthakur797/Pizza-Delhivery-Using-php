<?php include ('config.php')?>
<!DOCTYPE html>
<html>
<head>
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
				<h1><a href="#">PROFILE</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="homepage.php">Home</a></li>
					    <li><a href="cart.php" class="button special">MENU</a></li>

					</ul>
				</nav>
			</header>
	<title>
		PROFILE
	</title>
</head>
<body>
	<?php
	if(isset($_GET['msg'])){

		echo "<h1>".$_GET['msg']."</h1>";
	}
	if(isset($_GET['soumyadip']))
	{
		echo $_GET['soumyadip'];
	}
	$user = $_SESSION['user'];
	$userId = $user['id'];
$prepareString = "SELECT * FROM cuser WHERE id=$userId";
$exec = mysqli_query($connection,$prepareString) or die(mysqli_error($connection));
//var_dump($exec->num_rows);

# procedual way
$count = mysqli_num_rows($exec);


# fetch data from database if count is more than 0
if($count > 0) {
	?>
	<table border="1" cellpadding="10">
		<thead>
			<tr>
				<th>
					Name
				</th>
				<th>
					Email
				</th>
				
					<th>
					Password
				</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row=mysqli_fetch_array($exec)){ ?>
			<tr>
				<td>
					<?php echo $row['name']; ?>
				</td>
				<td>
					<?php echo $row['email']; ?>
				</td>
				<td>
					<?php echo $row['password']; ?>
				</td>

				
				<td>
					<a href="update.php" onclick="return confirm('Are you sure you wish to update <?php echo $row[1] ?> record ?')"> Click Here to update </a>
				</td>
			</tr>
		<?php } ?>
		</tbody>
	</table>
	<?php
} else {
	echo "No records found";
}
?>
</body>
</html>