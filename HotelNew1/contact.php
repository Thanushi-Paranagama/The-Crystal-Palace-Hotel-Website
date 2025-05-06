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
    $lastname = $_POST['lastname'] ?? '';
    $contact = $_POST['contact'] ?? ''; 
    $comment = $_POST['comment'] ?? '';

    if ($name && $lastname && $contact && $comment) { // Check if values are not empty
        $stmt = $conn->prepare("INSERT INTO contacts (Name, LastName, Contact, Comment) VALUES (?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("ssss", $name, $lastname, $contact, $comment);
            if ($stmt->execute()) {
               echo"update success!";
               
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