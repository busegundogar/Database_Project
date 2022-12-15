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
        <a href="welcome.php">Welcome</a>
        <a class="active" href="customer_products.php">Products</a>
        <a href="search.php">Search</a>
        <a href="shopping_cart.php">Shopping Cart</a>
        <a class="logout" href="logout_customer.php">Log Out</a>

    </div>

    <br>
<form action="add_to_cart.php" method="POST">
<?php
    // All variables in config.php are now accessable in this file too
        $sql_statement = "SELECT * FROM product";
        $result = mysqli_query($db, $sql_statement); // Executing query

        echo "<table border='1'>
        <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Color</th>
        <th>Size</th>
        <th>Price</th>
        </tr>";

        while($row = mysqli_fetch_assoc($result)) { // Fetch and iterate the result

            $pid = $row['pid'];
            $pname = $row['pname'];
            $category = $row['category'];
            $color = $row['color'];
            $size= $row['size'];
            $price = $row['price'];

              echo "<tr>";
              echo "<td>" . $row['pid']. "</td>";
              echo "<td>" . $row['pname'] . "</td>";
              echo "<td>" . $row['category']. "</td>";
              echo "<td>" . $row['color']. "</td>";
              echo "<td>" . $row['size']. "</td>";
              echo "<td>" . $row['price'] . "</td>";
              echo "<td> <a href='add_to_cart.php?pid=" . $row['pid'] . "'><button>ADD TO CART</a></td>";
              echo "</tr>";
            //echo $pid . " " . $pname. " " . $category . " " . $color . " " . $size . " " . $price . " " ."<br>";
        }
    ?>
    </form>

</body>
</html>