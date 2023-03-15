<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang = "en">
    <head>
        <!--jQuery script test-->
        <script defer
                src ="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity = "sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin = "anonymous">
        </script>
        <script defer
            src = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
            integrity = "sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm"
            crossorigin="anonymous">
        </script>
        <script defer src="js/main.js">
        </script>
        <title>World of Pets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet"
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
              integrity ="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
              crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Changa' rel='stylesheet'>
        <link rel="stylesheet" href="css/about.css" type="text/css">
    </head>
    <body>
        <?php 
            include "nav.inc.php";
        ?>
        <div>
        <header class = "jumbotron text-center bg-dark">
            <section id ="home">
            <h1 id="heading_title">About Us</h1>
            <h2>Home of Singapore's Pet Lovers</h2>
            </section>
        </header>
        </div>
        <main class = "container">
            <div id ="pets">
                <section>
                    <h2 id="h2_title">Our Story</h2>
                    <div class="container">
                        <div class="image">
                            <img src="images/team/dave.png" alt="Our Story">
                        </div>
                        <div class="text">
                            <h3>Started with Dave</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                            <br>
                            <h3>About Us</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                </section>
                <section id="border">
                    <h2 id="all_star_title">The ALL-STAR Team</h2>
                    <p style="text-align: center; padding-bottom: 30px">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="container">
                        <div class="captioned-image">
                            <figure>
                                <img src="images/team/dave.png" alt="Dave" id="all_star_img"/>
                                <figcaption id="figcaption_dave">Dave</figcaption>
                            </figure>
                        </div>                        
                        <div class="captioned-image">
                            <figure>
                                <img src="images/team/jiakai.png" alt="JiaKai" id="all_star_img"/>
                                <figcaption id="figcaption_jiakai">Jia Kai</figcaption>
                            </figure>
                        </div>   
                        <div class="captioned-image">
                            <figure>
                                <img src="images/team/jewel.png" alt="Jewel" id="all_star_img"/>
                                <figcaption id="figcaption_jewel">Jewel</figcaption>
                            </figure>
                        </div>   
                        <div class="captioned-image">
                            <figure>
                                <img src="images/team/yf.png" alt="Yu Fei" id="all_star_img"/>
                                <figcaption id="figcaption_yf">Yu Fei</figcaption>
                            </figure>
                        </div>   
                        <div class="captioned-image">
                            <figure>
                                <img src="images/team/yx.png" alt="Yi Xing" id="all_star_img"/>
                                <figcaption id="figcaption_yx">Yi Xing</figcaption>
                            </figure>
                        </div>   

                </section>
            </div>      
        </main>
    <?php 
        include "footer.inc.php";
    ?>
    </body>
</html>

<!<!-- hi there -->
