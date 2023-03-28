<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities("customer enquiry");
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'cubeworld979@gmail.com';
    $mail->Password = 'wztnlairufpauikl';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $fname, $lname);
    $mail->addAddress ($email);
    $mail->Subject = ("In response to customer enquiry");
    $mail->Body = "Thank you for your enquiry our administrator will be getting back to you shortly";
    
    $email_to = 'cubeworld979@gmail.com'; 
    $email_from = 'cubeworld979@gmail.com'; 
    $mail2 = new PHPMailer(true);
    $mail2->isSMTP();
    $mail2->Host = 'smtp.gmail.com';
    $mail2->SMTPAuth = true;
    $mail2->Username = 'cubeworld979@gmail.com';
    $mail2->Password = 'wztnlairufpauikl';
    $mail2->Port = 465;
    $mail2->SMTPSecure = 'ssl';
    $mail2->isHTML(true);
    $mail2->setFrom('cubeworld979@gmail.com', $fname, $lname);
    $mail2->addAddress ('cubeworld979@gmail.com');
    $mail2->Subject = "From: 'cubeworld979@gmail.com', $subject";
    $mail2->Body = "Message from customer: , $message";
    
    if(!$mail->send()) { 
        die("Message could not be sent: " . $mail->ErrorInfo); 
    } 
    
    header("Location: ./contact.php");

}


function displayThankyou()
{
    echo "<div class='success'>";
    echo "<h1>Thank you for sending us your enquiries!</h1>";
//    echo "<p>", $errorMsg, "</p>";
    echo "<button class='btn btn-success'><a href='contact.php' alt='retry'>Head back to the main page</a></button></header>";
    echo "</div><br>";
}

?>