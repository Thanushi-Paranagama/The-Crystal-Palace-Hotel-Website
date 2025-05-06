<?php
session_start(); // Start the session

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
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT UserName, Password FROM login WHERE UserName = ?");
    if ($stmt) {
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();

            // Check if the password matches
            if ($row['Password'] === $pass) { 
                $_SESSION['username'] = $uname;
                
                header("Location: index.html");
                exit();
            } else {
                echo "Invalid password";
            }
        } else {
            echo "Enter correct username and password";
        }

        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
    
    $conn->close();
}
?>