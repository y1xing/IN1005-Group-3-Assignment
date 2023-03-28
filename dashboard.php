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
        <!<!-- W3 CSS -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/dashboard.css">
        
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
    </head>s
    
    <body>  
        <?php        
            include "navWhite.inc.php";
        ?>
        
        <header class="d-flex justify-content-center">
            <div class="container-max-width">
                <div class="product-banner welcome-banner">
                    <h1 class="banner-header">Welcome XXX!</h1>
                </div>
            </div>
        </header>

        <main>
            <section id="lessons" class="container-max-height">
                <div class="container-max-width">
                    <h1>Lesson Enrolled</h1>

                    <div class="row">
                        <article class="col-md-6">
                            <div class="card m-5">
                                <div class="card-body">
                                    <div class="row card-title-container">
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center align-items-center square square-blue">
                                                <img class="w-100 card-title-image" src="images/products/cube1.png" alt="Cube 1">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="card-title-text-container">
                                                <h2 class="card-title-text blue-text">3 x 3 Rubik Cube</h2>
                                                <div class="card-title-text-para">
                                                    <p><b>Enrolled:</b> XXX</p>
                                                    <p><b>Next lesson:</b> XXX</p>
                                                </div>
                                            </div>
                                        </div>                                

                                        <h3 class="card-subtitle-text"><u><b>Progress</u></b></h3>
                                        <div class="card-row-container">
                                            <div class="badge-icon-container">
                                                <img class="icon" src="images/levelBadges/advanced.png" alt="Advanced"/>
                                            </div>          
                                            <h2 class="card-title-text blue-text pl-2">Grand Master</h2>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="progress"></div>
                                        </div>
                                        <p>95% Completed</p>
                                        
                                        <h3 class="card-subtitle-text"><u><b>Trainer</u></b></h3>
                                        <div class="card-row-container align-items-start">
                                            <div class="trainer-icon-container">
                                                <img class="trainer-icon" src="images/team/yx.png" alt="yixing"/>
                                            </div>        
                                            <div class="d-inline pl-3 w-75 card-comments-text">
                                                <p><b>Mr XXX</b></p>
                                                <p><b>Comment:</b> XXXXXXXXXXXXXXXXXXxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="col-md-6">
                            <div class="card m-5">
                                <div class="card-body">
                                    <div class="row card-title-container">
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center align-items-center square square-blue">
                                                <img class="w-100 card-title-image" src="images/products/cube1.png" alt="Cube 1">
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="card-title-text-container">
                                                <h2 class="card-title-text blue-text">3 x 3 Rubik Cube</h2>
                                                <div class="card-title-text-para">
                                                    <p><b>Enrolled:</b> XXX</p>
                                                    <p><b>Next lesson:</b> XXX</p>
                                                </div>
                                            </div>
                                        </div>                                

                                        <h3 class="card-subtitle-text"><u><b>Progress</u></b></h3>
                                        <div class="card-row-container">
                                            <div class="badge-icon-container">
                                                <img class="icon" src="images/levelBadges/advanced.png" alt="Advanced"/>
                                            </div>          
                                            <h2 class="card-title-text blue-text pl-2">Grand Master</h2>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="progress"></div>
                                        </div>
                                        <p>95% Completed</p>

                                        <h3 class="card-subtitle-text"><u><b>Trainer</u></b></h3>
                                        <div class="card-row-container align-items-start">
                                            <div class="trainer-icon-container">
                                                <img class="trainer-icon" src="images/team/yx.png" alt="yixing"/>
                                            </div>        
                                            <div class="d-inline pl-3 w-75 card-comments-text">
                                                <p><b>Mr XXX</b></p>
                                                <p><b>Comment:</b> XXXXXXXXXXXXXXXXXXxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX XXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
        </main>
        
        <?php
            include "footer.inc.php";
        ?>
    </body>
</html>


//<?php
//$config = parse_ini_file('../../private/db-config.ini');
//$conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
//
//if ($conn->connect_error) {
//    $errorMsg = "Connection failed: " . $conn->connect_error;
//    $success = false;
//} else {
//    $stmt = $conn->prepare("SELECT * FROM enquiries");
//    $stmt->execute();
//    $result = $stmt->get_result();
//
//    if ($result->num_rows > 0) {
//        $row = $result->fetch_assoc();
//        $email = $row["email"];
//        $title = $row["title"];
//        $msg = $row["message"];
//
//        echo "<p>", $email, "</p>";
//
//    } else {
//        $errorMsg = "Invalid email or password.";
//        $success = false;
//    }
//
//    $stmt->close();
//}
//
//$conn->close();
//?>