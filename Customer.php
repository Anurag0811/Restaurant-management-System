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


$sql = "CREATE TABLE CUSTOMER(
Name VARCHAR(10) NOT NULL,
Contact_No VARCHAR(30) NOT NULL,
Flat_No VARCHAR(30) NOT NULL,
Street VARCHAR(30) NOT NULL,
City VARCHAR(30) NOT NULL,
PIN VARCHAR(30) NOT NULL,
Email VARCHAR(30) NOT NULL,
Premium_Mem Boolean NOT NULL,
PRIMARY KEY(Email)
)";


if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>