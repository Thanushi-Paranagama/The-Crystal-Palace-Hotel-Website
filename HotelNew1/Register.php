<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "dmwcw"; 

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Successfully Connected";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? ''; 
    $email = $_POST['email'] ?? '';

    if ($name && $username && $password && $email) { // Check if values are not empty
        $stmt = $conn->prepare("INSERT INTO login (Name, UserName, Password, Email) VALUES (?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssss", $name, $username, $password, $email);
            if ($stmt->execute()) {
               echo"update success!";
               header("Location: index.html");
                        exit();
            }
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close(); 
           
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        echo "Please fill in all fields.";
    }

    $conn->close();

?>