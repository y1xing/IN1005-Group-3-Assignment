<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        echo checkEmailAndPassword($email, $password) ? "true" : "false";
    } else {
        echo "false";
    }
}

function checkEmailAndPassword($email, $password)
{
    $config = parse_ini_file('../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    if ($conn->connect_error) {
        return false;
    } else {
        $stmt = $conn->prepare("SELECT password FROM user_info WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $passwordHash = $row["password"];
            $stmt->close();
            $conn->close();
            return password_verify($password, $passwordHash);
        } else {
            $stmt->close();
            $conn->close();
            return false;
        }
    }
}