<?php
	include "config.php";
	if(!empty($_GET['sid']))
	{
		$sid = $_GET['sid'];
		$sql_statement =
		"DELETE FROM seller WHERE sid = $sid";
		$result = mysqli_query($db, $sql_statement);

		if($result){
			header("refresh: 0; url = seller_admin.php");
			exit;
        }
	}
?>
