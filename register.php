<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Register</title>
        
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
       <!-- Custom CSS -->
        
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/register.css" type="text/css">
        <link rel="stylesheet" href="css/footer.css" type="text/css">
    </head>
    
    <body>

    <?php
    $color = "blue";
    include "nav.inc.php";
    ?>
    <?php
include "head.inc.php";
?>

        <main class ="reg-container">

            <div class="container-max-height ">
                <div class="container-max-width">


                    <div class="row mt-4">
                        <div class="col-md-6 hide-on-mobile">
                            <img src="images/hero/registerPic.png" class="register-img" alt="Cubeworld Register pic" />
                        </div>
                        <div class="col-md-6 right-containerreg">
                            <h1 class = "red-text"> Register</h1>
                            <form action ="process_register.php" method="post" novalidate > 


                                <div class ="form-groupnames">
                                <div class = "form-group fname"> 
                                    <label for ="fname">First Name:</label>
                                    <input class="form-control" id="fname" name ="fname" type="text"
                                           placeholder="Enter First name">
                                </div>
                                <div class = "form-group lname"> 
                                    <label for ="lname">Last Name*:</label>
                                    <input class="form-control" id="lname" maxlength = "45" name ="lname" type="text"
                                           placeholder="Enter Last name">
                                </div>
                                </div>
                                <div class = "form-group"> 
                                    <label for ="email">Email*:</label>
                                    <input class="form-control" id="email" name ="email" type ="email" required
                                           placeholder="Enter email">
                                    <span id="emailError" class="error-messagereg" style="display: none;"></span>
                                </div>
                                <div class="form-group">
                                    <label for ="pwd">Password*:</label>
                                    <input class="form-control" id="pwd" name ="pwd" type="password"
                                           placeholder="Enter password">
                                </div>
                                <div class = "form-group"> 
                                    <label for ="pwd_confirm">Confirm password*:</label>
                                    <input class="form-control" id="pwd_confirm" name ="pwd_confirm" type="password"
                                           placeholder="Confirm password">
                                </div>
                                <div class ="form-check">
                                    <label> 
                                        <input type="checkbox" name ="agree">
                                        Agree to terms and conditions.*
                                    </label>
                                </div>
                                <div class = "form-group"> 
                                    <button class="btn btn-primary btn-block" type = "submit"> Submit </button>
                                </div>  
                            </form>
                            <p1>
                                Already have an account?<a href ="/login.php"> Login</a>

                            </p1>
                        </div>
                    </div>
                </div>
            </div>
        </main>
       
<?php
    include "footer.inc.php";
?>
<script src="validation.js"></script>
</body>
</html>
