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
    <script defer src="js/main.js">
    </script>
    <script defer src="js/nav.js">

    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js">

    </script>
    <script src="js/swiper-bundle.min.js"></script>
    <script defer src="js/slider.js"></script>
    <link rel="stylesheet" href="css/footer.css" type="text/css">



    <title>Cube World</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Changa' rel='stylesheet'>
    <link rel="stylesheet" href="css/products.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

</head>

<body>
    <?php

    include "navWhite.inc.php";
    ?>

    <main id="main">
        <div class="container-max-width">
            <div class="product-banner">
                <h1 class="banner-header">Use promo code CUBEWRLD for 20% off!</h1>
                <p class="banner-subtitle">Only for first time users</p>
            </div>
        </div>

        <div class="sorting-container">
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
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div id="swiper" class="swiper-wrapper row flex-nowrap flex-xl-wrap justify-center">
                        <div class="swiper-slide col-xl-3 col-auto">
                            <div class="slide_card light-blue">
                                <a href="product_info.php"><img src="../images/products/cube1.png" alt="cube image" class="store-img"/></a>
                            </div>
                            <div class="product-info-container">
                                <div class="product-info">
                                    <h5>3 x 3 Rubik Cube</h5>
                                    <h3>$10.99</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectet...</p>
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
                        <div class="swiper-slide col-xl-3 col-auto">
                            <div class="slide_card light-red">
                                <img src="../images/products/cube2.png" alt="cube image" class="store-img" />
                            </div>
                            <div class="product-info-container">
                                <div class="product-info">
                                    <h5>3 x 3 Rubik Cube</h5>
                                    <h3>$10.99</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectet...</p>
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
                        <div class="swiper-slide col-xl-3 col-auto">
                            <div class="slide_card light-orange">
                                <img src="../images/products/cube3.png" alt="cube image" class="store-img" />
                            </div>
                            <div class="product-info-container">
                                <div class="product-info">
                                    <h5>3 x 3 Rubik Cube</h5>
                                    <h3>$10.99</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectet...</p>
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
                        <div class="swiper-slide col-xl-3 col-auto">
                            <div class="slide_card light-green">
                                <img src="../images/products/cube4.png" alt="cube image" class="store-img" />
                            </div>
                            <div class="product-info-container">
                                <div class="product-info">
                                    <h5>3 x 3 Rubik Cube</h5>
                                    <h3>$10.99</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectet...</p>
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
                        <div class="swiper-slide col-xl-3 col-auto">
                            <div class="slide_card light-orange">
                                <img src="../images/products/cube3.png" alt="cube image" class="store-img" />
                            </div>
                            <div class="product-info-container">
                                <div class="product-info">
                                    <h5>3 x 3 Rubik Cube</h5>
                                    <h3>$10.99</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectet...</p>
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
                        <div class="swiper-slide col-xl-3 col-auto">
                            <div class="slide_card light-green">
                                <img src="../images/products/cube4.png" alt="cube image" class="store-img" />
                            </div>
                            <div class="product-info-container">
                                <div class="product-info">
                                    <h5>3 x 3 Rubik Cube</h5>
                                    <h3>$10.99</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectet...</p>
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
                        <div class="swiper-slide col-xl-3 col-auto">
                            <div class="slide_card light-blue">
                                <img src="../images/products/cube1.png" alt="cube image" class="store-img" />
                            </div>
                            <div class="product-info-container">
                                <div class="product-info">
                                    <h5>3 x 3 Rubik Cube</h5>
                                    <h3>$10.99</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectet...</p>
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
                        <div class="swiper-slide col-xl-3 col-auto">
                            <div class="slide_card light-red">
                                <img src="../images/products/cube2.png" alt="cube image" class="store-img" />
                            </div>
                            <div class="product-info-container">
                                <div class="product-info">
                                    <h5>3 x 3 Rubik Cube</h5>
                                    <h3>$10.99</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectet...</p>
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

                    </div>
                    <div class="swiper-pagination"></div>
                </div>


            </div>
        </div>

    </main>


</body>

</html>

<!<!-- hi there -->