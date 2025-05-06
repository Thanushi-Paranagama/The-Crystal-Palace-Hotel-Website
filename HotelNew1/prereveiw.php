<!DOCTYPE html>
<html>
<head>
    <title>Table With Database</title>
    <style>
         body 
       {
        background: linear-gradient(to bottom, #ffb3cc, #ffcccc);
       }
        table {
            border-collapse: collapse;
            width: 100%;
            color: #7a3e38;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }
        th{
            background-color: #7a3e38;
            color: white;
        }
tr: nth-child(even).{bacfkground-color: #f2f2f2}

    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Review</th>
        </tr>
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

if (isset($_POST['name']) && isset($_POST['review'])) {
    $name = $_POST['name'];
    $review = $_POST['review'];

    if ($name && $review) { // Check if values are not empty
        $stmt = $conn->prepare("INSERT INTO reviews (Name, Review) VALUES (?, ?)");
        if ($stmt === false) {
            die("Error preparing statement: " . $conn->error);
        }

        $stmt->bind_param("ss", $name, $review); // 'ss' indicates two strings
        if ($stmt->execute()) {
            echo "Update successful!<br><br>";
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Name or review cannot be empty!";
    }
}

$sql = "SELECT ID, Name, Review FROM reviews";
$Result = mysqli_query($conn,$sql);

if(mysqli_num_rows($Result)>0)
{
    while($row=mysqli_fetch_assoc($Result))
    {
        $ID=$row["ID"];
        $name=$row["Name"];
        $review=$row["Review"];
        
    echo '<tr>
        <td>'.$ID.'</td>
        <td>'.$name.'</td>
        <td>'.$review.'</td>
        </tr>';
    }

    echo "</table>";
}

else 
{
    echo "0 result";
}

$conn->close();

?>
    </table>
</body>
</html>



