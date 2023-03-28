<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//
if (isset($_POST['send'])) {
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities("customer enquiry");
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'cubieworldie@gmail.com';
    $mail->Password = 'dyhrcojwzifyifsu';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $fname, $lname);
    $mail->addAddress($email);
    $mail->Subject = ("In response to contacting us!");
    $mail->Body = '
            <html>
                <head>
                </head>
                <body>
                    <div class="container container_email">
                        <h1 class="email_text">Thank you for your enquiry, we will be getting back to you soon!</h1>
                        <p>Dear ' . $fname . ' ' . $lname . ',</p>
                        <p>Here is a summary of your message:</p>
                        <p>' . $message . '</p>
                        <p>Best regards,</p>
                        <p>The Customer Service Team</p>
                    </div>
                </body>
            </html>
            ';
    $mail->send();

    $mail2 = new PHPMailer(true);
    $mail2->isSMTP();
    $mail2->Host = 'smtp.gmail.com';
    $mail2->SMTPAuth = true;
    $mail2->Username = 'cubieworldie@gmail.com';
    $mail2->Password = 'dyhrcojwzifyifsu';
    $mail2->Port = 465;
    $mail2->SMTPSecure = 'ssl';
    $mail2->isHTML(true);
    $mail2->setFrom($email, $name);
    $mail2->addAddress('cubieworldie@gmail.com');
    $mail2->Subject = ("$email ($subject)");
    $mail2->Body = '
            <html>
                <head>
                </head>
                <body>
                    <div class="container container_email">
                        <h1 class="email_text">Customer Enquiry!</h1>
                        <p>Here is a summary of the customers message:</p>
                        <p>' . $message . '</p>
                    </div>
                </body>
            </html>
            ';

    $mail2->send();

//    if (!$mail->send()) {
//        die("Message could not be sent: " . $mail->ErrorInfo);
//    }

    header("Location: ./contact.php");
}

?>
</body>
</html>