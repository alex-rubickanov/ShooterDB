<?php
require __DIR__ . '/Utils/getMysqli.php';
$conn = getMysqli();

$userLogin = $_POST["userLogin"];
$userPassword = $_POST['userPassword'];

$sql = "SELECT password FROM user WHERE login = '" . $userLogin . "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Account with this login already exists";
} else {
    echo "Account created!";
    $sql2 = "INSERT INTO user (login, password, level) VALUES ('" . $userLogin . "', '" . $userPassword . "' , 1 )";
    $conn->query($sql2);
}
$conn->close();
?>