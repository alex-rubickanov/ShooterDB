<?php
function getMysqli()
{
    $servername = "localhost";
    $username = "mysql";
    $password = "mysql";
    $dbname = "shooter_db";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error) . '<br>';
    }

    echo "Connected successfully <br>";
    return $conn;
}
?>