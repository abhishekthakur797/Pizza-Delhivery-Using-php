<?php include ('config.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Admin View users
	</title>
</head>
<body>
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
	<?php
	if(isset($_GET['msg'])){

		echo "<h1>".$_GET['msg']."</h1>";
	}
	if(isset($_GET['soumyadip']))
	{
		echo $_GET['soumyadip'];
	}
$prepareString = "SELECT * FROM cuser";
$exec = mysqli_query($connection,$prepareString) or die(mysqli_error($connection));
//var_dump($exec->num_rows);

# procedual way
$count = mysqli_num_rows($exec);

echo "No of records found ".$count.'<br>';

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
					<?php echo $row[1] ?>
				</td>
				<td>
					<?php echo $row[2] ?>
				</td>
				<td>
					<?php echo $row['password'] ?>
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