<?php
	# connection 
	include('config.php');
if(isset($_SESSION['user']))
{
	$id = $_SESSION['user']['id'];
	# get old values of user data
	$getOrders = mysqli_query($connection,"SELECT * FROM orders WHERE user_id = '$id'") or die(mysqli_error($connection));
	# check if user with id exists
	$count = mysqli_num_rows($getOrders);
	if($count==0)
	{
		die("Something went wrong :/");
	}
}
else
{
	die("Something went wrong :/");
}

?>
<!DOCTYPE html>
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
	<title>TRACK</title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Order ID</th>
				<th>Address</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row = mysqli_fetch_array($getOrders)) { ?>
			<tr>
				<td>	
					<?php $orderId = $row["id"]; echo $orderId; ?>
				</td>
				<td>
					<?php 
					$detailsId = $row['cdetails_id'];
					$detailsRow = mysqli_fetch_array(mysqli_query($connection, "SELECT * FROM cdetails WHERE id=$detailsId"));
					echo $detailsRow['name'] . ', ' . $detailsRow['address']; ?>
				</td>
			</tr>	
			<?php } ?>
		</tbody>	
	</table>
	<p>YOU WILL GET YOUR YOUR PIZZA WITHIN IN 30 MIN </p>
</body>
</html>