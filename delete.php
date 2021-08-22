<?php
if(isset($_GET['id']))
{
	include('config.php');
	$id = $_GET['id'];

	# execute delete query
	if(mysqli_query($connection,"DELETE FROM cuser WHERE id = '$id'"))
	{
		# header function is used for auto redirection to desired location provided.
		header("Location:view.php?msg=Delete success");
		//echo "Data deleted successfully";
	}
}
?>