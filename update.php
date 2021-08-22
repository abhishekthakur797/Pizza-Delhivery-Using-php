<?php
	# connection 
	include('config.php');
if(isset($_SESSION['user']))
{
	$id = $_SESSION['user']['id'];
	# get old values of user data
	$getOld = mysqli_query($connection,"SELECT id,name,password FROM cuser WHERE id = '$id'") or die(mysqli_error($connection));
	# check if user with id exists
	$count = mysqli_num_rows($getOld);
	if($count==0)
	{
		die("Something went wrong :/");
	}
	# collect user info from database
	$row = mysqli_fetch_array($getOld);
	$name = $row[1];
	$id = $row[0];
	$pwd = $row[2];


}
else
{
	die("Something went wrong :/");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
<form method="post">
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<table cellpadding="10">
		<tr>
			<td>
				Password <!-- name or password?? !-->
			</td>
			<td>
				<input type="text" name="pwd" value="<?php echo $pwd ?>">
			</td>
		</tr>		
		<tr>
			<td>
				<input type="submit" name="ok" value="Save Changes">
			</td>
		</tr>
	</table>
</form>
<?php 
if(isset($_POST['ok'])) { 

	if(empty($_POST['pwd'])) 
	{
		 echo 'Password must have a value'; 
	} 
	else 
	{
		$id = $_POST['id'];
        $pwd = $_POST['pwd'];

		# update the new name with id
		$up = mysqli_query($connection,"UPDATE cuser SET password = '$pwd' WHERE id = '$id'") or die(mysqli_error($connection));
		if($up)
		{
			header("Location:view.php?update=success");
		}
	}
 } ?>
</body>
</html>