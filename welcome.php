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
                .topnav a.logout {
                    background-color: red;
                    color: white;
                    float: right;
                }
    </style>
</head>
<body>
    <div class="topnav">
        <a  class="active" href="welcome.php">Welcome</a>
        <a href="customer_products.php">Products</a>
        <a href="search.php">Search</a>
        <a href="shopping_cart.php">Shopping Cart</a>
        <a class="logout" href="logout_customer.php">Log Out</a>
    </div>

    <?php
        include "config.php";
	    session_start();
        // Logged in id
        $cid = $_SESSION['cid'];
        $customer_name = $_SESSION['customer_name'];  
    ?>

    <div style="padding-left:16px">
        <h2>Welcome <?php echo $customer_name ?> ! :)</h2>
        <p>You can use the navigation bar above for adding a new costumer, deleting one, filtering the costumers whose ages are in some range or seeing all the costumers.</p>
	<p>Made by Seden Deniz Taskin (28010) and Buse Gundogar (27931).<p>

    </div>

</body>
</html>