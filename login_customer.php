<form action="welcome.php" method="POST">
<?php
	include "config.php";
	if (!empty($_POST['username'])){ // Check username is not empty

		$username = $_POST['username'];
		$cpass = $_POST['cpass'];

		$sql_statement = "SELECT * FROM customer WHERE cpass = '" . "$cpass" ."' AND username = '" . "$username" . "'";
		$result = mysqli_query($db, $sql_statement);

		while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result
			//If we are in the loop, customer is found
			$cid = $row['cid'];
			$customer_name = $row['username'];
			$cmail = $row['cmail'];
			$cpass = $row['cpass'];
			$cphone = $row['cphone'];
			$caddress = $row['caddress'];
			$age = $row['age'];

			// Start the session
			session_start();
			// Store ID
			$_SESSION['cid'] = $cid;
			$_SESSION['customer_name'] = $customer_name;

			header("refresh: 0; url = welcome.php");
			//echo $cid . " " . $customer_name . " " . $cmail . " " . $cpass . " " . $cphone . " " . $caddress . " " . $age . "<br>" ;
		}

		//alert("Error, user not found");

	}
	else{
		echo "You did not enter your username!";
	}
	
?>
</form>