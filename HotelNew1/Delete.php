
 <?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "dmwcw"; 

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Successfully Connected <br>";

$ID = $_GET['ID'];

$sql = "DELETE FROM reviews WHERE id ='$ID'";

$result = mysqli_query($conn,$sql);

if($result == TRUE)
{
    echo "New record deleted Successfully";
}
else
{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}
?>


