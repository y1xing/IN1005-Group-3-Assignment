<?php
session_start();

$success = true;
$errorMsg;

if (session_status() == PHP_SESSION_ACTIVE) {        
    if (isset($_SESSION["user_id"])) {          
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Connect to database
            $config = parse_ini_file('../private/db-config.ini');
            $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

            if ($conn->connect_error) {

                $errorMsg = "Connection failed: " . $conn->connect_error;
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

                    $stmt = $conn->prepare("UPDATE user_info SET email=? WHERE user_id=?");
                    $stmt->bind_param("si", $email, $_SESSION["user_id"]);
                    $stmt->execute();
                    $stmt->close();
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
        }
    }
}

header("Location: dashboard.php");
exit;

// Function from process_register to sanitize input before insertion into DB
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

