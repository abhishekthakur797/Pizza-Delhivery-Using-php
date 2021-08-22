<?php
session_start();
if(isset($_POST['btn']))
{
	include('config.php');

	$err = 0;
	foreach ($_POST as $key => $value) {
		# code...
		if(empty($value)){
			$err = 1;
		}
	}

	if($err)
	{
		echo "Empty fields found";
	}
	else
	{
		$email = $_POST['email'];
		$pwd = $_POST['pwd'];

		# verify if user email and password matches with our database records
		$verify = mysqli_query($connection,"SELECT * FROM cuser WHERE email = '$email' AND password = '$pwd'");
		# count number of rows
		if(mysqli_num_rows($verify)==1)
		{
			# valid user
			$row = mysqli_fetch_array($verify);
			# session variable to store data in server cache for 1440 seconds if screen idle
			$_SESSION['user'] = $row;
			header("Location:homepage.php");
		}
		else
		{
			# invalid user
			header("location:homepage.php?err=Invalid User");
		}
	}
}



?>