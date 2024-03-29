<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang="en">
    <head>
        <title>Training</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Google API Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
        
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
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/training.css">
        <link rel="stylesheet" href="css/footer.css">
       
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
        
        <?php
            $color = "green";        
            
            include "components/nav.inc.php";
        ?>
        
        <header>
            <?php
                $text = "Learn CUBING from the <u>BEST</u>";

                include "components/hero.inc.php";
            ?>
        </header>

        <main>
            <div class="bordered-container"></div>
            <section id="benefits" class="container-max-height">
                <div class="container-max-width">
                    <h2 class="header green-text">Why you should learn Cubing</h2>
                    <p class="subtitle training-subtitle">Cubing have been around since 1974 and CubeLand is established to boost the multiple benefits of cubig such as:</p>

                    <div class="row justify-content-center ability-row">
                        <article class="col-4 col-md-3">
                            <div class="ability-container w-100">
                                <img class="w-100 p-0 p-lg-4" src="images/whyCubing/reflexes.png"
                                    alt="Reflexes & Agility" 
                                    title="reflexes">
                                <h5 class="ability-text-blue">Reflexes & Agility</h5>                            
                            </div>
                        </article>

                        <article class="col-4 col-md-3">
                            <div class="ability-container w-100">
                                <img class="w-100 p-0 p-lg-4" src="images/whyCubing/concentration.png" 
                                    alt="Concentration & Configuration" 
                                    title="concentration">
                                <h5 class="ability-text-red">Concentration & Configuration</h5>
                            </div>
                        </article>

                        <article class="col-4 col-md-3">
                            <div class="ability-container w-100">
                                <img class="w-100 p-0 p-lg-4" src="images/whyCubing/patience.png" 
                                    alt="Patience" 
                                    title="patience">
                                <h5 class="ability-text-orange">Patience</h5>
                            </div>
                        </article>

                        <article class="col-4 col-md-3">
                            <div class="ability-container w-100">
                                <img class="w-100 p-0 p-lg-4" src="images/whyCubing/problem.png" 
                                    alt="Problem Solving Skills" 
                                    title="problem">
                                <h5 class="ability-text-green">Problem Solving Skills</h5>
                            </div>
                        </article>

                        <article class="col-4 col-md-3">
                            <div class="ability-container w-100">
                                <img class="w-100 p-0 p-lg-4" src="images/whyCubing/determination.png" 
                                    alt="Determination & Focus" 
                                    title="determination">
                                <h5 class="ability-text-orange">Determination & Focus</h5>
                            </div>
                        </article>

                        <article class="col-4 col-md-3">
                            <div class="ability-container w-100">
                                <img class="w-100 p-0 p-lg-4" src="images/whyCubing/memory.png" 
                                    alt="Memory" 
                                    title="memory">
                                <h5 class="ability-text-green">Memory</h5>
                            </div>
                        </article>

                        <article class="col-4 col-md-3">
                            <div class="ability-container w-100">
                                <img class="w-100 p-0 p-lg-4" src="images/whyCubing/reduced.png" 
                                    alt="Reduced Screen Time" 
                                    title="reduced">
                                <h5 class="ability-text-blue">Reduced Screen Time</h5>
                            </div>
                        </article>

                        <article class="col-4 col-md-3">
                            <div class="ability-container">
                                <img class="w-100 p-0 p-lg-4" src="images/whyCubing/logical.png" 
                                    alt="Logical Understanding" 
                                    title="logical">
                                <h5 class="ability-text-red">Logical Understanding</h5>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section id="expectations" class="container-max-height">
                <div class="container-max-width alt-section-container">
                    <h2 class="header blue-text">What You Can Expect</h2>
                    <p class="subtitle training-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                    <div class="row justify-content-center expect-row">
                        <article class="col-md-4 expect-container">
                            <div class="d-flex justify-content-center align-items-center square square-gradient-blue">
                                <img class="wrapper-hexagon" 
                                     src="images/wrapper/wrapper-hexagon.png"
                                     alt="Hexagon Wrapper">
                                <p class="expect-number">1</p>
                                <h5 class="expect-text">Buy a package</h5>
                            </div>
                        </article>

                        <article class="col-md-4 expect-container">
                            <div class="d-flex justify-content-center align-items-center square square-gradient-green">
                                <img class="wrapper-hexagon"
                                     src="images/wrapper/wrapper-hexagon.png"
                                     alt="Hexagon Wrapper">
                                <p class="expect-number">2</p>
                                <h5 class="expect-text">Fill up form in <br>email</h5>
                            </div>
                        </article>

                        <article class="col-md-4 expect-container">
                            <div class="d-flex justify-content-center align-items-center square square-gradient-red">
                                <img class="wrapper-hexagon" src="images/wrapper/wrapper-hexagon.png"
                                     alt="Hexagon Wrapper">
                                <p class="expect-number">3</p>
                                <h5 class="expect-text">Zoom lesson</h5>
                            </div>
                        </article>                  
                    </div>
                    
                    <button
                            onclick="window.location.href='/products.php'"
                            class="button">
                        <span class="button-content progress-text">Book a lesson now!</span>
                    </button>
                </div>
            </section>
            
            <section id="trainers" class="container-max-height">
                <div class="container-max-width">
                    <h2 class="header red-text">Our Trainers</h2>
                    <p class="subtitle training-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    
                    <button class="button m-3">
                        <span class="button-content progress-text">Click on profile to see credentials!</span>
                    </button>

                    <div class="row justify-content-center trainer-row">
                        <article class="col-md">
                            <div class="trainer-container">
                                <div class="flip-card">
                                    <div class="flip-card-inner" 
                                         onclick="if (this.style['transform'] === 'rotateY(0deg)') {this.style['transform'] = 'rotateY(180deg)';} else {this.style['transform'] = 'rotateY(0deg)';}">
                                        <div class="flip-card-front w-100">
                                            <img class="w-100" src="images/team/dave.png" 
                                                alt="Dave" 
                                                title="dave">                                    
                                        </div>
                                        <div class="flip-card-back">
                                            <img class="w-100" src="images/backPics/dave.png"
                                                 alt="Dave"
                                                 title="dave">
                                        </div>
                                    </div>
                                </div>
                                <h5 class="red-text m-2">Dave Bryan</h5>
                            </div>
                        </article>
                        
                        <article class="col-md">
                            <div class="trainer-container">
                                <div class="flip-card">
                                    <div class="flip-card-inner" 
                                         onclick="if (this.style['transform'] === 'rotateY(0deg)') {this.style['transform'] = 'rotateY(180deg)';} else {this.style['transform'] = 'rotateY(0deg)';}">
                                        <div class="flip-card-front w-100">
                                            <img class="w-100" src="images/team/jiakai.png" 
                                                alt="Jia Kai" 
                                                title="jiakai">                                    
                                        </div>
                                        <div class="flip-card-back">
                                            <img class="w-100" src="images/backPics/jk.png"
                                                 alt="Jia Kai"
                                                 title="jiakai">
                                        </div>
                                    </div>
                                </div>
                                <h5 class="orange-text m-2">Wu Jia Kai</h5>
                            </div>
                        </article>
                        
                        <article class="col-md">
                            <div class="trainer-container">
                                <div class="flip-card">
                                    <div class="flip-card-inner" 
                                         onclick="if (this.style['transform'] === 'rotateY(0deg)') {this.style['transform'] = 'rotateY(180deg)';} else {this.style['transform'] = 'rotateY(0deg)';}">
                                        <div class="flip-card-front w-100" >
                                            <img class="w-100" src="images/team/jewel.png" 
                                                alt="Jewel" 
                                                title="jewel">                             
                                        </div>
                                        <div class="flip-card-back">
                                            <img class="w-100" src="images/backPics/jewel.png"
                                                 alt="Jewel"
                                                 title="jewel">
                                        </div>
                                    </div>
                                </div>
                                <h5 class="orange-text m-2">Jewel Lim</h5>
                            </div>
                        </article>
                        
                        <article class="col-md">
                            <div class="trainer-container">
                                <div class="flip-card">
                                    <div class="flip-card-inner" 
                                         onclick="if (this.style['transform'] === 'rotateY(0deg)') {this.style['transform'] = 'rotateY(180deg)';} else {this.style['transform'] = 'rotateY(0deg)';}">
                                        <div class="flip-card-front w-100">
                                            <img class="w-100" src="images/team/yf.png" 
                                                alt="Yu Fei" 
                                                title="yufei">                               
                                        </div>
                                        <div class="flip-card-back">
                                            <img class="w-100" src="images/backPics/yf.png"
                                                 alt="Yu Fei"
                                                 title="yufei">
                                        </div>
                                    </div>
                                </div>
                                <h5 class="green-text m-2">Wong Yu Fei</h5>
                            </div>
                        </article>
                        
                        <article class="col-md">
                            <div class="trainer-container">
                                <div class="flip-card">
                                    <div class="flip-card-inner" 
                                         onclick="if (this.style['transform'] === 'rotateY(0deg)') {this.style['transform'] = 'rotateY(180deg)';} else {this.style['transform'] = 'rotateY(0deg)';}">
                                        <div class="flip-card-front w-100">
                                            <img class="w-100" src="images/team/yx.png" 
                                                alt="Yi Xing" 
                                                title="yixing">                                
                                        </div>
                                        <div class="flip-card-back">
                                            <img class="w-100" src="images/backPics/yx.png"
                                                 alt="Yi Xing"
                                                 title="yixing">
                                        </div>
                                    </div>
                                </div>
                                <h5 class="blue-text m-2">Cheng Yi Xing</h5>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </main>
        
        <?php
            include "components/footer.inc.php";
        ?>
    </body>
</html>
