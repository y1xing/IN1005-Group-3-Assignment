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
ob_start();
session_start();


$fname = $lname = $email = $errorMsg = "";
$success = true;

include "navWhite.inc.php";
include "head.inc.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["fname"])) {
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

    if (empty($_POST["pwd"])) {
        $errorMsg .= "Password is required.<br>";
        $success = false;
    } else {
        $pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
    }

    if (empty($_POST["pwd_confirm"])) {
        $errorMsg .= "Password confirmation is required.<br>";
        $success = false;
    } else {
        $pwd_confirm = $_POST["pwd_confirm"];
        if (!password_verify($pwd_confirm, $pwd)) {
            $errorMsg .= "Passwords do not match.<br>";
            $success = false;
        }
    }

   

    if ($success) {
        
        saveMember();
      
        header("Location: products.php");
        ob_end_flush();
        echo "<div class='success'>";
        echo "<h1>Your registration is successful</h1>";
        echo "<h3><p>Your registered Email: ", $email;
        echo "<h4><p>Thank you for signing up: ", $lname;
        echo "<br><button class='btn btn-success'><a href='login.php' alt='Sign in'>Login</a></button>";
        echo "</div>";
      
        
        exit;
        
    } else {
        displayError();
    }
} else {
    header("Location: register.php");
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
    global $fname, $lname, $email, $pwd, $errorMsg, $success;

    $config = parse_ini_file('../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        $stmt = $conn->prepare("INSERT INTO user_info(fname, lname, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fname, $lname, $email, $pwd);

        if (!$stmt->execute()) {
            $errorMsg = "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
            $success = false;
        }
        else{ $_SESSION['user_id'] = $conn->insert_id;
            $_SESSION['session_id'] = session_id();}

        $stmt->close();
    }
  $conn->close();
  
}
function checkAndDisplaySuccess()
    {
        $config = parse_ini_file('../private/db-config.ini');
        $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

        $stmt = $conn->prepare("SELECT * FROM user_info WHERE email = ?");
        $stmt->bind_param("s", $this->email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["user_id"] = $row["user_id"];

            echo "<div class='success'>";
            echo "<h1>Your registration is successful</h1>";
            echo "<h3><p>Your registered Email: ", $this->email;
            echo "<h4><p>Thank you for signing up: ", $this->lname;
            echo "<br><button class='btn btn-success'><a href='login.php' alt='Sign in'>Login</a></button>";
            echo "</div>";
        }

        $stmt->close();
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