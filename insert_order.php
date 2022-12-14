<?php
	include "config.php";
	if (!empty($_POST['ostatus'])){
		$ostatus = $_POST['ostatus'];
		$cargo_address = $_POST['cargo_address'];
		$invoice_info = $_POST['invoice_info'];

		$sql_statement = "INSERT INTO orderInfo(ostatus, cargo_address, invoice_info)
		VALUES ('$ostatus', '$cargo_address', $invoice_info')";
		$result = mysqli_query($db, $sql_statement);
		echo $sql_statement;r
		echo "Your result is: " . $result;
	}
	else{
		echo "You did not enter the cargo address!";
	}
?>