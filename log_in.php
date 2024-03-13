<?php
require __DIR__ . '/Utils/getMysqli.php';
$conn = getMysqli();

$userLogin = $_POST["userLogin"];
$userPassword = $_POST['userPassword'];

$sql = "SELECT password FROM user WHERE login = '" .$userLogin . "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row['password'] == $userPassword) {
            echo "Login success!";
        } else {
            echo "Wrong password";

        }
    }
} else {
    echo "User doesn't exist";
}

?>