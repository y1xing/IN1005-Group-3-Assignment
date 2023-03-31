<?php
$fname = $lname = $email = $errorMsg = "";
$success = true;

include './components/head.inc.php';

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
    if (empty($_POST["message"])) {
        $errorMsg .= "Message is required.<br>";
        $success = false;
    } else {
        $lname = sanitize_input($_POST["message"]);
    }
    include 'nav.inc.php';

    if ($success) {
        saveMember();
        echo "<div class='success'>";
        echo "<h1>Thank you for your contacting us.</h1>";
        echo "<br><button class='btn btn-success'><a href='pages/contact.php' alt='Contact Us'>Contact Us</a></button>";
        echo "</div>";
    } else {
        displayError();
    }
} else {
    header("Location: contact.php");
    exit;
}

function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function saveMember()
{
    global $fname, $lname, $email, $message, $errorMsg, $success;

    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        $stmt = $conn->prepare("INSERT INTO world_of_pets_members(fname, lname, email, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fname, $lname, $email, $message);

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
    echo "<button class='btn btn-danger'><a href='pages/contact.php' alt='retry'>Return to Contact Us</a></button></header>";
    echo "</div><br>";
}

include 'footer.inc.php';