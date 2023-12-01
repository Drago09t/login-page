<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "Login_page";

$cnn = new mysqli($servername, $username, $password, $db_name);

if ($cnn->connect_error) {
    die("Connection failed: " . $cnn->connect_error);
}

echo "Connected successfully";
$ID = '';
$Name = "";
$Address = "";
if (isset($_POST["save"])) {
    $ID = $_POST["ID"] ?? '';
    $Name = $_POST["Name"] ?? '';
    $Address = $_POST["Address"] ?? '';
    $email = $_POST["email"] ?? ''; // Added a semicolon here
    $password = $_POST["password"] ?? ''; // Added a semicolon here
    $sql = "INSERT INTO user (ID, Name, Address, email, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $cnn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssss", $ID, $Name, $Address, $email, $password);
        if ($stmt->execute()) {
            echo "Logged in successfully";
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error in preparing statement: " . $cnn->error;
    }
}
?>
