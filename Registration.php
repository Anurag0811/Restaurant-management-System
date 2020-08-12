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
$Email = $_POST['Email'];
$ContactNumber = $_POST['ContactNumber'];
$FN = $_POST['FlatNumber'];
$Street = $_POST['Street'];
$City = $_POST['City'];
$Pincode = $_POST['Pincode'];
$PremiumMemebership = $_POST['PremiumMemebership'];
$Password = $_POST['Password'];



$sql = "INSERT CUSTOMER VALUES('$Name','$ContactNumber','$FN','$Street','$City','$Pincode','$Email','$PremiumMemebership','$Password')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 