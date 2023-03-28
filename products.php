

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang="en">

<head>
    <!--jQuery script test-->
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
<!--    <script defer src="js/main.js">-->
<!--    </script>-->
    <script defer src="js/nav.js"></script>
    <script defer src="js/products.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js">

    </script>
    <script src="js/swiper-bundle.min.js"></script>
    <script defer src="js/slider.js"></script>
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/toast.css" type="text/css">



    <title>Cube World</title>
    <meta charset="UTF-8">
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

    include "navWhite.inc.php";
    ?>

    <main id="main">




        <div class="container-max-width">
            <?php
            include "helper/toast.php";
            ?>



            <div class="product-banner">
                <h1 class="banner-header">Use promo code CUBEWORLDDD for 20% off!</h1>
                <p class="banner-subtitle">Only for first time users</p>
            </div>
        </div>

        <div class="sorting-container">
            <button id="open" class="open btn btn-primary">Open Toast</button>

            <select class="form-select red" aria-label="Default select example">
                <option selected>Type</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <select class="form-select orange" aria-label="Default select example">
                <option selected>Product Type</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <select class="form-select green" aria-label="Default select example">
                <option selected>Brand</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="products-main-container container-max-width">
            <h1>Cubing For You!</h1>
            <div class="products-container">

                <?php

                // Initialize a all product array
                $products = array();




                // Get the products from the database
                $config = parse_ini_file('../private/db-config.ini');
                $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);



                if ($conn->connect_error) {
                    $errorMsg = "Connection failed: " . $conn->connect_error;
                    $success = false;
                    echo "<h1>Error</h1>";
                } else {
                    $stmt = $conn->prepare("SELECT * FROM products");

                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        // echo out the products
                        while ($row = $result->fetch_assoc()) {
                            // Store the product data in an array
                            $individual_product = array(
                                "id" => $row['id'],
                                "name" => $row['name'],
                                "price" => $row['price'],
                                "description" => $row['description'],
                                "image" => $row['image'],
                                "type" => $row['type'],
                                "brand" => $row['brand'],
                                "rating" => $row['rating']
                            );

                            // Append the product to the products array
                            array_push($products, $individual_product);

                        }


                    } else {
                        $errorMsg = "Unable to find any products";
                        $success = false;
                    }

                    $stmt->close();
                }

                $conn->close();


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
//                            $image = $product['picture_path'];
                            $type = $product['type'];
                            $brand = $product['brand'];
                            $rating = $product['product_type'];


                        ?>

                        <div class="swiper-slide col-xl-3 col-auto">

                            <div class="slide_card <?php echo $color[$i] ?>">

                                <img src='./images/products/<?php echo $images[$i] ?>' alt="cube image" class="store-img" />
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
                                <button>Add to cart</button>
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


</body>

<?php include 'footer.inc.php'; ?>


</html>





<!<!-- hi there -->