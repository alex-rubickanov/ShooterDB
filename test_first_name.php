<?php
require __DIR__ . '/Utils/getMysqli.php';
$conn = getMysqli();

$sql = "SELECT login FROM user WHERE 1";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "First user is " . $row['login'];
} else {
    echo "Database is empty";
}

$conn->close();

?>