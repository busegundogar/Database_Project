<?php
	include "config.php";
	if(!empty($_GET['cid']))
	{
		$cid = $_GET['cid'];
		$sql_statement =
		"DELETE FROM customer WHERE cid = $cid";
		$result = mysqli_query($db, $sql_statement);

		if($result){
			header("refresh: 0; url = customer_admin.php");
			exit;
        }
	}
?>