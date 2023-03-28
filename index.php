



<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang="en">

<?php
include "head.inc.php";
?>

<body>



    <?php
    $color = "blue";

    include "nav.inc.php";
    ?>


    <div>
        <?php

        $text = "Discover a world of CUBING";
        include "hero.inc.php";
        ?>
    </div>
    <main id="main">

        <div class="bordered-container"></div>
        <div class="container-max-height ">

            <div class="container-max-width">
                <h1 class="header blue-text">Singapore’s FIRST Cubing Training Center</h1>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <img src="images/hero/kiddo.png" class="kid-img" alt="picture of a kid" />
                    </div>
                    <div class="col-md-6 right-container">
                        <h1 class="blue-text">About Us</h1>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <button
                                onclick="window.location.href = '/about.php';"
                                class="button">
                            <span class="button-content">Find out more </span>
                        </button>
                    </div>
                </div>
            </div>



        </div>
        <div class="container-max-height">
            <div class="container-max-width alt-section-container">
                <h1 class="header red-text">We have <u>MANY</u> students</h1>
                <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="row stats-main mb-5">
                    <div class="col-md-4">

                        <div class="stats-container blue">
                            <img src="/images/icons/cubeIcon.png" class="cube-icon" />
                            <div class="number" id="number">
                                <div class="left" id="left"></div>
                                <div class="separator" id="separator">,</div>
                                <div class="right" id="right">0</div>
                            </div>
                            <h3 class="stats-subtitle">Hours Trained</h3>


                            <svg class="svgFilter" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="blurFilter">
                                        <feGaussianBlur id="blurFilterItem" in="SourceGraphic" stdDeviation="13,0" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="stats-container red">
                            <img src="/images/icons/cubeIcon.png" class="cube-icon" />
                            <div class="number" id="number2">
                                <div class="left" id="left2"></div>
                                <div class="separator" id="separator2">,</div>
                                <div class="right" id="right2">0</div>
                            </div>
                            <h3 class="stats-subtitle">Students</h3>


                            <svg class="svgFilter" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="blurFilter">
                                        <feGaussianBlur id="blurFilterItem" in="SourceGraphic" stdDeviation="13,0" />
                                    </filter>
                                </defs>
                            </svg>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stats-container green">
                            <img src="/images/icons/cubeIcon.png" class="cube-icon" />
                            <div class="number" id="number3">
                                <div class="left" id="left3"></div>
                                <div class="separator" id="separator3">,</div>
                                <div class="right" id="right3">0</div>
                            </div>
                            <h3 class="stats-subtitle">Sessions</h3>


                            <svg class="svgFilter" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                <defs>
                                    <filter id="blurFilter">
                                        <feGaussianBlur id="blurFilterItem" in="SourceGraphic" stdDeviation="13,0" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>

                <button
                        onclick="window.location.href = '/training.php';"
                        class="button-red mt-5">
                    <span class="button-content-red">Find out more </span>
                </button>

            </div>
        </div>
        <div class="container-max-height">
            <div class="container-max-width ">
                <h1 class="header green-text">Our Products</h1>
                <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-container blue">
                            <img src="/images/products/cube1.png" alt="product 1" class="product-img" />
                            <h2 class="product-name">4 x 4 Rubik Cube</h2>

                        </div>

                    </div>
                    <div class="col-lg-3 col-sm-6">

                        <div class="product-container red">
                            <img src="/images/products/cube2.png" alt="product 2" class="product-img" />
                            <h2 class="product-name">Megamix</h2>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 ">
                        <div class=" product-container orange">
                            <img src="/images/products/cube3.png" alt="product 3" class="product-img" />
                            <h2 class="product-name">Pyramix</h2>

                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">

                        <div class="product-container green">
                            <img src="/images/products/cube4.png" alt="product 4" class="product-img" />
                            <h2 class="product-name">3 x 3 Rubik Cube</h2>

                        </div>
                    </div>
                </div>


                <button
                        onclick="window.location.href = '/products.php';"
                        class="button-green mt-5">
                    <span class="button-content-green">Browse Products </span>
                </button>



            </div>
        </div>
    </main>
    <?php
     include "footer.inc.php";
    ?>
</body>

</html>

<!<!-- hi there -->