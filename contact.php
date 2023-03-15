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
        <link rel="stylesheet" href="css/contact.css" type="text/css">
    </head>
    <body>
        <?php 
            include "nav.inc.php";
        ?>
        <div>
        <header class = "jumbotron text-center bg-dark">
            <section id ="home">
            <h1 id="heading_title">Contact Us</h1>
            <h2>Home of Singapore's Pet Lovers</h2>
            </section>
        </header>
        </div>
        <main class = "container">
            <div id ="pets">
                <section>
                    <h2 id="h2_title">Ask Us <u>Anything</u></h2>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                            </div>
                        </div>
                        <div class = "form-group"> 
                            <label for ="email">Email:</label>
                            <input class="form-control" id="email" name ="email" type ="email" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <input type="text" class="form-control" id="message" placeholder="Let us know your questions!">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </section>
                <section id="border">
                    <h2 id="h2_title">Frequently Asked Questions</h2>
                    <p style="text-align: center; padding-bottom: 30px">
                        Everything you need to know about the products and services
                    </p>
                    <div class="container">
                        <div class="row">
                            <form class="form-inline">
                                <h4>
                                    Is there a free trial available
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <h4>
                                    Is there a free trial available
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <h4>
                                    Is there a free trial available
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <h4>
                                    Is there a free trial available
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </form>
                        </div>
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
