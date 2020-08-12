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


$sql = "CREATE TABLE MANAGER(
mgr_ssn INT NOT NULL,
EmailM VARCHAR(30) NOT NULL,
NameM VARCHAR(30) NOT NULL,
PRIMARY KEY(mgr_ssn)
)";


if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>