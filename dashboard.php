<?php
ob_start();
session_start();

$success = true;
$errorMsg;
?>

<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html lang="en">
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
        <!-- W3 CSS -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/products.css">
        <link rel="stylesheet" href="css/dashboard.css">
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
        <script defer src="js/passforms.js"></script>
        <script defer src="js/login-validation.js"></script>
        <script defer src="js/dashboard.js"></script>
    </head>
    
    <body>  
        <?php        
        include "components/navWhite.inc.php";

        if (session_status() == PHP_SESSION_ACTIVE) {
            if (isset($_SESSION["user_id"])) {

                // Connect to database
                $config = parse_ini_file('../private/db-config.ini');
                $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
                
                if ($conn->connect_error) {

                    $errorMsg = "Connection failed: " . $conn->connect_error;
                    $success = false;

                    echo $errorMsg;

                } else {

                    // Prepare statement to retrieve user info for user_id from database
                    $stmt = $conn->prepare("SELECT * FROM user_info WHERE user_id=?");
                    $stmt->bind_param("i", $_SESSION["user_id"]);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {

                        $row = $result->fetch_assoc();
                        $fname = $row["fname"];
                        $lname = $row["lname"];
                        $email = $row["email"];

                        echo '<header class="d-flex justify-content-center">
                                <div class="container-max-width">
                                    <div class="product-banner welcome-banner">
                                        <h1 class="banner-header">Welcome Mr ', $lname, '!</h1>
                                    </div>
                                </div>
                            </header>';

                        echo '<main>
                                    <section id="profile" class="container-max-width">
                                        <div class="profile-title-container">
                                            <h2 class="blue-text dashboard-left-header">Profile</h2>
                                            <div>
                                                <button class="btn btn-block btn-primary logout-button" type="button" onclick="window.location.href=\'logout.php\';">Logout</button>
                                            </div>
                                        </div>

                                    <form id="update-form" class="row profile-container" action="process_update.php" method="post"> 
                                        <div class="form-group col-md-6 pr-md-4"> 
                                            <label for="fname">First Name</label>
                                            <input class="form-control" id="fname" name="fname" type="text"
                                                   placeholder="', $fname, '" disabled>
                                        </div>
                                        <div class="form-group col-md-6 pr-md-4"> 
                                            <label for ="lname">Last Name</label>
                                            <input class="form-control" id="lname" name="lname" type="text"
                                                   placeholder="', $lname, '" disabled>
                                        </div>
                                        <div class="form-group col-md-6 pr-md-4"> 
                                            <label for="email">Email</label>
                                            <input class="form-control" id="email" name="email" type="email"
                                                   placeholder="', $email, '" disabled>
                                            <span id="emailError" style="display: none; color: red;"></span>
                                        </div>
                                        <div class="form-group col-md-6 pr-md-4">
                                            <label for="pwd">Password</label>
                                            <input class="form-control" id="pwd" name ="pwd" type="password"
                                                   placeholder="**********" disabled>
                                            <div id="popover-password">
                                                <p><span id="result"></span></p>
                                            </div>
                                            <div class="progress">
                                                <div id="password-strength" class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:0%;"></div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 mt-3">
                                            <button id="update-button" class="btn btn-block btn-primary" type="button"> Update </button>
                                        </div>
                                    </form>
                                </section>';

                    } else {
                        $errorMsg = "Invalid User ID: User ID is not in database.";
                        $success = false;
                        echo $errorMsg;
                    }

                    $stmt->close();
                }
            } else {
                header("Location: login.php");
                ob_end_flush();
                exit();
            }                       
        }
        ?>                       
            
            <section id="lessons" class="container-max-height justify-content-start">
                <div class="container-max-width">
                    <h2 class="blue-text dashboard-left-header align-self-start">Lesson Enrolled</h2>

                    <div class="row w-100 justify-content-between">
                        <?php
                        if (session_status() == PHP_SESSION_ACTIVE) {
                            if (isset($_SESSION["user_id"])) {                                   

                                // Connect to database to retrieve enrolled lesson for user_id
                                $stmt = $conn->prepare("SELECT * FROM lesson_enrolled WHERE user_id=?");
                                $stmt->bind_param("i", $_SESSION["user_id"]);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                if ($result->num_rows > 0) {
                                    for ($i = 0; $i < $result->num_rows; $i++) {

                                        $row = $result->fetch_assoc();
                                        $lessonName = $row["lesson_name"];
                                        $enrolled = $row["enrolled"];
                                        $nextLesson = $row["next_lesson"];
                                        $percentDone = $row["percent_done"];
                                        $trainer = $row["trainer"];
                                        $trainerComment = $row["trainer_comment"];
                                        $picturePath = $row["picture_path"];

                                        // Get trainer image path to display
                                        switch ($trainer) {
                                            case "Wu Jia Kai":
                                                $trainerImagePath = "/images/team/jiakai.png";
                                                break;
                                            case "Chen Yi Xing":
                                                $trainerImagePath = "/images/team/yx.png";
                                                break;                                                
                                            case "Dave Bryan Tan Verano":
                                                $trainerImagePath = "/images/team/dave.png";
                                                break;
                                            case "Wong Yu Fei":
                                                $trainerImagePath = "/images/team/yf.png";
                                                break;
                                            case "Lim Yan Ying Jewel":
                                                $trainerImagePath = "/images/team/jewel.png";
                                                break;
                                            default:
                                                $trainerImagePath = "";
                                                break;
                                        }

                                        if ($percentDone < 20) {
                                            $progressLevel = "Beginner";
                                            $progressBadge = "/images/levelBadges/beginner.png";
                                        } else if ($percentDone >= 20 && $percentDone < 40) {
                                            $progressLevel = "Amatuer";
                                            $progressBadge = "/images/levelBadges/amatuer.png";
                                        } else if ($percentDone >= 40 && $percentDone < 60) {
                                            $progressLevel = "Intermediate";
                                            $progressBadge = "/images/levelBadges/intermediate.png";
                                        } else if ($percentDone >= 60 && $percentDone < 80) {
                                            $progressLevel = "Advanced";
                                            $progressBadge = "/images/levelBadges/advanced.png";
                                        } else if ($percentDone >= 80 && $percentDone < 100) {
                                            $progressLevel = "Master";
                                            $progressBadge = "/images/levelBadges/master.png";
                                        } else if ($percentDone == 100) {
                                            $progressLevel = "Grand Master";
                                            $progressBadge = "/images/levelBadges/grandmaster.png";
                                        } else {
                                            $progressLevel = "Invalid Lesson Progress";
                                        }

                                        echo '<article class="col-md-6">
                                                <div class="card mb-4 mb-md-1">
                                                    <div class="card-body">
                                                        <div class="row justify-content-center align-items-center">
                                                            <div class="col-4">
                                                                <div class="d-flex justify-content-center align-items-center square square-blue">
                                                                    <img class="w-100 card-title-image" src="', $picturePath, '" alt="Cube 1">
                                                                </div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="card-title-text-container">
                                                                    <h2 class="card-title-text blue-text">', $lessonName, '</h2>
                                                                    <div class="card-title-text-para">
                                                                        <p><b>Enrolled:</b> ', $enrolled, '</p>
                                                                        <p><b>Next lesson:</b> ', $nextLesson, '</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <h3 class="card-subtitle-text"><u><b>Progress</b></u></h3>
                                                        <div class="card-row-container">
                                                            <div class="badge-icon-container">
                                                                <img class="icon" src="', $progressBadge, '" alt="', $progressLevel, '">
                                                            </div>          
                                                            <h2 class="card-title-text blue-text pl-2">', $progressLevel, '</h2>
                                                        </div>
                                                        <div class="mastery-progress">
                                                            <div class="mastery-progress-bar" style="width: ', $percentDone, '%;"></div>
                                                        </div>
                                                        <p class="progress-text">', $percentDone, '% Completed</p>

                                                        <h3 class="card-subtitle-text"><u><b>Trainer</b></u></h3>
                                                        <div class="card-row-container align-items-start">
                                                            <div class="trainer-icon-container">
                                                                <img class="trainer-icon" src="', $trainerImagePath, '" alt="Trainer Icon">
                                                            </div>        
                                                            <div class="d-inline pl-3 w-75 card-comments-text">
                                                                <p><b>Mr ', $trainer, '</b></p>
                                                                <p><b>Comment:</b> ', $trainerComment, '</p>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </article>';    
                                    }

                                } else {
                                    $errorMsg = "You have not enrolled in any lessons. Please proceed to the product page to view lessons.";
                                    $success = false;
                                    echo '<p class="m-md-3 pl-2">', $errorMsg, '</p>';
                                }

                                $stmt->close();     
                                $conn->close();

                            }
                        }
                        ?>
                    </div>
                </div>
            </section>
        </main>
        
        <?php
            include "components/footer.inc.php";
        ?>
    </body>
</html>