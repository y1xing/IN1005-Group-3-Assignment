<?php
// Initialize the database connection from file private.ini
function db_init()
{
    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli($config['servername'], $config['username'], $config['password'], $config['dbname']);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}



// Crud functions to access the database
function create($table, $data)
{
    $fields = implode(', ', array_keys($data));
    $values = "'" . implode("', '", $data) . "'";
    $sql = "INSERT INTO $table ($fields) VALUES ($values)";
    return $sql;
}

function read($table, $id)
{
    $sql = "SELECT * FROM $table WHERE id = $id";
    return $sql;
}

function update($table, $data, $id)
{
    $fields = '';
    foreach ($data as $key => $value) {
        $fields .= "$key = '$value', ";
    }
    $fields = rtrim($fields, ', ');
    $sql = "UPDATE $table SET $fields WHERE id = $id";
    return $sql;
}


function delete($table, $id)
{
    $sql = "DELETE FROM $table WHERE id = $id";
    return $sql;
}

?>

