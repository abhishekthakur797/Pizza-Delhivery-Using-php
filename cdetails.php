<?php include('config.php') ?>
<!DOCTYPE html>
<html>
<head>
		<title>Your Order</title>
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
				<h1><a href="#"> </a>Enter Your Details </h1>
				<nav id="nav">
					<ul>
						
						<li><a href="Homepage.php" class="button special"> Back To Homepage</a></li>

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
			<td>Address </td>
			<td><textarea name="add"></textarea></td>
		</tr>
		<tr>
			<td>House No </td>
			<td><input type="number" name="house"></td>
		</tr>

		<td>Phone no </td>
			<td><input type="number" name="ph"></td>
		</tr>
		
				
			<td><input type="submit" name="ok" value="Pocced to Payment"></td>
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
		$add=$_POST['add'];
		$house=$_POST['house'];
		$ph=$_POST['ph'];

		

		# sanitize all data ( protect from SQL Injection )
		# connection object needs to be passed as argument 1 to the below function
		$name=mysqli_real_escape_string($connection,$name);
		$add=mysqli_real_escape_string($connection,$add);
		$house=mysqli_real_escape_string($connection,$house);
		$ph=mysqli_real_escape_string($connection,$ph);

	


		# upper case first letter of every word in name
		$name = ucwords($name);

		# prepare a SQL Command
        $preparestring="INSERT INTO cdetails (name, address , house , phone) VALUES ('$name','$add','$house','$ph')";
		#execute the above prepared statement
		if(mysqli_query($connection,$preparestring)){
			$lastId = mysqli_insert_id($connection);
			header("Location: checkout.php?id=$lastId");
		}else{
			echo mysqli_error($connection);
		}
	}
		}
?>

</body>
</html>