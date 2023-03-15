<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title>Dashboard</title>
        
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
        <link rel="stylesheet" href="css/dashboard.css">
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
            <div class="container banner bg-image">
                <img class="img-fluid w-100" src="images/hero/heroFrame.png" alt="Rubric Cubes Background">
                <div class="mask text-light d-flex justify-content-center flex-column bg-img-gradient">
                    <h1>Welcome XXX!</h1>

                </div>
            </div>
        </header>

        <main class="container-fluid">
            <section id="lessons" class="container">
                <h2>Lesson Enrolled</h2>
                
                <div class="row justify-content-center">
                    <article class="col-sm-6">
                        <div class="card">
                            <div class="card-header row" style="height:10em">
                                <div class="col-4 d-flex justify-content-center align-items-center bg-dark">
                                    <img class="img-fluid" src="images/products/cube1.png" alt="Cube 1">
                                </div>
                                <div class="col-8">
                                    <h3>3 X 3 Rubik Cube</h3>
                                    <p>Enrolled: XXX</p>
                                    <p>Next lesson: XXX</p>
                                </div>                                
                            </div>
                            
                            <div class="card-body">
                                <h4 class="card-title"><u>Progress</u></h4>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </article>
                    
                    <article class="col-sm-6">
                        <div class="card">
                            <div class="card-header row" style="height:10em">
                                <div class="col-4 d-flex justify-content-center align-items-center bg-dark">
                                    <img class="img-fluid" src="images/products/cube2.png" alt="Cube 2">
                                </div>
                                <div class="col-8">
                                    <h3>Megamix</h3>
                                    <p>Enrolled: XXX</p>
                                    <p>Next lesson: XXX</p>
                                </div>                                
                            </div>
                            
                            <div class="card-body">
                                <h4 class="card-title"><u>Progress</u></h4>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
        </main>
        
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>
