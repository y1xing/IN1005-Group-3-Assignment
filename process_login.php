
           
<?php
session_start();

$email = $errorMsg = "";
$success = true;

include 'head.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    include 'nav.inc.php';

    if ($success) {
        authenticateUser();
    }

    if ($success) {
        $_SESSION['email'] = $email;
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        header("Location: welcome.php");
        exit;
    } else {
        displayError();
    }
} else {
    header("Location: login.php");
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
    global $fname, $lname, $email, $pwd, $errorMsg, $success;

    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    if ($conn->connect_error) {
        $errorMsg = "Connection failed: " . $conn->connect_error;
        $success = false;
    } else {
        $stmt = $conn->prepare("SELECT * FROM world_of_pets_members WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $fname = $row["fname"];
            $lname = $row["lname"];
            $pwd = $row["password"];

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
    echo "<h1>Oops!</h1>";
    echo "<h2>The following errors were detected: </h2>";
    echo "<p>", $errorMsg, "</p>";
    echo "<button class='btn btn-danger'><a href='login.php' alt='retry'>Retry Login</a></button></header>";
    echo "</div><br>";
}

include 'footer.inc.php';

    

