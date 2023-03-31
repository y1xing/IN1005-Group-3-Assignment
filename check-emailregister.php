<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["email"])) {
        $email = $_POST["email"];
        echo checkEmailExists($email) ? "Email already exists." : "Email does not exist.";
    } else {
        echo "Email does not exist.";
    }
}

function checkEmailExists($email)
{
    $config = parse_ini_file('../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);

    if ($conn->connect_error) {
        return false;
    } else {
        $stmt = $conn->prepare("SELECT * FROM user_info WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $emailExists = $result->num_rows > 0;

        $stmt->close();
        $conn->close();
        return $emailExists;
    }
}
?>
