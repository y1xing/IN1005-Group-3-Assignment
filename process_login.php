<?php
session_start();
?>
<!DOCTYPE html>

<html lang = "en">
    <head>
        <title>Process_login</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/register.css" type="text/css">
        <link rel="stylesheet" href="css/footer.css" type="text/css">
    </head>

<?php
error_reporting(E_ALL); // Enable error reporting
ini_set('display_errors', 1);



ob_start(); // Start output buffering

$email = $errorMsg = "";
$success = true;

include "./components/navWhite.inc.php";
include "./components/head.inc.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = sanitize_input($_POST["email"]);
    $pwd = sanitize_input($_POST["pwd"]);
    authenticateUser();
    
    if ($success) {
        $_SESSION['email'] = $email;
        header("Location: dashboard.php");
        ob_end_clean(); // Discard output buffer and stop buffering
        exit;
    } else {
        ob_end_flush(); // Flush the output buffer and stop buffering
        displayError();
    }
} else {
    header("Location: login.php");
    ob_end_clean(); // Discard output buffer and stop buffering
    exit;
}
    
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function authenticateUser()
{
    global $email, $pwd, $errorMsg, $success;

    $config = parse_ini_file('../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        $stmt = $conn->prepare("SELECT * FROM user_info WHERE email = ?"); // Fixed the SQL query
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $pwd = $row["password"];
            $_SESSION['user_id'] = $row["user_id"]; // Store user_id in the session

            if (!password_verify($_POST["pwd"], $pwd)) {
                $errorMsg = "Invalid email or password.";
                $success = false;
            }
        } else {
            $errorMsg = "Invalid email or password.";
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
    echo "<h1>NO!</h1>";
    echo "<h2>The following errors were detected: </h2>";
    echo "<p>", $errorMsg, "</p>";
    echo "<button class='btn btn-danger'><a href='pages/login.php' alt='retry'>Retry Login</a></button></header>";
    echo "</div><br>";
}

include 'footer.inc.php';
?>
