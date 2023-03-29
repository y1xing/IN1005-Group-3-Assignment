<?php
session_start();
//unset($_SESSION['user_id']);
?>


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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="css/cart.css" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
</head>

<body>
    <?php
    $color = "blue";
    // TEST
    include "navWhite.inc.php";
    ?>

    <main id="cart">


        <!-- contain the entire shopping cart -->
        <div class="shopping-cart-container">
            <!-- contain the left side of the shopping cart -->
            <div class="shopping-cart-container-left">
                <!-- contain the list of products added to the cart -->
                <div class="cart-container">
                    <h1>Review Item and Shipping</h1>
                    <!-- Here goes the list of products added to the cart -->
                    <ul>
                    <?php

                    // Get the cart from the session
                    $cart = $_SESSION['cart'];

                    if (empty($cart)) {
                        echo '<h3>Your cart is empty!</h3>';
                    } else {
                        foreach ($cart as $product) {
                            echo '<li>';
                            echo '<div class="cart-item">';
                            echo '<div class="cart-item-left">';
                            echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                            echo '</div>';
                            echo '<div class="cart-item-middle">';
                            echo '<h2>' . $product['name'] . '</h2>';
                            echo '</div>';
                            echo '<div class="cart-item-right">';
                            echo '<h2>Quantity: ' . $product['quantity'] . '</h2>';
                            echo '<p>Price: $' . $product['price'] . '</p>';
                            echo '</div>';
                            echo '</div>';
                            echo '</li>';
                        }
                    }

                       ?>
                    </ul>
                </div>
                <!-- contain the checkbox for returning customer -->

                <!-- contain the delivery information -->
                <div class="delivery-container">
                    <div class="saveinfo-container">
                        <div class="saveinfo-container-left">
                            <h1>Delivery Information</h1>
                        </div>
<!--                        <div class="saveinfo-container-right">-->
<!--                            <button class="button" id="save information" name="save information">-->
<!--                                <span class="button-content">Save Information</span>-->
<!--                            </button>-->
<!--                        </div>-->
                    </div>
                    <!-- Here goes the form for delivery information -->
                    <!-- add First Name, Last Name, Address, City, State, Zip Code, Phone Number, Email Address -->
                    <form action="process_cart.php" method="post">
                        <div class="container-two-forms">
                            <div class="container-form-half">
                                <label for="fname">First name:*</label>
                                <input type="text" id="fname" required name="fname" placeholder="First Name"/>
                            </div>
                            <div class="container-form-half">
                                <label for="lname">Last name:*</label>
                                <input type="text" id="lname" required name="lname" placeholder="Last Name"/>
                            </div>
                        </div>


                        <div class="container-form">
                            <label for="address">Address:*</label>
                            <input type="text" id="address" required name="address" placeholder="Address"/>
                        </div>
                        <div class="container-two-forms">
                        <div class="container-form-half">
                            <label for="city">City/State:*</label>
                            <input type="text" id="city" required name="city" placeholder="City/State"/>
                        </div>
                        <div class="container-form-half">
                            <label for="state">Postal Code:*</label>
                            <input type="text" id="postal" required maxlength="6" name="postal" placeholder="Postal Code"/>
                        </div>
                        </div>
                        <div class="container-two-forms">
                        <div class="container-form-half">
                            <label for="phone">Mobile:*</label>
                            <input type="text" id="mobile" required name="mobile" placeholder="Mobile"/>
                        </div>
                        <div class="container-form-half">
                            <label for="email">Email:*</label>
                            <input type="email" id="email" required name="email" placeholder="Email"/>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- contain the right side of the shopping cart -->
            <div class="shopping-cart-container-right">
                <div class="summary-container">
                    <h1 class="summary-header">Order Summary</h1>
                    <form class="coupon">
                            <input type="text" id="coupon" name="coupon" placeholder="Enter Coupon Code"/>

