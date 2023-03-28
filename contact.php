<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this templateasdasdasd
-->
<html lang="en">

<head>
    <!--jQuery script test-->
    <script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
    <!--<script defer src="js/main.js">-->
    <script defer src="js/nav.js">
    </script>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Changa' rel='stylesheet'>
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
</head>

<body>
    <?php
    $color = "orange";

    include "nav.inc.php";
    ?>


    <div>
        <?php
        $text = "Contact Us";
        include "hero.inc.php";
        ?>
    </div>
    <main id="main">
        <div class="bordered-container"></div>
        <div class="container-width">
            <h1 class="header">Ask Us Anything</h1>
        </div>
        <div class="container">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6 fillform">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md-6 fillform">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group fillform">
                    <label for="email">Email:</label>
                    <input class="form-control" id="email" name="email" type="email" placeholder="example@gmail.com" required>
                </div>
                <div class="form-group fillform">
                  <label for="message">Message</label>
                  <input type="text" class="form-control box" id="message" placeholder="Let us know your questions!" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="button-red mt-5">
                        <span class="button-content-red">Send Message</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="container-width">
            <div class="container-max-width alt-section-container">
                <h2 id="h2_title">Frequently Asked Questions</h2>
                <p style="text-align: center; padding-bottom: 30px">
                    Everything you need to know about the products and services
                </p>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4>
                                Is there a free trial available
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="col">
                            <h4>
                                Is there a free trial available
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <h4>
                                Is there a free trial available
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                        <div class="col">
                            <h4>
                                Is there a free trial available
                            </h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
            </div>
        </div>
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
