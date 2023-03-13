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
          rel="stylesheet"
        />
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
        <?php
            include "nav.inc.php";
        ?>
        
        <header class="contain-fluid">
            <div class="bg-image">
                <img class="img-fluid w-100" src="images/hero/heroFrame.png" alt="Rubric Cubes Background">
                <div class="mask text-light d-flex justify-content-center flex-column text-center bg-img-gradient">
                    <h1>Learn CUBING from the <u>BEST</u></h1>

                </div>
            </div>
        </header>

        <main class="container-fluid">
            <section id="benefits" class="container text-center">
                <h2>Why you should learn Cubing</h2>
                <p>Cubing have been around since 1974 and CubeLand is established to boost the multiple benefits of cubig such as:</p>
                
                <div class="row justify-content-center">
                    <article class="col-4 col-sm-3">
                        <figure>
                            <img class="w-100" src="images/whyCubing/reflexes.png" 
                                alt="Reflexes & Agility" 
                                title="reflexes"/>
                        </figure>
                        <p>Reflexes & Agility</p>
                    </article>
                    
                    <article class="col-4 col-sm-3">
                        <figure>
                            <img class="w-100" src="images/whyCubing/concentration.png" 
                                alt="Concentration & Configuration" 
                                title="concentration"/>
                        </figure>
                        <p>Concentration & Configuration</p>
                    </article>
                    
                    <article class="col-4 col-sm-3">
                        <figure>
                            <img class="w-100" src="images/whyCubing/patience.png" 
                                alt="Patience" 
                                title="patience"/>
                        </figure>
                        <p>Patience</p>
                    </article>
                                        
                    <article class="col-4 col-sm-3">
                        <figure>
                            <img class="w-100" src="images/whyCubing/problem.png" 
                                alt="Problem Solving Skills" 
                                title="problem"/>
                        </figure>
                        <p>Problem Solving Skills</p>
                    </article>
                                        
                    <article class="col-4 col-sm-3">
                        <figure>
                            <img class="w-100" src="images/whyCubing/determination.png" 
                                alt="Determination & Focus" 
                                title="determination"/>
                        </figure>
                        <p>Determination & Focus</p>
                    </article>
                    
                    <article class="col-4 col-sm-3">
                        <figure>
                            <img class="w-100" src="images/whyCubing/memory.png" 
                                alt="Memory" 
                                title="memory"/>
                        </figure>
                        <p>Memory</p>
                    </article>
                                        
                    <article class="col-4 col-sm-3">
                        <figure>
                            <img class="w-100" src="images/whyCubing/reduced.png" 
                                alt="Reduced Screen Time" 
                                title="reduced"/>
                        </figure>
                        <p>Reduced Screen Time</p>
                    </article>
                    
                    <article class="col-4 col-sm-3">
                        <figure>
                            <img class="w-100" src="images/whyCubing/logical.png" 
                                alt="Logical Understanding" 
                                title="logical"/>
                        </figure>
                        <p>Logical Understanding</p>
                    </article>
                </div>
            </section>

            <section id="expectations" class="container text-center">
                <h2>What You Can Expect</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                
                <div class="row justify-content-center">
                    <article class="col-sm-4">
                        <p>Buy a package</p>
                    </article>
                    
                    <article class="col-sm-4">
                        <figure>
                            <img class="w-100" src="images/whyCubing/concentration.png" 
                                alt="Concentration & Configuration" 
                                title="concentration"/>
                        </figure>
                        <p>Concentration & Configuration</p>
                    </article>
                    
                    <article class="col-sm-4">
                        <figure>
                            <img class="w-100" src="images/whyCubing/patience.png" 
                                alt="Patience" 
                                title="patience"/>
                        </figure>
                        <p>Patience</p>
                    </article>   
                </div>
            </section>
            
            <section id="trainers" class="container text-center">
                <h2>Our Trainers</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                
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
