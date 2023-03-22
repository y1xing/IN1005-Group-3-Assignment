<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Training</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
              crossorigin="anonymous">
        <!-- MDBootstap CSS -->
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
          rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/training.css">
        <link rel="stylesheet" href="css/main.css">
        
        <!-- jQuery -->
        <script defer 
                src="https://code.jquery.com/jquery-3.4.1.min.js" 
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" 
                crossorigin="anonymous">        
        </script>
        <!-- Bootstrap JS -->
        <script defer 
                src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" 
                integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" 
                crossorigin="anonymous">
        </script>
        <!-- Custom JS -->
        <script defer src="js/nav.js"></script>
        <script defer src="js/img.js"></script>
    </head>
    
    <body>  
        <header>
            <?php
                $color = "green";
                $text = "Learn CUBING from the <u>BEST</u>";

                include "nav.inc.php";

                include "hero.inc.php";
            ?>
        </header>

        <main class="container-fluid">
            <div class="bordered-container"></div>
            <section id="benefits" class="container">
                <h1 class="header green-text">Why you should learn Cubing</h1>
                <p class="subtitle">Cubing have been around since 1974 and CubeLand is established to boost the multiple benefits of cubig such as:</p>

                <div class="row justify-content-center">
                    <article class="col-4 col-md-3">
                        <div class="ability-container w-100">
                            <img class="w-100 p-0 p-lg-4" src="images/whyCubing/reflexes.png" 
                                alt="Reflexes & Agility" 
                                title="reflexes"/>
                            <p class="ability-text-blue">Reflexes & Agility</p>                            
                        </div>
                    </article>

                    <article class="col-4 col-md-3">
                        <div class="ability-container w-100">
                            <img class="w-100 p-0 p-lg-4" src="images/whyCubing/concentration.png" 
                                alt="Concentration & Configuration" 
                                title="concentration"/>
                            <p class="ability-text-red">Concentration & Configuration</p>
                        </div>
                    </article>

                    <article class="col-4 col-md-3">
                        <div class="ability-container w-100">
                            <img class="w-100 p-0 p-lg-4" src="images/whyCubing/patience.png" 
                                alt="Patience" 
                                title="patience"/>
                            <p class="ability-text-orange">Patience</p>
                        </div>
                    </article>

                    <article class="col-4 col-md-3">
                        <div class="ability-container w-100">
                            <img class="w-100 p-0 p-lg-4" src="images/whyCubing/problem.png" 
                                alt="Problem Solving Skills" 
                                title="problem"/>
                            <p class="ability-text-green">Problem Solving Skills</p>
                        </div>
                    </article>

                    <article class="col-4 col-md-3">
                        <div class="ability-container w-100">
                            <img class="w-100 p-0 p-lg-4" src="images/whyCubing/determination.png" 
                                alt="Determination & Focus" 
                                title="determination"/>
                            <p class="ability-text-orange">Determination & Focus</p>
                        </div>
                    </article>

                    <article class="col-4 col-md-3">
                        <div class="ability-container w-100">
                            <img class="w-100 p-0 p-lg-4" src="images/whyCubing/memory.png" 
                                alt="Memory" 
                                title="memory"/>
                            <p class="ability-text-green">Memory</p>
                        </div>
                    </article>

                    <article class="col-4 col-md-3">
                        <div class="ability-container w-100">
                            <img class="w-100 p-0 p-lg-4" src="images/whyCubing/reduced.png" 
                                alt="Reduced Screen Time" 
                                title="reduced"/>
                            <p class="ability-text-blue">Reduced Screen Time</p>
                        </div>
                    </article>

                    <article class="col-4 col-md-3">
                        <div class="ability-container w-100">
                            <img class="w-100 p-0 p-lg-4" src="images/whyCubing/logical.png" 
                                alt="Logical Understanding" 
                                title="logical"/>
                            <p class="ability-text-red">Logical Understanding</p>
                        </div>
                    </article>
                </div>
            </section>

            <section id="expectations" class="container container-gradient-biege">
                <h1 class="header blue-text">What You Can Expect</h1>
                <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <div class="row justify-content-center expect-row">
                    <article class="col-md-4 expect-container">
                        <div class="d-flex justify-content-center align-items-center square square-gradient-blue">
                            <img class="wrapper-hexagon" 
                                 src="images/wrapper/wrapper-hexagon.png"
                                 alt="Hexagon Wrapper"/>
                            <p class="expect-number">1</p>
                            <p class="expect-text">Buy a package</p>
                        </div>
                    </article>

                    <article class="col-md-4 expect-container">
                        <div class="d-flex justify-content-center align-items-center square square-gradient-green">
                            <img class="wrapper-hexagon"
                                 src="images/wrapper/wrapper-hexagon.png"
                                 alt="Hexagon Wrapper"/>
                            <p class="expect-number">2</p>
                            <p class="expect-text">Fill up form in <br>email</p>
                        </div>
                    </article>

                    <article class="col-md-4 expect-container">
                        <div class="d-flex justify-content-center align-items-center square square-gradient-red">
                            <img class="wrapper-hexagon" src="images/wrapper/wrapper-hexagon.png"
                                 alt="Hexagon Wrapper"/>
                            <p class="expect-number">3</p>
                            <p class="expect-text">Zoom lesson</p>
                        </div>
                    </article>                  
                </div>
            </section>
            
            <section id="trainers" class="container text-center">
                <h1 class="header red-text">Our Trainers</h1>
                <p class="subtitle debug">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                
                <div class="row justify-content-center">
                    <article class="col-sm">
                        <figure>
                            <img class="w-100" src="images/team/dave.png" 
                                alt="Dave" 
                                title="dave"/>
                        </figure>
                        <p>Dave Bryan</p>
                    </article>
                
                    <article class="col-sm">
                        <figure>
                            <img class="w-100" src="images/team/jiakai.png" 
                                alt="Jia Kai" 
                                title="jiakai"/>
                        </figure>
                        <p>Wu Jia Kai</p>
                    </article>
                
                    <article class="col-sm">
                        <figure>
                            <img class="w-100" src="images/team/jewel.png" 
                                alt="Jewel" 
                                title="jewel"/>
                        </figure>
                        <p>Jewel Lim</p>
                    </article>
                
                    <article class="col-sm">
                        <figure>
                            <img class="w-100" src="images/team/yf.png" 
                                alt="Yu Fei" 
                                title="yufei"/>
                        </figure>
                        <p>Wong Yu Fei</p>
                    </article>
                    
                    <article class="col-sm">
                        <figure>
                            <img class="w-100" src="images/team/yx.png" 
                                alt="Yi Xing" 
                                title="yixing"/>
                        </figure>
                        <p>Cheng Yi Xing</p>
                    </article>   
                </div>
            </section>
        </main>
        
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>
