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
        <a class="active" href="seller_admin.php">Seller</a>
        <a href="product_admin.php">Products</a>
        <a href="order_admin.php">Orders</a>
        <a class="logout"href="first_page.html">Log Out</a>

    </div>

<br>

    <form action="delete_seller.php" method="POST">
    <?php
        $sql_statement = "SELECT * FROM seller";
        $result = mysqli_query($db, $sql_statement); // Executing query

        echo "<table border='1'>
        <tr>
        <th>Seller Id</th>
        <th>Seller Name</th>
        <th>Password</th>
        <th>Address</th>
        <th>Mail address</th>
        <th>Phone number</th>
        </tr>";

        while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result
            $sid = $row['sid'];
            $sname = $row['sname'];
            $spass = $row['spass'];
            $saddress = $row['saddress'];
            $smail = $row['smail'];
            $sphone = $row['sphone'];

            echo "<tr>";
              echo "<td>" . $row['sid']. "</td>";
              echo "<td>" . $row['sname'] . "</td>";
              echo "<td>" . $row['spass']. "</td>";
              echo "<td>" . $row['saddress']. "</td>";
              echo "<td>" . $row['smail']. "</td>";
              echo "<td>" . $row['sphone'] . "</td>";
              echo "<td> <a href='delete_seller.php?sid=" . $row['sid'] . "'><button>DELETE</a></td>";
              echo "</tr>";

            //echo $customer_id . " " . $customer_name . " " . $cmail . " " . $cpass . " " . $cphone . " " . $caddress . " " . $age . "<br>";
        }
    ?>
    </form>


</body>
</html>

