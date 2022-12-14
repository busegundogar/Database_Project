<?php
include "config.php";
?>
<form action="delete_process_cart.php" method="POST">
<select name="ids">

<?php
    $sql_command =
    "SELECT cart_info, total_price, cartid FROM cart";
    $myresult = mysqli_query($db, $sql_command);
    while($id_rows = mysqli_fetch_assoc($myresult)) {
        $cart_info = $id_rows['cart_info'];
        $total_price = $id_rows['total_price'];
        $cartid = $id_rows['cartid'];
        echo "<option value=$cartid>". $cart_info . " - " . $total_price . "</option>";
    }
?>
</select>
<button>DELETE</button>
</form>

