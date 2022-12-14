<?php
	include "config.php";
	if (!empty($_POST['card_number'])){ 
		$card_number = $_POST['card_number'];
		$pay_status = $_POST['pay_status'];
		$safety_num = $_POST['safety_num'];
		$expire_date = $_POST['expire_date'];
		$full_name = $_POST['full_name'];

		$sql_statement = "INSERT INTO payment(card_number, pay_status, safety_num, expire_date, full_name)
		VALUES ('$card_number', '$pay_status', $safety_num, '$expire_date', '$full_name')";
		$result = mysqli_query($db, $sql_statement);
		echo "Your result is: " . $result;
	}
	else{
		echo "You did not enter your username!";
	}
?>