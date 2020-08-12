 <?php
$servername = "localhost";
$username = "Rex";
$password = "";
$dbname = "Restaurant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Name = $_POST['Name'];
$ContactNumber = $_POST['ContactNumber'];
$Gender = $_POST['Gender'];
$AC = $_POST['AC'];
$Address = $_POST['Address'];



$sql = "INSERT DELIVERY_AGENT VALUES('$ContactNumber','$Name','$Gender','$AC','$Address')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 