<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Process_update</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Google API Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
              crossorigin="anonymous">
        <!-- MDBootstap CSS -->
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
          rel="stylesheet">
        <!-- W3 CSS -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/nav.css">
        <link rel="stylesheet" href="css/footer.css">
    </head>

    <?php

    ob_start(); // Start output buffering
    session_start();

    $success = true;
    $errorMsg = "";

    include "./components/navWhite.inc.php";

    if (session_status() == PHP_SESSION_ACTIVE) {        
        if (isset($_SESSION["user_id"]) && $_SERVER["REQUEST_METHOD"] == "POST") {          

            // Connect to database
            $config = parse_ini_file('../private/db-config.ini');
            $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

            if ($conn->connect_error) {

                $errorMsg .= "Connection failed: " . $conn->connect_error . "<br>";
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
                ob_end_flush(); // Discard output buffer and stop buffering
                exit;
            } else {
                displayError();
            }
        } else {
            header("Location: login.php");
            ob_end_flush(); // Discard output buffer and stop buffering
            exit;
        }
        
        include 'components/footer.inc.php';
    }

    // Function from process_register to sanitize input before insertion into DB
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function displayError() {
        global $errorMsg;

        echo "<div class='container-max-height'>";
        echo "<div class='container-max-width align-items-start'>";
        echo "<div class='failed'>";
        echo "<h1>Oops!</h1>";
        echo "<h2>The following errors were detected: </h2>";
        echo "<p>", $errorMsg, "</p>";
        echo "<button class='btn btn-danger' onclick='window.location.href=\"dashboard.php\";'>Return to Dashboard</button>";
        echo "</div><br>";
        echo "</div>";
        echo "</div>";
    }    
    ?>
</html>

