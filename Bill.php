<?php
$servername = "localhost";
$username = "Rex";
$password = "";
$dbname = "Restaurant";

//myDB is already created

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE TABLE BILL (
Bill_No INT NOT NULL,
Billing_Date Date NOT NULL,
Billing_Time TIME NOT NULL,
Amount VARCHAR(10) NOT NULL,
Mode VARCHAR(30) NOT NULL,
No_of_items INT NOT NULL,
mgr_ssnB INT REFERENCES MANAGER(mgr_ssn),
Customer_EmailB VARCHAR(30) REFERENCES ONLINE_CUSTOMER(Email),
PRIMARY KEY(Bill_No)
)";


if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>