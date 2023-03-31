<?php
// Initialize the database connection from file private.ini
function db_init()
{
    $config = parse_ini_file('../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }

    return $conn;
}



