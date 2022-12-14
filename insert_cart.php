<?php
	include "config.php";
	if (!empty($_POST['cart_info'])){ // Check username is not empty
		$cart_info = $_POST['cart_info'];
		$total_price = $_POST['total_price'];
		$sql_statement = "INSERT INTO cart(cart_info, total_price)
		VALUES ('$cart_info', '$total_price')";
		$result = mysqli_query($db, $sql_statement);
		echo "Your result is: " . $result;
	}
	else{
		echo "You did not enter cart info!";
	}
?>