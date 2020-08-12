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


$ContactNumber = $_POST['ContactNumber'];
$BN = $_POST['BN'];



$sql = "SELECT BillNo,Assigned FROM BILL where BillNo = $BN";
		$result = mysqli_query($conn, $sql);

		if ($result->num_rows > 0) 
		{
			$row = mysqli_fetch_array($result, MYSQLI_NUM);
			if ($row[0] == $BN AND $row[1] == 1) 
			{
	    		$sql = "INSERT ASSIGNS VALUES(101,'$ContactNumber','$BN')";
	    		$sql1 = "UPDATE BILL SET Assigned = 0 WHERE BillNo = '$BN' ";
				$result1 = mysqli_query($conn, $sql1);


				if ($conn->query($sql) === TRUE) {
   				header("location:Assigned.php");
				} 
				else 
				{
    			echo "Error: " . $sql . "<br>" . $conn->error;
				}

			} 
			else 
			{
    		header("location:AssignDA.php?Invalid=Please Enter Correct BillNo");
			}
			

		}
		else 
		{
    	header("location:AssignDA.php?Invalid=Please Enter Correct BillNo");
		}	




$conn->close();
?> 