<?php
include "config.php";
?>
<form action="delete_process_payment.php" method="POST">
<select name="ids">

<?php
    $sql_command =
    "SELECT card_number, payid, pay_status, safety_num, expire_date, full_name FROM payment";
    $myresult = mysqli_query($db, $sql_command);
    while($id_rows = mysqli_fetch_assoc($myresult)) {
        $card_number = $id_rows['card_number'];

        $payid = $id_rows['payid'];

        $pay_status = $id_rows['pay_status'];
        $safety_num = $id_rows['safety_num'];
        $expire_date = $id_rows['expire_date'];
        $full_name = $id_rows['full_name'];
        echo "<option value=$payid>". $card_number . " - " . $pay_status . " - "  . $safety_num . " - " . $expire_date . "-" .  $full_name . "</option>";
    }
?>
</select>
<button>DELETE</button>
</form>

