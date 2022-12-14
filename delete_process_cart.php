<?php
    include "config.php";
    if(!empty($_POST['ids']))
	{
		$cartid = $_POST['ids'];
		$sql_statement =
		"DELETE FROM cart WHERE cartid = $cartid";
		$result = mysqli_query($db, $sql_statement);

        if ($result){
            echo "Record deleted successfully";
        }
		else{
            echo "Error deleting record: " . mysqli_error($db);
        }
	}
?>





