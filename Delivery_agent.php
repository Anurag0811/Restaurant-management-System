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


$sql = "CREATE TABLE ASSIGNS(
mgr_ssnAM VARCHAR(30) REFERENCES MANAGER(mgr_ssn),
Contact_NoDAA VARCHAR(50) REFERENCES DELIVERY_AGENT(Contact_NoDA)
)";


if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>