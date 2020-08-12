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
	session_start();
	$Email = $_POST['Email'];
	$pass = $_POST['password'];
	
	$sql = "SELECT EmailM,Password FROM MANAGER where EmailM = '$Email' && Password = '$pass'";
		$result = mysqli_query($conn, $sql);

		if ($result->num_rows > 0) 
		{
			$row = mysqli_fetch_array($result, MYSQLI_NUM);
			if ($row[0] == $Email && $row[1] == $pass) 
			{
	    		$_SESSION['admin'] = $Email;
	    		header("location:AdminHomepage.php");

			} 

		}
		else 
		{
    	header("location:ALogin.php?Invalid=Please Enter Correct Email and Password");
		}	
	




$conn->close();
?> 