<!--                                <button class="button-coupon" id="coupon" name="coupon">-->
<!--                                    <span class="button-content">Apply Coupon</span>-->
<!--                                </button>-->

                    </form>
                    <!-- payment details and payment type -->
                    <div>
                        <h2 class="payment-header">Payment Details</h2>
                        <!-- selection for payment mode -->
                        <div class="payment-check">
                            <input class="big" type="radio" id="cash" name="payment" value="Cash on Delivery"/>
                            <label class="payment-mode" for="cash">Cash on Delivery</label>
                        </div>
                        <div class="payment-check">
                            <input class="big" type="radio" id="credit/debit" name="payment" value="Credit or Debit Card"/>
                            <label class="payment-mode" for="credit/debit">Credit or Debit Card</label
                        </div>
                        <div class="payment-check">
                            <input class="big" type="radio" id="paynow" name="payment" value="Paynow"/>
                            <label class="payment-mode" for="paynow">Paynow</label>
                        </div>
                        <div class="payment-check">
                            <span class="fa-brands fa-cc-mastercard fa-4x "></span>
                            <span class="fa-brands fa-cc-visa fa-4x"></span>
                        </div>
                        <div class="payment-check">
                            <!-- payment details form -->
                            <form>
                                <div class="container-form">
                                    <label for="email">Email:*</label>
                                    <input type="email" id="email" required name="email" placeholder="example@gmail.com"/>
                                </div>
                                <div class="container-form">
                                    <label for="cardname">Name on Card:*</label>
                                    <input type="text" id="cardname" required name="cardname" placeholder="Name on Card"/>
                                </div>
                                <div class="container-form">
                                    <label for="cardnumber">Card Number:*</label>
                                    <input class="fontAwesome" type="text" id="cardnumber" required name="cardnumber" placeholder="&#xf09d; **** **** **** ****"/>
                                </div>
                                <div class="container-two-forms">
                                <div class="container-form-half">
                                    <label for="expdate">Expiry:*</label>
                                    <input type="text" id="expdate" required name="expdate" placeholder="MM/YY"/>
                                </div>
                                <div class="container-form-half">
                                    <label for="cvc">CVC:*</label>
                                    <input type="text" id="cvc" required name="cvc" placeholder="CVC"/>
                                </div>
                                </div>
                                <?php
                                $shipping = 5.00;
                                $coupon = 0.00;
                                $subtotal = 0;
                                foreach($cart as $item) {
                                    $subtotal += $item['price'] * $item['quantity'];
                                }

                                if ($subtotal >= 50 || empty($cart)) {
                                    $shipping = 0.00;
                                    $total = $subtotal - $coupon + $shipping;
                                } else {
                                    $total = $subtotal - $coupon + $shipping;
                                }
                                ?>
                                <!-- Sub Total, Coupon Discount, Shipping, Total -->
                                <div class="container-form-cost cost">
                                    <ul>
                                        <?php
                                        if (empty($cart)) {
                                            echo '<div class="container-form-price">';
                                            echo '<li>Sub Total</li>' . '<li>' . '$' . $subtotal . '</li>';
                                            echo '</div>';
                                            echo '<div class="container-form-price">';
                                            echo '<li>Coupon Discount</li>' . '<li>' . '$' . $coupon . '</li>';
                                            echo '</div>';
                                            echo '<div class="container-form-price">';
                                            echo '<li>Shipping Cost</li>' . '<li>' . '$' . $shipping . '</li>';
                                            echo '</div>';
                                        } else {
                                            echo '<div class="container-form-price">';
                                            echo '<li>Sub Total</li>' . '<li>' . '$' . $subtotal . '</li>';
                                            echo '</div>';
                                            echo '<div class="container-form-price">';
                                            echo '<li>Coupon Discount</li>' . '<li>' . '$' . $coupon . '</li>';
                                            echo '</div>';
                                            echo '<div class="container-form-price">';
                                            echo '<li>Shipping Cost</li>' . '<li>' . '$' . $shipping . '</li>';
                                            echo '</div>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="container-form-cost">
                                    <ul>
                                        <?php
                                        if (empty($cart)) {
                                            echo '<div class="container-form-price">';
                                            echo '<li>Total</li>' . '<li>' . '$' . $total . '</li>';
                                            echo '</div>';
                                        } else {
                                            echo '<div class="container-form-price">';
                                            echo '<li>Total</li>' . '<li>' . '$' . $total . '</li>';
                                            echo '</div>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <!-- Payment Button -->
                                <div class="payment">
                                    <?php
                                    if (empty($cart)) {
                                        echo '<button class="button" id="pay" name="pay">';
                                        echo '<span class="button-content">Pay' . '  $' . $total . '</span>';
                                        echo '</button>';
                                    } else {
                                        echo '<button class="button" id="pay" name="pay">';
                                        echo '<span class="button-content">Pay' . '  $' . $total . '</span>';
                                        echo '</button>';
                                    }
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include "footer.inc.php";
    ?>
</body>

</html>

<!<!-- hi there -->