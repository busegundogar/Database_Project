<?php
	include "config.php";
	if (!empty($_POST['username'])){ // Check username is not empty
		$username = $_POST['username'];
		$cmail = $_POST['cmail'];
		$cpass = $_POST['cpass'];
		$cphone = $_POST['cphone'];
		$caddress = $_POST['caddress'];
		$age = $_POST['age'];
		$sql_statement = "INSERT INTO customer(username, cmail, cpass, cphone, caddress, age)
		VALUES ('$username', '$cmail', '$cpass', '$cphone', '$caddress', $age)";
		$result = mysqli_query($db, $sql_statement);
		echo "Your result is: " . $result;
	}
	else{
		echo "You did not enter your username!";
	}
?>