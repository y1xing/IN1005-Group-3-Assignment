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
    <script defer src="js/toast.js">
    </script>
    <title>Contact Us</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Changa' rel='stylesheet'>
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/toast.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <?php
    $color = "orange";

    include "components/nav.inc.php";
    ?>


    <div>
        <?php
        $toastMessage = "Enquiry sent successfully!";
        include "helper/toast.php";
        ?>

        <?php
        $text = "Contact Us";
        include "components/hero.inc.php";
        ?>
    </div>
    <main id="main">
        <div class="bordered-container"></div>
        <div class="container-width">


            <h1 class="header">Ask Us Anything</h1>
        </div>
        <div class="container">
            <form method="POST" action="send_email.php" id="contact-form">
                <div class="form-row">
                    <div class="form-group col-md-6 fillform">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>                    </div>
                    <div class="form-group col-md-6 fillform">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>                    </div>
                </div>
                <div class="form-group fillform">
                    <label for="email">Email:</label>
                    <input class="form-control" id="email" name="email" type="email" placeholder="example@gmail.com" required>
                </div>
                <div class="form-group fillform">
                  <label for="message">Message</label>
                    <textarea name="message" rows="6" class="form-control box" id="message" placeholder="Let us know your questions!" required></textarea>
                      </div>
                <div class="text-center">
                    <button type="submit" class="open button-red mt-5" name="send">
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
                                Q: What is a Rubik's cube?
                            </h4>
                            <p>
                                A: A Rubik's cube is a 3D puzzle that consists of six faces with nine colored stickers each. The goal is to twist and turn the cube until each face has only one color.
                            </p>
                        </div>
                        <div class="col">
                            <h4>
                                Q: How can I buy a Rubik's cube from your website?
                            </h4>
                            <p>
                                A: You can browse our catalog of different types and sizes of Rubik's cubes and add the ones you like to your cart. Then you can proceed to checkout and pay with your preferred method. We offer free shipping worldwide.

                            </p>
                        </div>
                        <div class="w-100"></div>
                        <div class="col">
                            <h4>
                                Q: How can I learn to solve a Rubik's cube?
                            </h4>
                            <p>
                                A: You can enroll in our online training courses that will teach you the basic and advanced techniques of solving a Rubik's cube. You can also watch our video tutorials and read our blog posts for tips and tricks.

                            </p>
                        </div>
                        <div class="col">
                            <h4>
                                Q: How can I contact you if I have any questions or issues?
                            </h4>
                            <p>
                               A: You can reach us by email, phone, or chat. Our customer service team is available 24/7 to assist you with any queries or problems you may have. We value your feedback and satisfaction.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include "components/footer.inc.php";
    ?>
</body>

</html>

