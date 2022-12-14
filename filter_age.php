<?php
    include "config.php"; // Makes mysql connection
    // All variables in config.php are now accessable in this file too
    $num_1 = $_POST["num1"];
    $num_2 = $_POST["num2"];
    $sql_statement =
    "SELECT * FROM customer WHERE age >" . $num_1 ." AND age < " . $num_2;
    $result = mysqli_query($db, $sql_statement); // Executing query
    while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result
        $customer_id = $row['cid'];
        $customer_name = $row['username'];
        $cmail = $row['cmail'];
        $cpass = $row['cpass'];
        $cphone = $row['cphone'];
        $caddress = $row['caddress'];
        $age = $row['age'];
        echo $customer_id . " " . $customer_name . " " . $cmail . " " . $cpass . " " . $cphone . " " . $caddress . " " . $age . "<br>" ;
    }
?>
