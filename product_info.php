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
    <link rel="stylesheet" href="css/product_info.css" type="text/css">

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

include "navWhite.inc.php";
?>

<main id="cart">
    <!-- contain the entire shopping cart -->
    <div class="product-info-container">
        <!-- contain the left side of the shopping cart -->
        <div class="product-info-container-left">
            <!-- contain the list of products added to the cart -->
            <div class="info-img">
                <!-- product info image -->
                <img src="../images/products/cube1.png" alt="cube image"/>
            </div>
<!--            <div class="info-img-small-container">-->
                <!-- 4 small images of the product -->
                <div class="info-img-small">
                    <img src="../images/products/cube1.png" alt="cube image"/>
                </div>
                <div class="info-img-small">
                    <img src="../images/products/cube2.png" alt="cube image"/>
                </div>
                <div class="info-img-small">
                    <img src="../images/products/cube3.png" alt="cube image"/>
                </div>
                <div class="info-img-small">
                    <img src="../images/products/cube4.png" alt="cube image"/>
                </div>
<!--            </div>-->
        </div>
        <!-- contain the right side of the shopping cart -->
        <div class="product-info-container-right">
            <div class="info-container">
                <h2>3 x 3 Rubik Cube</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
                <!-- star rating -->
                <div class="stars-container">
                    <svg class="star-svg" width="32" height="32" viewBox="0 0 32 32">
                        <polygon fill="#13A814" points="16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485" />
                    </svg>
                    <svg class="star-svg" width="32" height="32" viewBox="0 0 32 32">
                        <polygon fill="#13A814" points="16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485" />
                    </svg>
                    <svg class="star-svg" width="32" height="32" viewBox="0 0 32 32">
                        <polygon fill="#13A814" points="16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485" />
                    </svg>
                    <svg class="star-svg" width="32" height="32" viewBox="0 0 32 32">
                        <polygon fill="#13A814" points="16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485" />
                    </svg>
                    <svg class="star-svg" width="32" height="32" viewBox="0 0 32 32">
                        <polygon fill="#13A814" points="16 0 20.485 10.485 32 12.526 24 20.464 26.424 32 16 26.364 5.576 32 8 20.464 0 12.526 11.515 10.485" />
                    </svg>
                </div>
                <h1>$10.99</h1>
                <!-- payment details and payment type -->
                <div>
                    <h2 class="payment-header">Choose quantity</h2>
                    <!-- combine the button and input together -->
                    <form class="quantity-container">
                        <button class="quantity-btn">-</button>
                        <input class="quantity-input" type="text" value="1">
                        <button class="quantity-btn">+</button>
                    </form>
                </div>

            </div>
        </div>
        <!--add review section-->


    </div>
</main>
<?php
include "footer.inc.php";
?>
</body>

</html>

<!<!-- hi there -->