<?php
    session_start();

    $_SESSION["user_id"] = 1;
    
    echo "hi";
    
    if (session_status() == PHP_SESSION_ACTIVE) {
        echo "inside session";
        
        if (isset($_SESSION["user_id"])) {
            
            echo "inside user_id 1";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                echo "inside post";
                
                // Connect to database
                $config = parse_ini_file('../private/db-config.ini');
                $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

                if ($conn->connect_error) {

                    $errorMsg = "Connection failed: " . $conn->connect_error;
                    $success = false;
                    echo "db failed";

                    echo $errorMsg;

                } else {
                    
                    if ($_POST["lname"] !== "") {
                        $lname = sanitize_input($_POST["lname"]);
                        echo"insidelname";

                        // Prepare statement to retrieve user info for user_id from database
                        $stmt = $conn->prepare("UPDATE user_info SET lname=? WHERE user_id=?");
                        $stmt->bind_param("si", $lname, $_SESSION["user_id"]);
                        $stmt->execute();
                        $stmt->close();
                    }

                    if (!empty($_POST["fname"])) {
                        $fname = sanitize_input($_POST["fname"]);
                        echo $fname;
                        
                        // Prepare statement to retrieve user info for user_id from database
                        $stmt = $conn->prepare("UPDATE user_info SET fname=? WHERE user_id=?");
                        $stmt->bind_param("si", $fname, $_SESSION["user_id"]);
                        $stmt->execute();
                        $stmt->close();
                    }

                    if (!empty($_POST["email"])) {
                        $email = sanitize_input($_POST["email"]);
                        echo $email;
                        
                        // Prepare statement to retrieve user info for user_id from database
                        $stmt = $conn->prepare("UPDATE user_info SET email=? WHERE user_id=?");
                        $stmt->bind_param("si", $email, $_SESSION["user_id"]);
                        $stmt->execute();
                        $stmt->close();
                    }
                    if (!empty($_POST["pwd"])) {
                        $password = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
                        echo $password;
                        
                        // Prepare statement to retrieve user info for user_id from database
                        $stmt = $conn->prepare("UPDATE user_info SET password=? WHERE user_id=?");
                        $stmt->bind_param("si", $password, $_SESSION["user_id"]);
                        $stmt->execute();
                        $stmt->close();
                    }
                }
                
                $conn->close();
            }
        } else {
            echo "Not connected at all";
        }
    }
    
//    header("Location: dashboard.php");
?>

