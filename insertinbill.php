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






$sql = "INSERT INTO BILL (Billing_Date,Billing_Time,Amount,Modes,No_of_items,mgr_ssnB, Customer_EmailB ) VALUES('2019-05-12','20:10:00',450,'Offline',1,101,'banik20@gmail.com')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 