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
        <a class="active" href="customer_admin.php">Customers</a>
        <a href="seller_admin.php">Seller</a>
        <a href="product_admin.php">Products</a>
        <a href="order_admin.php">Orders</a>
        <a class="logout"href="first_page.html">Log Out</a>

    </div>

<br>

    <form action="delete_customer.php" method="POST">
    <?php
    // All variables in config.php are now accessable in this file too
        $sql_statement = "SELECT * FROM customer";
        $result = mysqli_query($db, $sql_statement); // Executing query

        echo "<table border='1'>
        <tr>
        <th>Customer Id</th>
        <th>Username</th>
        <th>Mail address</th>
        <th>Password</th>
        <th>Phone number</th>
        <th>Address</th>
        <th>Age</th>
        </tr>";

        while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result
            $customer_id = $row['cid'];
            $customer_name = $row['username'];
            $cmail = $row['cmail'];
            $cpass = $row['cpass'];
            $cphone = $row['cphone'];
            $caddress = $row['caddress'];
            $age = $row['age'];

            echo "<tr>";
              echo "<td>" . $row['cid']. "</td>";
              echo "<td>" . $row['username'] . "</td>";
              echo "<td>" . $row['cmail']. "</td>";
              echo "<td>" . $row['cpass']. "</td>";
              echo "<td>" . $row['cphone']. "</td>";
              echo "<td>" . $row['caddress'] . "</td>";
              echo "<td>" . $row['age']. "</td>";
              echo "<td> <a href='delete_customer.php?cid=" . $row['cid'] . "'><button>DELETE</a></td>";
              echo "</tr>";

            //echo $customer_id . " " . $customer_name . " " . $cmail . " " . $cpass . " " . $cphone . " " . $caddress . " " . $age . "<br>";
        }
    ?>
    </form>


</body>
</html>

