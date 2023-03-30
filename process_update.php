<?php

include 'crud.php';

session_start();

$success = true;
$errorMsg = "";

ob_start(); // Start output buffering

include "./components/navWhite.inc.php";
include "./components/head.inc.php";

if (session_status() == PHP_SESSION_ACTIVE) {        
    if (isset($_SESSION["user_id"])) {          
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Connect to database
            $conn = db_init();

            if ($conn->connect_error) {

                $errorMsg = ".Connection failed: " . $conn->connect_error . "<br>";
                $success = false;

            } else {
                if (!empty($_POST["lname"])) {
                    $lname = sanitize_input($_POST["lname"]);

                    $stmt = $conn->prepare("UPDATE user_info SET lname=? WHERE user_id=?");
                    $stmt->bind_param("si", $lname, $_SESSION["user_id"]);
                    $stmt->execute();
                    $stmt->close();
                }

                if (!empty($_POST["fname"])) {
                    $fname = sanitize_input($_POST["fname"]);

                    $stmt = $conn->prepare("UPDATE user_info SET fname=? WHERE user_id=?");
                    $stmt->bind_param("si", $fname, $_SESSION["user_id"]);
                    $stmt->execute();
                    $stmt->close();
                }

                if (!empty($_POST["email"])) {
                    $email = sanitize_input($_POST["email"]);
                    
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $errorMsg .= "Invalid email format.<br>";
                        $success = false;
                    } else {
                        $stmt = $conn->prepare("UPDATE user_info SET email=? WHERE user_id=?");
                        $stmt->bind_param("si", $email, $_SESSION["user_id"]);
                        $stmt->execute();
                        $stmt->close();
                    }
                }
                if (!empty($_POST["pwd"])) {
                    $password = password_hash($_POST["pwd"], PASSWORD_DEFAULT);

                    $stmt = $conn->prepare("UPDATE user_info SET password=? WHERE user_id=?");
                    $stmt->bind_param("si", $password, $_SESSION["user_id"]);
                    $stmt->execute();
                    $stmt->close();
                }
            }

            $conn->close();
            
            if ($success) {
                header("Location: dashboard.php");
                ob_end_clean(); // Discard output buffer and stop buffering
                exit;
            } else {
                displayError($errorMsg);
            }
        }
    }
}

// Function from process_register to sanitize input before insertion into DB
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function displayError($errorMsg) {

    echo "<div class='failed'>";
    echo "<h1>Oops!</h1>";
    echo "<h2>The following errors were detected: </h2>";
    echo "<p>", $errorMsg, "</p>";
    echo "<button class='btn btn-danger'><a href='pages/dashboard.php' alt='retry'>Return to Dashboard</a></button></header>";
    echo "</div><br>";
}
?>

