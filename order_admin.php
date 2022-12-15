<?php
    include "config.php"; // Makes mysql connection
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

            .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

                .topnav a:hover {
                    background-color: #ddd;
                    color: black;
                }

                .topnav a.active {
                    background-color: #04AA6D;
                    color: white;
                }
                .topnav a.logout{
                    background-color: red;
                    color:white;
                    float: right;
                }
    </style>


    <style>
        table
        {
        border-style:solid;
        border-color:black;
        border-collapse: collapse;
        width: 90%
        }
        th {
          text-align: left;
        }
    </style>
</head>

<body>
    <div class="topnav">
        <a href="admin_page.html">Welcome</a>
        <a href="customer_admin.php">Customers</a>
        <a href="seller_admin.php">Seller</a>
        <a href="product_admin.php">Products</a>
        <a class="active" href="order_admin.php">Orders</a>
        <a class="logout"href="first_page.html">Log Out</a>

    </div>

    <br>
        
    <?php
    // All variables in config.php are now accessable in this file too
        $sql_statement = "SELECT * FROM orderInfo";
        $result = mysqli_query($db, $sql_statement); // Executing query

        echo "<table border='1'>
        <tr>
        <th>Order Id</th>
        <th>Order Status</th>
        <th>Cargo Address</th>
        <th>Invoice Info</th>
        </tr>";
        while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result

            echo "<tr>";
              echo "<td>" . $row['oid'] . "</td>";
              echo "<td>" . $row['ostatus'] . "</td>";
              echo "<td>" . $row['cargo_address'] . "</td>";
              echo "<td>" . $row['invoice_info'] . "</td>";
              echo "</tr>";

            $oid = $row['oid'];
            $ostatus = $row['ostatus'];
            $cargo_address = $row['cargo_address'];
            $invoice_info = $row['invoice_info'];
   
            //echo $oid . " " . $ostatus . " " . $cargo_address . " " . $invoice_info . " " . "<br>";

            
        }
    ?>


</body>
</html>