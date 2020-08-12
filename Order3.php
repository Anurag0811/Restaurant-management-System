
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

$sql1  = "INSERT CONTAINS VALUES";

for ($i=0; $i < $_POST['num'] ; $i++) { 
  # code...

$sql1  .="('".$_POST['ItemNo'][$i]."',NULL,'".$_POST['Quantity'][$i]."'),";
 
    

}
$sql1 = rtrim($sql1,",");

if ($conn->query($sql1) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
?> 