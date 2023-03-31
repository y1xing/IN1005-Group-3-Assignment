<?php

session_start()

?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--jQuery script test-->
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
<!--    <script defer src="js/main.js">-->
<!--    </script>-->
    <script defer src="js/nav.js"></script>
    <script defer src="js/products.js"></script>
    <script defer src="js/toast.js"></script>
<!--    <script defer src="js/chatbot.js"></script>-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" >
    <link rel="stylesheet" href="css/swiper-bundle.min.css" >

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js">

    </script>
    <script src="js/swiper-bundle.min.js"></script>
    <script defer src="js/slider.js"></script>
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/toast.css" type="text/css">
<!--    <link rel="stylesheet" href="css/chatbot.css" type="text/css">-->



    <title>Products</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Changa' rel='stylesheet'>
    <link rel="stylesheet" href="css/products.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">



</head>

<body>
    <?php
    // test
    include "components/navWhite.inc.php";
    ?>

    <main id="main">

        <div class="container-max-width">
            <?php
            $toastMessage = "Item has been added to cart!";
            include "helper/toast.php";
            //
            ?>

            <div class="product-banner">
                <h1 class="banner-header">Spend $50 or more for free shipping!</h1>
<!--                <p class="banner-subtitle">Only for first time users</p>-->
            </div>
        </div>


        <div class="products-main-container container-max-width">
            <h1>Cubing For You!</h1>
            <cite>Images from <a href="https://speedcubeshop.com/">Speed cube shop</a></cite>
            <div class="products-container">

                <?php

                // Get the products from the database
                include "logic/get_products.php";

                $products = getProducts();

                ?>

                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div id="swiper" class="swiper-wrapper row flex-nowrap flex-xl-wrap justify-center">

                        <?php
                        // Loop through the products array and display the products


                        $color = array("light-blue", "light-red", "light-orange", "light-green", "light-orange", "light-green", "light-red", "light-blue");
                        $images = array("cube1.png", "cube2.png", "cube3.png", "cube4.png", "cube1.png", "cube2.png", "cube4.png", "cube4.png");

                        for ($i = 0; $i < count($products); $i++) {
                            $product = $products[$i];
                            $id = $product['id'];
                            $name = $product['name'];
                            $price = $product['price'];
                            $description = $product['description'];
                            $image = $product['image'];
                            $type = $product['type'];
                            $brand = $product['brand'];
                            $rating = $product['product_type'];

                        ?>

                        <div class="swiper-slide col-xl-3 col-auto">

                            <div class="slide_card <?php echo $color[$i] ?>"
                            onclick="window.location.href='product_info.php?id=<?php echo $id ?>'"

                            >

                                <img src='<?php echo $image ?>' alt="cube image" class="store-img" >
                            </div>
                            <div class="product-info-container">
                                <div class="product-info">
                                    <h5><?php echo $name ?></h5>
                                    <h3>$<?php echo $price ?></h3>
                                </div>
                                <p><?php echo $description ?></p>
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





                                <button class="open add-to-cart"
                                        data-product-id="<?php echo $id ?>"
                                        data-product-name="<?php echo $name ?>"
                                        data-product-price="<?php echo $price ?>"
                                        data-product-quantity="1"
                                        data-product-image="<?php echo $images[$i] ?>"
                                        data-product-color="<?php echo $color[$i] ?>"
                                >Add to cart</button>
                            </div>

                        </div>

                        <?php


                        }
                        ?>


                    </div>
                    <div class="swiper-pagination"></div>
                </div>


            </div>
        </div>

    </main>
    <?php include 'components/footer.inc.php'; ?>
</body>




</html>





