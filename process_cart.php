<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Process_register</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/register.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
</head>
<?php
//session_start();

$fname = $lname = $email = $address = $city = $postal = $mobile = $errorMsg = "";
$success = true;

include "navWhite.inc.php";
include "head.inc.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"])) {
        $errorMsg .= "First name is required.<br>";
        $success = false;
    } else {
        $fname = sanitize_input($_POST["fname"]);
    }

    if (empty($_POST["lname"])) {
        $errorMsg .= "Last name is required.<br>";
        $success = false;
    } else {
        $lname = sanitize_input($_POST["lname"]);
    }

    if (empty($_POST["email"])) {
        $errorMsg .= "Email is required.<br>";
        $success = false;
    } else {
        $email = sanitize_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorMsg .= "Invalid email format.<br>";
            $success = false;
        }
    }
    if (empty($_POST["address"])) {
        $errorMsg .= "Address is required.<br>";
        $success = false;
    } else {
        $address = sanitize_input($_POST["address"]);
    }
    if (empty($_POST["city"])) {
        $errorMsg .= "City is required.<br>";
        $success = false;
    } else {
        $city = sanitize_input($_POST["city"]);
    }
    if (empty($_POST["postal"])) {
        $errorMsg .= "Postal code is required.<br>";
        $success = false;
    }
    if (empty($_POST["mobile"])) {
        $errorMsg .= "Mobile number is required.<br>";
        $success = false;
    }


    if ($success) {

        saveDelivery();



        echo "<div class='success'>";
        echo "<h1>Your payment is successful</h1>";
        echo "<br><button class='btn btn-success'><a href='index.php' alt='home'>Return to Home</a></button>";
        echo "</div>";




    } else {
        displayError();
    }
} else {
    header("Location: cart.php");
    exit;
}

function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function saveDelivery()
{
    global $fname, $lname, $email, $address, $city, $postal, $mobile, $errorMsg, $success;

    $config = parse_ini_file('../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        $stmt = $conn->prepare("INSERT INTO user_delivery_info(address, postal, city, mobile, email, fname, lname) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $address, $postal, $city, $mobile, $email, $fname, $lname);

        if (!$stmt->execute()) {
            $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
            $success = false;
        }

        $stmt->close();
    }
    $conn->close();

}

function displayError()
{
    global $errorMsg;

    echo "<div class='failed'>";
    echo "<h1>Oops!</h1>";
    echo "<h2>The following errors were detected: </h2>";
    echo "<p>", $errorMsg, "</p>";
    echo "<button class='btn btn-danger'><a href='register.php' alt='retry'>Return to Sign up</a></button></header>";
    echo "</div><br>";
}

include 'footer.inc.php';