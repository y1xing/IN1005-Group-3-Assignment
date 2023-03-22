<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang="en">

<head>
    <!--jQuery scriptTest-->
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
    <script defer src="js/main.js">
    </script>
    <script defer src="js/toggle.js">

    </script>
    <script defer src="js/nav.js">

    </script>
    <title>Cubeworld</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cart.css" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

</head>
<body>
    <?php
    $color = "blue";

    include "nav.inc.php";
    ?>

    <main id="cart">
        <div class="shopping-cart-container">
            <div class="shopping-cart-container-left">

                <div class="cart-container">
                    <h1>Review Item and Shipping</h1>
                    <!-- Here goes the list of products added to the cart -->
                    <ul>
                        <li>Product 1</li>
                        <li>Product 2</li>
                        <li>Product 3</li>
                        <li>Product 4</li>
                        <li>Product 5</li>
                    </ul>
                </div>

                <div class="checkbox-container">
                    <form>
                        <div>

                            <input type="checkbox" id="returning customer" name="returning customer">Returning Customer?
                        </div>
                    </form>
                </div>

                <div class="delivery-container">
                    <h1>Delivery Information</h1>
                    <!-- Here goes the form for delivery information -->
                    <!-- add First Name, Last Name, Address, City, State, Zip Code, Phone Number, Email Address -->
                    <form>
                        <div class="container-form-half">
                            <label for="fname">First name:*</label>
                            <input type="text" id="fname" required name="fname" placeholder="First Name">
                        </div>
                        <div class="container-form-half">
                            <label for="lname">Last name:*</label>
                            <input type="text" id="lname" required name="lname" placeholder="Last Name">
                        </div>
                        <div class="container-form">
                            <label for="address">Address:*</label>
                            <input type="text" id="address" required name="address" placeholder="Address">
                        </div>
                        <div class="container-form-half">
                            <label for="city">City/State:*</label>
                            <input type="text" id="city" required name="city" placeholder="City/State">
                        </div>
                        <div class="container-form-half">
                            <label for="state">Postal Code:*</label>
                            <input type="text" id="postal" required maxlength="6" name="postal" placeholder="Postal Code">
                        </div>
                        <div class="container-form-half">
                            <label for="phone">Mobile:*</label>
                            <input type="text" id="mobile" required name="mobile" placeholder="Mobile">
                        </div>
                        <div class="container-form-half">
                            <label for="email">Email:*</label>
                            <input type="email" id="email" required name="email" placeholder="Email">
                        </div>
                    </form>
                </div>
            </div>

            <div class="shopping-cart-container-right">
                <div class="summary-container">
                    <h1>Order Summary</h1>
                    <!-- Here goes the list of products and their prices, plus total amount -->
                    <!-- You can also include a button to proceed to checkout -->
                </div>

            </div>
        </div>
    </main>
    <?php
    //include "footer.inc.php";
    ?>
</body>

</html>

<!<!-- hi there -->