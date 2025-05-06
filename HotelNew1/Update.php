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

    $sql = "SELECT * FROM reviews WHERE ID = $ID";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $name = $_POST['name'];
        $review = $_POST['review'];

	}

if(isset($_POST['submit'])) {

    $new_name = $_POST['name'];
    $new_review = $_POST['review'];

    $update_sql = "UPDATE reviews SET Name = '$new_name', Review = '$new_review' WHERE ID = $ID";
	
    if(mysqli_query($conn, $update_sql)) {
		header("Location: Review.php");

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>

<html lang="en">
<head></head>
<body>
    <h2>Edit Record</h2>
    <form method="post" action="">
        Name:<input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br><br>
        Review:<input type="text" id="review" name="review" value="<?php echo $review; ?>"><br><br><br> 
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>