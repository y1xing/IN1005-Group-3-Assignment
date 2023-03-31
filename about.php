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
    <!--<script defer src="js/main.js">-->
    <script defer src="js/nav.js">
    </script>
    <title>About Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Changa' rel='stylesheet'>
    <link rel="stylesheet" href="css/about.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
</head>

<body>
    <?php
    $color = "red";
    include "components/nav.inc.php";
    ?>

    <div>
        <?php
        $text = "About Us";

        include "components/hero.inc.php";
        ?>
    </div>
    <main id="main">
        <div class="bordered-container"></div>
        <div class="container-width">
            <h1 class="header">Our Story</h1>           
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-md-6">
                    <img src="images/team/dave.png" class="kid-img" alt="picture of a kid" >
                </div>
                <div class="col-md-6 right-container">
                    <h1 class="red-text">Started with Dave</h1>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <br>
                    <h1 class="red-text">About Us</h1>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
                
            <div class="container-width">
                <div class="container-max-width section-container">
                    <h1 class="header blue-text">The ALL-STAR Team</h1>     
                    <p class="text1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="container">
                        <div class ="row">
                            <div class="col image_width">
                                <figure>
                                    <img src="images/team/dave.png" alt="Dave" class="all_star_img" >
                                    <figcaption id="figcaption_dave">Dave</figcaption>
                                </figure>
                            </div>
                            <div class="col image_width">
                                <figure>
                                    <img src="images/team/jiakai.png" alt="JiaKai" class="all_star_img" >
                                    <figcaption id="figcaption_jiakai">Jia Kai</figcaption>
                                </figure>
                            </div>
                            <div class="col image_width">
                                <figure>
                                    <img src="images/team/jewel.png" alt="Jewel" class="all_star_img" >
                                    <figcaption id="figcaption_jewel">Jewel</figcaption>
                                </figure>
                            </div>
                            <div class="col image_width">
                                <figure>
                                    <img src="images/team/yf.png" alt="Yu Fei" class="all_star_img" >
                                    <figcaption id="figcaption_yf">Yu Fei</figcaption>
                                </figure>
                            </div>
                            <div class="col image_width">
                                <figure>
                                    <img src="images/team/yx.png" alt="Yi Xing" class="all_star_img" >
                                    <figcaption id="figcaption_yx">Yi Xing</figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <?php
    include "components/footer.inc.php";
    ?>
</body>

</html>
