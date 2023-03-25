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
        <link rel="stylesheet" href="css/login.css" type="text/css">
        <link rel="stylesheet" href="css/footer.css" type="text/css">
    </head>
    
    <body>
<?php
include "head.inc.php";
?>


    <?php
    $color = "blue";

    include "nav.inc.php";
    ?>
    

<main class ="reg-container">
    
        <div class="container-max-height ">
            <div class="container-max-width">
                
    
    <div class="row mt-4">
    
        <div class="col-md-6 left-container">
            <h1 class = "blue-text"> Login</h1>
    <form action ="process_register.php" method="post" > 
    
    <div class = "form-group"> 
        <label for ="email">Email:</label>
        <input class="form-control" id="email" name ="email" type ="email"
               placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for ="pwd">Password:</label>
        <input class="form-control" id="pwd" name ="pwd" type="password"
               placeholder="Enter password">
    </div>
    
        <div class ="form-check">
        <label> 
            <input type="checkbox" name ="agree">
            Remember me
        </label>
        </div>
    <div class = "form-group"> 
        <button class="btn btn-primary btn-block" type = "login"> Login </button>
    </div>  
    </form>
            <p1>
        Not registered yet?
        <a href ="/register.php"> Create an Account</a>.
    </p1>
    </div>
        <div class="col-md-6 hide-on-mobile">
                        <img src="images/hero/loginPic.png" class="register-img" alt="Cubeworld Login pic" />
                    </div>

            </div>
            </div>
        </div>
</main>

</body>

<?php
    include "footer.inc.php";
?>