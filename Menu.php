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


$sql = "CREATE TABLE MENU(
Name_of_Item VARCHAR(10) NOT NULL,
Item_No INT  NOT NULL,
Price INT NOT NULL,
Availability Boolean NOT NULL,
PRIMARY KEY(Item_No)
)";


if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>