<?php
	include "config.php";
	if(!empty($_GET['pid']))
	{
		$pid = $_GET['pid'];
		$sql_statement =
		"DELETE FROM product WHERE pid = $pid";
		$result = mysqli_query($db, $sql_statement);

		if($result){
			header("refresh: 0; url = product_admin.php");
			exit;
        }
	}
?>