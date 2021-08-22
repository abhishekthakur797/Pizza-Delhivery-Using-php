<?php
	include('config.php');

	if (!isset($_SESSION['user'])) {
		header('Location: homepage.php?error=no_user');
	}

	if (!isset($_SESSION['cart']) || empty($_SESSION["cart"])) {
		header('Location: homepage.php?error=no_cart');
	}

	foreach ($_SESSION['cart'] as $key => $cart) {
		print_r($cart);
	}

	$userId = $_SESSION['user']['id'];
	$cdetailsId = $_GET['id'];

	$preparestring="INSERT INTO orders (user_id, cdetails_id) VALUES ('$userId','$cdetailsId')";
	if(mysqli_query($connection,$preparestring)) {
		$lastId = mysqli_insert_id($connection);

		foreach ($_SESSION['cart'] as $key => $cart) {
			$productId = $cart['product_id'];
			$productQuantity = $cart['item_quantity'];

			$preparestring = "INSERT INTO order_items (order_id, product_id, quantity) VALUES ('$lastId', '$productId', '$productQuantity')";

			if(!mysqli_query($connection, $preparestring)) {
				echo mysqli_error($connection);
			}
		}

		unset($_SESSION['cart']);
		header("Location: homepage.php?success=order_placed");
	} else {
		echo mysqli_error($connection);
	}