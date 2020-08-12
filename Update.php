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

$Dish = $_POST['CB'];
$Availability = $_POST['Availability'];



$sql = "Update MENU SET Availability = $Availability where Name_of_Item = '$Dish'";

$result = mysqli_query($conn, $sql);

header("location:AdminHomepage.php");

$conn->close();
?> 
 