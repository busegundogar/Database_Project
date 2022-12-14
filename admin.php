<?php
include "config.php";
?>
<form action="delete_customer.php" method="POST">
<select name="ids">
<?php
	$sql_command =
	"SELECT cid, username, cmail, cpass, cphone, caddress, age FROM customer";
	$myresult = mysqli_query($db, $sql_command);
	while($id_rows = mysqli_fetch_assoc($myresult)) {
		$cid = $id_rows['cid'];
		$username = $id_rows['username'];
		$cmail = $id_rows['cmail'];
		$cpass = $id_rows['cpass'];
		$cphone = $id_rows['cphone'];
		$caddress = $id_rows['caddress'];
		$age = $id_rows['age'];
		echo "<option value=$cid>". $username . " - " . $cmail . " - " . $cpass . " - " . $cphone . " - " . $caddress . " - " . $age . "</option>";
	}
?>
</select>
<button>DELETE</button>
</form>
